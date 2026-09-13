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
