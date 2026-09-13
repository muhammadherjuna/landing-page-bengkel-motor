<?php
/**
 * Helper Functions untuk Landing Page Bengkel
 */

if (!function_exists('e')) {
    function e($string) {
        return htmlspecialchars((string)$string, ENT_QUOTES, 'UTF-8');
    }
}

/**
 * Validasi dan sanitasi URL — hanya izinkan http:// dan https://
 * Mencegah serangan javascript:, data:, atau vbscript: pada atribut href/src
 *
 * @param string $url URL yang akan divalidasi
 * @param string $fallback URL fallback jika gagal validasi
 * @return string URL yang sudah di-escape dan aman
 */
function safeUrl(string $url, string $fallback = '#'): string {
    $url = trim($url);
    if (empty($url)) return e($fallback);

    // Hanya izinkan scheme https:// dan http://
    if (!preg_match('#^https?://#i', $url)) {
        return e($fallback);
    }

    // Validasi format URL dasar
    if (filter_var($url, FILTER_VALIDATE_URL) === false) {
        return e($fallback);
    }

    return e($url);
}

/**
 * Terapkan HTTP Security Headers via PHP
 * Berfungsi sebagai fallback jika .htaccess mod_headers tidak tersedia
 * (misal: Nginx, shared hosting tanpa mod_headers)
 */
function applySecurityHeaders(): void {
    if (headers_sent()) return;

    // Sembunyikan PHP versi dari response header
    header_remove('X-Powered-By');

    // Cegah Clickjacking
    header('X-Frame-Options: SAMEORIGIN');

    // Cegah MIME Sniffing
    header('X-Content-Type-Options: nosniff');

    // XSS Protection (browser lama)
    header('X-XSS-Protection: 1; mode=block');

    // Referrer Policy
    header('Referrer-Policy: strict-origin-when-cross-origin');

    // Permissions Policy
    header('Permissions-Policy: camera=(), microphone=(), geolocation=(), payment=(), usb=(), interest-cohort=()');

    // Content Security Policy
    $csp  = "default-src 'self'; ";
    $csp .= "script-src 'self' 'unsafe-inline' https://cdn.tailwindcss.com https://unpkg.com; ";
    $csp .= "style-src 'self' 'unsafe-inline' https://fonts.googleapis.com; ";
    $csp .= "font-src 'self' https://fonts.gstatic.com; ";
    $csp .= "img-src 'self' data: https:; ";
    $csp .= "frame-src https://www.google.com; ";
    $csp .= "connect-src 'self'; ";
    $csp .= "object-src 'none'; ";
    $csp .= "base-uri 'self'; ";
    $csp .= "form-action 'self';";
    header("Content-Security-Policy: {$csp}");

    // Matikan tampilan error PHP ke publik (tampilkan error hanya di log)
    ini_set('display_errors', '0');
    ini_set('display_startup_errors', '0');
    error_reporting(E_ALL); // Tetap log semua error, tapi tidak tampil ke user
}

/**
 * Menghitung status operasional bengkel secara real-time
 * 
 * @param array $schedule Jadwal mingguan dari config.php
 * @return array Status buka/tutup, jam hari ini, dan pesan info
 */
function getWorkshopStatus(array $schedule): array {
    $now = new DateTime('now', new DateTimeZone('Asia/Jakarta'));
    $dayOfWeek = (int)$now->format('N'); // 1 (Senin) s/d 7 (Minggu)
    $currentTime = $now->format('H:i');

    $todaySchedule = $schedule[$dayOfWeek] ?? null;

    if (!$todaySchedule || empty($todaySchedule['is_open'])) {
        return [
            'is_open'       => false,
            'status_label'  => 'Tutup Hari Ini',
            'badge_color'   => 'red',
            'today_hours'   => 'Libur / Tutup',
            'day_name'      => $todaySchedule['day'] ?? 'Hari Ini',
            'message'       => 'Bengkel sedang tutup hari ini. Buka kembali besok jam 08:00 WIB.',
            'next_open'     => 'Buka besok 08:00 WIB',
        ];
    }

    $openTime = $todaySchedule['open'];
    $closeTime = $todaySchedule['close'];
    $dayName = $todaySchedule['day'];

    if ($currentTime >= $openTime && $currentTime < $closeTime) {
        return [
            'is_open'       => true,
            'status_label'  => 'Buka Sekarang',
            'badge_color'   => 'emerald',
            'today_hours'   => "{$openTime} - {$closeTime} WIB",
            'day_name'      => $dayName,
            'message'       => "Bengkel buka hari ini sampai pukul {$closeTime} WIB. Silakan langsung datang!",
            'next_open'     => "Tutup jam {$closeTime} WIB",
        ];
    } elseif ($currentTime < $openTime) {
        return [
            'is_open'       => false,
            'status_label'  => 'Belum Buka',
            'badge_color'   => 'amber',
            'today_hours'   => "{$openTime} - {$closeTime} WIB",
            'day_name'      => $dayName,
            'message'       => "Bengkel buka hari ini pukul {$openTime} WIB.",
            'next_open'     => "Buka jam {$openTime} WIB",
        ];
    } else {
        return [
            'is_open'       => false,
            'status_label'  => 'Sudah Tutup',
            'badge_color'   => 'red',
            'today_hours'   => "{$openTime} - {$closeTime} WIB",
            'day_name'      => $dayName,
            'message'       => "Bengkel sudah tutup untuk hari ini. Buka kembali besok jam 08:00 WIB.",
            'next_open'     => 'Buka besok 08:00 WIB',
        ];
    }
}

/**
 * Menghasilkan Schema.org JSON-LD structured data (AutoRepair / LocalBusiness)
 * untuk optimasi SEO lokal Google
 * 
 * @param array $config Konfigurasi aplikasi
 * @return string JSON-LD terformat
 */
function getSchemaJsonLd(array $config): string {
    $dayMap = [
        1 => 'Monday',
        2 => 'Tuesday',
        3 => 'Wednesday',
        4 => 'Thursday',
        5 => 'Friday',
        6 => 'Saturday',
        7 => 'Sunday'
    ];
    
    $openingHours = [];
    if (!empty($config['schedule']) && is_array($config['schedule'])) {
        foreach ($config['schedule'] as $dayNum => $sched) {
            if (!empty($sched['is_open'])) {
                $openingHours[] = [
                    '@type'     => 'OpeningHoursSpecification',
                    'dayOfWeek' => $dayMap[$dayNum] ?? 'Monday',
                    'opens'     => $sched['open'] ?? '08:00',
                    'closes'    => $sched['close'] ?? '17:30'
                ];
            }
        }
    }

    $phoneRaw = $config['app']['phone_raw'] ?? '081287654321';
    $formattedIntPhone = '+62' . ltrim($phoneRaw, '0');

    $schema = [
        '@context'            => 'https://schema.org',
        '@type'               => 'AutoRepair',
        'name'                => $config['app']['name'] ?? 'Garasi Prima Motor',
        'description'         => $config['app']['subtagline'] ?? '',
        'telephone'           => $formattedIntPhone,
        'email'               => $config['app']['email'] ?? '',
        'priceRange'          => 'Rp 15.000 - Rp 180.000',
        'paymentAccepted'     => 'Cash, QRIS, Transfer Bank',
        'currenciesAccepted'  => 'IDR',
        'address'             => [
            '@type'           => 'PostalAddress',
            'streetAddress'   => $config['app']['address'] ?? '',
            'addressLocality' => 'Jakarta Timur',
            'addressRegion'   => 'DKI Jakarta',
            'postalCode'      => '13830',
            'addressCountry'  => 'ID'
        ],
        'geo'                 => [
            '@type'           => 'GeoCoordinates',
            'latitude'        => -6.2297465,
            'longitude'       => 106.7891789
        ],
        'hasMap'              => $config['app']['google_maps_directions'] ?? '',
        'openingHoursSpecification' => $openingHours,
        'aggregateRating'     => [
            '@type'           => 'AggregateRating',
            'ratingValue'     => (string)($config['app']['rating'] ?? '4.9'),
            'reviewCount'     => (string)($config['app']['review_count'] ?? '348'),
            'bestRating'      => '5',
            'worstRating'     => '1'
        ]
    ];

    return (string)json_encode($schema, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);
}
