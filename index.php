<?php
/**
 * Landing Page Bengkel Motor - Garasi Prima Motor
 * Built with PHP Native Modular & Tailwind CSS
 */

// Muat konfigurasi data bengkel
$config = require __DIR__ . '/config.php';

// Muat fungsi pembantu (helpers)
require_once __DIR__ . '/includes/helpers.php';

// 1. Head (HTML Start, Meta Tags, Tailwind, Font, Lucide Icons)
require_once __DIR__ . '/partials/head.php';

// 2. Navbar & Status Jam Buka
require_once __DIR__ . '/partials/navbar.php';
?>

<main class="flex-grow">
    <?php
    // 3. Hero Section (Headline, Live Status Badge, Petunjuk Arah CTA)
    require_once __DIR__ . '/partials/hero.php';

    // 4. Keunggulan Bengkel (Mekanik Ahli, Scanner Injeksi, Garansi)
    require_once __DIR__ . '/partials/features.php';

    // 5. Katalog Layanan Servis (Matic, Bebek, Sport, Injeksi)
    require_once __DIR__ . '/partials/services.php';

    // 6. Alur 4 Langkah Servis Transparan (Cek -> Estimasi -> Servis -> Garansi)
    require_once __DIR__ . '/partials/workflow.php';

    // 7. Komitmen Kejujuran Servis & Fleksibilitas Pelanggan
    require_once __DIR__ . '/partials/facilities.php';

    // 8. Tanya Jawab (FAQ) Interaktif
    require_once __DIR__ . '/partials/faq.php';

    // 9. Lokasi Bengkel, Google Maps Interaktif & Jadwal Lengkap
    require_once __DIR__ . '/partials/location.php';
    ?>
</main>

<?php
// 10. Pre-footer CTA, Footer & Scripts Initializer
require_once __DIR__ . '/partials/footer.php';
?>
