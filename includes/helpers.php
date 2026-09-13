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
 * Menghclient status operasional bengkel secara real-time
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
