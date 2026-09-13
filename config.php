<?php
/**
 * Konfigurasi Utama Website Bengkel Motor
 * Anda dapat mengubah semua data teks, alamat, kontak, jam operasional,
 * daftar layanan, dan FAQ di bawah ini dengan mudah.
 */

date_default_timezone_set('Asia/Jakarta');

return [
    // ----------------------------------------------------
    // PROFIL & IDENTITAS BENGKEL
    // ----------------------------------------------------
    'app' => [
        'name'          => 'Garasi Prima Motor',
        'tagline'       => 'Bengkel Servis Motor Harian & Perawatan Berkala - Jakarta Timur',
        'subtagline'    => 'Melayani servis rutin, ganti oli, cvt matic, dan perbaikan mesin motor harian Anda. Pengerjaan terbuka di depan mata, biaya transparan, dan boleh bawa sparepart sendiri.',
        'phone'         => '0812-8765-4321',
        'phone_raw'     => '081287654321', // format untuk tel: link
        'whatsapp_url'  => 'https://wa.me/6281287654321',
        'email'         => 'kontak@garasiprimamotor.com',
        'address'       => 'Jl. Raya Otomotif No. 88, RT 03/RW 05, Sukamaju, Jakarta Timur',
        'landmark'      => 'Sebelah SPBU Pertamina 34, 100 meter dari Pasar Sukamaju (Pinggir Jalan Raya)',
        'google_maps_embed' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126915.71077752695!2d106.7891789!3d-6.2297465!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f3e89c5b2061%3A0x7d6b3a0b411d310!2sJakarta%20Timur%2C%20Kota%20Jakarta%20Timur%2C%20Daerah%20Khusus%20Ibukota%20Jakarta!5e0!3m2!1sid!2sid!4v1710000000000!5m2!1sid!2sid',
        'google_maps_directions' => 'https://maps.google.com/?q=Bengkel+Garasi+Prima+Motor+Jakarta',
        'rating'        => 4.9,
        'review_count'  => 348,
        'experience_years' => 12,
        'vehicles_serviced' => '15.000+',
    ],

    // ----------------------------------------------------
    // JADWAL JAM OPERASIONAL
    // Format hari: 1 = Senin, 7 = Minggu
    // ----------------------------------------------------
    'schedule' => [
        1 => ['day' => 'Senin',  'open' => '08:00', 'close' => '17:30', 'is_open' => true],
        2 => ['day' => 'Selasa', 'open' => '08:00', 'close' => '17:30', 'is_open' => true],
        3 => ['day' => 'Rabu',   'open' => '08:00', 'close' => '17:30', 'is_open' => true],
        4 => ['day' => 'Kamis',  'open' => '08:00', 'close' => '17:30', 'is_open' => true],
        5 => ['day' => 'Jumat',  'open' => '08:00', 'close' => '17:30', 'is_open' => true, 'break_note' => 'Istirahat Shalat Jumat 11:30 - 13:00'],
        6 => ['day' => 'Sabtu',  'open' => '08:00', 'close' => '18:00', 'is_open' => true],
        7 => ['day' => 'Minggu', 'open' => '08:30', 'close' => '16:00', 'is_open' => true],
    ],

    // ----------------------------------------------------
    // KEUNGGULAN UTAMA BENGKEL
    // ----------------------------------------------------
    'features' => [
        [
            'icon'        => 'wrench',
            'title'       => 'Mekanik Berpengalaman',
            'description' => 'Ditangani langsung oleh teknisi terlatih dengan jam terbang tinggi menangani aneka kendala motor matic, bebek, dan sport.'
        ],
        [
            'icon'        => 'cpu',
            'title'       => 'Scanner Injeksi Modern',
            'description' => 'Diagnosa akurat dengan scanner OBD-II terkini untuk membaca kerusakan sensor ECU Honda, Yamaha, Suzuki, dan Kawasaki.'
        ],
        [
            'icon'        => 'shield-check',
            'title'       => 'Garansi Servis & Sparepart',
            'description' => 'Jaminan garansi pengerjaan servis hingga 14 hari dan garansi keaslian 100% suku cadang yang kami sediakan.'
        ],
        [
            'icon'        => 'receipt',
            'title'       => 'Biaya Transparan di Awal',
            'description' => 'Pengecekan awal gratis. Estimasi total biaya dan rincian sparepart selalu dikonfirmasikan sebelum mekanik mulai bekerja.'
        ],
        [
            'icon'        => 'eye',
            'title'       => 'Pengerjaan Terbuka & Dilihat Langsung',
            'description' => 'Bebas ditunggu dan dilihat langsung dari dekat saat pembongkaran. Tidak ada trik akal-akalan atau sparepart yang disembunyikan.'
        ],
        [
            'icon'        => 'clock',
            'title'       => 'Pengerjaan Cepat & Presisi',
            'description' => 'Perkakas pneumatik dan kunci lengkap membuat pengerjaan servis berkala, ganti oli, dan CVT selesai cepat tanpa buang waktu.'
        ],
    ],

    // ----------------------------------------------------
    // DAFTAR LAYANAN SERVIS
    // ----------------------------------------------------
    'services' => [
        [
            'id'          => 'servis-berkala',
            'badge'       => 'Paling Populer',
            'title'       => 'Servis Berkala & Tune-Up',
            'tag'         => 'Matic / Bebek / Sport',
            'price_start' => 'Rp 65.000',
            'description' => 'Pembersihan karburator/throttle body, setel klep, cek kelistrikan, cek busi, setel rantai, cek rem, dan uji performa.',
            'items'       => [
                'Pembersihan filter udara & busi',
                'Pengecekan rem depan & belakang',
                'Penyetelan putaran mesin & rantai',
                'Pemeriksaan tekanan angin & ban',
                'Gratis 12 titik inspeksi keselamatan'
            ]
        ],
        [
            'id'          => 'servis-cvt',
            'badge'       => 'Khusus Matic',
            'title'       => 'Servis CVT & Pembersihan V-Belt',
            'tag'         => 'Semua Motor Matic',
            'price_start' => 'Rp 55.000',
            'description' => 'Hilangkan getaran/gredek pada motor matic Anda. Pembersihan menyeluruh mangkok ganda, roller, sliding sheave, dan pelumasan ulang.',
            'items'       => [
                'Pembersihan ruang CVT dari debu & oli',
                'Pemberian CVT grease berkualitas tinggi',
                'Pemeriksaan keausan roller & v-belt',
                'Pengecekan kampas ganda & per sentri',
                'Uji akselerasi bebas gredek'
            ]
        ],
        [
            'id'          => 'injeksi-diagnostic',
            'badge'       => 'Alat Digital',
            'title'       => 'Diagnosa & Cleaning Injeksi',
            'tag'         => 'Motor Injeksi FI',
            'price_start' => 'Rp 75.000',
            'description' => 'Infus pembersihan injector, throttle body cleaner, dan reset sensor ECU dengan alat scanner diagnostik digital.',
            'items'       => [
                'Diagnosa riwayat error sensor ECU',
                'Infus injector pembersih kerak karbon',
                'Cleaning throttle body & sensor IACV',
                'Reset setting ketinggian & altitude ECU',
                'Pengembalian tarikan responsif & irit BBM'
            ]
        ],
        [
            'id'          => 'ganti-oli',
            'badge'       => 'Cepat 10 Menit',
            'title'       => 'Ganti Oli & Filter Oli',
            'tag'         => 'Semua Tipe Motor',
            'price_start' => 'Rp 45.000',
            'description' => 'Ganti oli mesin, oli gardan matic, dan filter oli. Pilihan oli original terlengkap: Shell, Motul, Yamalube, AHM Oil, Castrol, Enduro.',
            'items'       => [
                'Pilihan oli 100% original bergaransi',
                'Boleh bawa oli sendiri (ongkos ganti murah)',
                'Gratis pengecekan level air radiator (coolant)',
                'Gratis semprot rantai / pelumas engsel',
                'Pengerjaan cepat langsung selesai'
            ]
        ],
        [
            'id'          => 'pengereman-kaki',
            'badge'       => 'Keselamatan',
            'title'       => 'Servis Rem & Kaki-Kaki',
            'tag'         => 'Depan & Belakang',
            'price_start' => 'Rp 35.000',
            'description' => 'Penggantian kampas rem cakram & tromol, kuras minyak rem, perbaikan komstir berat, ganti seal shockbreaker bocor, dan bearing roda.',
            'items'       => [
                'Bleeding & ganti minyak rem DOT 3/4',
                'Pembersihan kaliper & piston rem macet',
                'Ganti bearing roda & bos swing arm',
                'Ganti seal shock depan & oli shock baru',
                'Setel komstir presisi tidak goyang'
            ]
        ],
        [
            'id'          => 'turun-mesin',
            'badge'       => 'Garansi 30 Hari',
            'title'       => 'Turun Mesin (Overhaul)',
            'tag'         => 'Perbaikan Menyeluruh',
            'price_start' => 'Rp 350.000',
            'description' => 'Atasi masalah mesin ngebul, suara kasar, oli habis misterius, atau mati mendadak. Pengerjaan presisi dengan suku cadang original.',
            'items'       => [
                'Bongkar & cuci bersih ruang bakar',
                'Korter/bore-up silinder & ganti piston kit',
                'Skir klep & ganti seal klep baru',
                'Ganti rantai keteng & kruk as balance',
                'Garansi pengerjaan mesin hingga 30 hari'
            ]
        ],
    ],

    // ----------------------------------------------------
    // ALUR 4 LANGKAH SERVIS TRANSPARAN
    // ----------------------------------------------------
    'workflow' => [
        [
            'step'        => '01',
            'title'       => 'Datang & Pengecekan Awal',
            'description' => 'Langsung bawa motor Anda ke bengkel. Mekanik kami akan melakukan inspeksi menyeluruh dan mendengarkan keluhan Anda secara gratis.',
            'icon'        => 'clipboard-check'
        ],
        [
            'step'        => '02',
            'title'       => 'Estimasi Biaya Transparan',
            'description' => 'Kami jelaskan detail kerusakan, opsi perbaikan, dan rincian biaya sparepart. Pengerjaan hanya dimulai setelah persetujuan Anda.',
            'icon'        => 'file-text'
        ],
        [
            'step'        => '03',
            'title'       => 'Pengerjaan Jujur & Terbuka',
            'description' => 'Mekanik ahli mengerjakan motor dengan perkakas standar. Anda bisa melihat langsung proses bongkar pasang di depan Anda.',
            'icon'        => 'settings'
        ],
        [
            'step'        => '04',
            'title'       => 'Part Lama Kembali & Garansi',
            'description' => 'Semua sparepart bekas yang diganti diserahkan ke Anda. Motor diuji coba (test ride) dan diberikan nota serta garansi servis.',
            'icon'        => 'badge-check'
        ],
    ],

    // ----------------------------------------------------
    // KOMITMEN KEJUJURAN & KELELUASAAN PELANGGAN
    // ----------------------------------------------------
    'trust_commitments' => [
        [
            'icon'  => 'eye',
            'title' => 'Bisa Dilihat & Ditunggu Langsung',
            'desc'  => 'Pengerjaan terbuka di depan Anda. Tidak ada part yang diakali atau diganti diam-diam.'
        ],
        [
            'icon'  => 'package',
            'title' => 'Bebas Bawa Part / Oli Sendiri',
            'desc'  => 'Punya oli atau sparepart sendiri dari rumah? Bawa saja, kami hanya kenakan ongkos pasang.'
        ],
        [
            'icon'  => 'rotate-ccw',
            'title' => 'Part Bekas Wajib Dikembalikan',
            'desc'  => 'Semua sparepart lama yang diganti wajib kami serahkan kembali ke Anda sebagai bukti keaslian.'
        ],
        [
            'icon'  => 'badge-percent',
            'title' => 'Cek Gratis Tanpa Paksaan',
            'desc'  => 'Inspeksi awal dan konsultasi 100% gratis. Tidak ada paksaan servis jika budget belum sesuai.'
        ],
        [
            'icon'  => 'qr-code',
            'title' => 'Bayar Fleksibel QRIS & Tunai',
            'desc'  => 'Bisa bayar non-tunai pakai QRIS semua bank/e-wallet atau uang tunai tanpa repot cari ATM.'
        ],
        [
            'icon'  => 'map-pin',
            'title' => 'Akses Langsung Pinggir Jalan',
            'desc'  => 'Lokasi strategis di pinggir jalan raya utama dengan parkir motor yang mudah dan aman.'
        ],
    ],

    // ----------------------------------------------------
    // FAQ (FREQUENTLY ASKED QUESTIONS)
    // ----------------------------------------------------
    'faqs' => [
        [
            'question' => 'Apakah saya harus reservasi atau booking sebelum datang?',
            'answer'   => 'Tidak perlu! Anda dapat langsung datang ke bengkel kami kapan saja pada jam operasional. Tim mekanik kami langsung mengecek motor Anda sesuai urutan kedatangan.'
        ],
        [
            'question' => 'Apakah proses servis bisa saya lihat dan tunggu langsung?',
            'answer'   => 'Sangat bisa! Kami menerapkan prinsip pengerjaan terbuka. Anda bebas berdiri atau duduk di dekat area kerja untuk melihat langsung setiap bagian motor yang dibongkar dan diganti oleh mekanik.'
        ],
        [
            'question' => 'Apakah boleh membawa oli atau suku cadang sendiri dari rumah?',
            'answer'   => 'Tentu saja boleh! Kami melayani jasa penggantian saja dengan tarif ongkos pasang yang sangat bersahabat dan transparan.'
        ],
        [
            'question' => 'Bagaimana jika saya hanya ingin cek keluhan tanpa langsung servis?',
            'answer'   => 'Pengecekan awal dan konsultasi di bengkel kami 100% GRATIS. Mekanik kami akan menjelaskan sumber masalah dan estimasi biaya tanpa ada paksaan untuk langsung servis saat itu juga.'
        ],
        [
            'question' => 'Berapa lama garansi servis yang diberikan?',
            'answer'   => 'Kami memberikan garansi pengerjaan servis berkala selama 14 hari. Untuk pekerjaan berat seperti turun mesin (overhaul), garansi hingga 30 hari. Cukup bawa nota servis jika terdapat keluhan kembali.'
        ],
        [
            'question' => 'Metode pembayaran apa saja yang diterima di bengkel?',
            'answer'   => 'Kami menerima Tunai (Cash) dan QRIS (BCA, Mandiri, BRI, GoPay, OVO, ShopeePay, Dana) tanpa biaya potongan tambahan.'
        ],
    ]
];
