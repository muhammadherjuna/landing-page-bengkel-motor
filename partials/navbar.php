<?php
$status = getWorkshopStatus($config['schedule']);
?>
<!-- Top Utility Bar (Unified Light Clean) -->
<div class="bg-slate-100 text-slate-600 text-xs py-2 px-4 border-b border-slate-200">
    <div class="max-w-7xl mx-auto flex flex-col md:flex-row justify-between items-center gap-2">
        <div class="flex items-center gap-3 sm:gap-4 flex-wrap justify-center md:justify-start text-center md:text-left">
            <span class="flex items-center gap-1.5">
                <i data-lucide="map-pin" class="w-3.5 h-3.5 text-red-600 flex-shrink-0"></i>
                <span class="truncate max-w-[260px] sm:max-w-xs md:max-w-sm lg:max-w-md font-medium text-slate-700"><?= e($config['app']['address']) ?></span>
            </span>
            <span class="hidden lg:inline-block text-slate-300">•</span>
            <a href="tel:<?= e($config['app']['phone_raw']) ?>" class="hidden lg:flex items-center gap-1.5 text-slate-700 hover:text-blue-700 transition-colors font-medium">
                <i data-lucide="phone" class="w-3.5 h-3.5 text-slate-500"></i>
                <span>WA: <?= e($config['app']['phone']) ?></span>
            </a>
        </div>
        <div class="flex items-center gap-3 flex-shrink-0">
            <!-- Dynamic Status Badge -->
            <div id="live-status-pill" class="flex items-center gap-1.5 px-2.5 py-0.5 rounded-full text-xs font-semibold <?= $status['is_open'] ? 'bg-emerald-100 text-emerald-800 border border-emerald-300' : 'bg-rose-100 text-rose-800 border border-rose-300' ?>">
                <span class="w-2 h-2 rounded-full <?= $status['is_open'] ? 'bg-emerald-600' : 'bg-rose-600' ?>"></span>
                <span id="status-label"><?= e($status['status_label']) ?></span>
                <span class="text-slate-600 font-normal hidden sm:inline">(<?= e($status['today_hours']) ?>)</span>
            </div>
            <span class="text-slate-300 hidden xl:inline">|</span>
            <span class="text-slate-500 hidden xl:inline text-[11px]">Buka Setiap Hari • Langsung Datang</span>
        </div>
    </div>
</div>

<!-- Main Sticky Header -->
<header class="sticky top-0 z-50 bg-white/95 backdrop-blur-sm border-b border-slate-200 transition-all duration-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-20">
            
            <!-- Brand Logo -->
            <a href="#beranda" class="flex items-center gap-3 group flex-shrink-0">
                <div class="w-11 h-11 rounded-lg bg-blue-700 text-white flex items-center justify-center flex-shrink-0">
                    <i data-lucide="wrench" class="w-5 h-5 text-white"></i>
                </div>
                <div>
                    <div class="flex items-center gap-1.5">
                        <span class="font-extrabold text-xl tracking-tight text-slate-900">
                            GARASI<span class="text-blue-700">PRIMA</span>
                        </span>
                        <span class="text-[10px] uppercase font-bold tracking-wider px-1.5 py-0.5 bg-red-600 text-white rounded">MOTOR</span>
                    </div>
                    <p class="text-xs text-slate-500 font-medium">Servis & Perawatan Motor Berkala</p>
                </div>
            </a>

            <!-- Desktop Nav Menu (Active on xl >= 1200px) -->
            <nav class="hidden xl:flex items-center space-x-1 font-medium text-sm text-slate-700">
                <a href="#beranda" class="px-3 py-2 rounded-md hover:text-blue-700 hover:bg-slate-100 transition-colors whitespace-nowrap">Beranda</a>
                <a href="#keunggulan" class="px-3 py-2 rounded-md hover:text-blue-700 hover:bg-slate-100 transition-colors whitespace-nowrap">Keunggulan</a>
                <a href="#layanan" class="px-3 py-2 rounded-md hover:text-blue-700 hover:bg-slate-100 transition-colors whitespace-nowrap">Layanan & Biaya</a>
                <a href="#alur-servis" class="px-3 py-2 rounded-md hover:text-blue-700 hover:bg-slate-100 transition-colors whitespace-nowrap">Alur Servis</a>
                <a href="#komitmen-jujur" class="px-3 py-2 rounded-md hover:text-blue-700 hover:bg-slate-100 transition-colors whitespace-nowrap">Kejujuran</a>
                <a href="#testimoni" class="px-3 py-2 rounded-md hover:text-blue-700 hover:bg-slate-100 transition-colors whitespace-nowrap">Ulasan</a>
                <a href="#faq" class="px-3 py-2 rounded-md hover:text-blue-700 hover:bg-slate-100 transition-colors whitespace-nowrap">FAQ</a>
                <a href="#lokasi" class="px-3 py-2 rounded-md hover:text-blue-700 hover:bg-slate-100 transition-colors whitespace-nowrap">Lokasi & Jam</a>
            </nav>

            <!-- Standardized Primary Action Button (Active on xl >= 1200px) -->
            <div class="hidden xl:flex items-center gap-3 flex-shrink-0">
                <a href="<?= e($config['app']['google_maps_directions']) ?>" target="_blank" rel="noopener noreferrer" class="btn-primary">
                    <i data-lucide="navigation" class="w-4 h-4"></i>
                    <span>Petunjuk Arah</span>
                </a>
            </div>

            <!-- Mobile & Tablet Hamburger Button (< 1200px) -->
            <div class="flex items-center xl:hidden">
                <button id="mobile-menu-btn" type="button" aria-label="Buka Menu Navigasi" class="p-2.5 rounded-lg text-slate-700 hover:bg-slate-100 focus:outline-none focus:ring-2 focus:ring-blue-600">
                    <i id="menu-icon" data-lucide="menu" class="w-6 h-6"></i>
                </button>
            </div>

        </div>
    </div>

    <!-- Mobile & Tablet Drawer Navigation (< 1200px) -->
    <div id="mobile-menu" class="hidden xl:hidden border-t border-slate-200 bg-white">
        <div class="px-4 pt-3 pb-6 space-y-1">
            <a href="#beranda" class="mobile-nav-link block px-3 py-2.5 rounded-lg text-base font-semibold text-slate-800 hover:bg-slate-100 hover:text-blue-700">Beranda</a>
            <a href="#keunggulan" class="mobile-nav-link block px-3 py-2.5 rounded-lg text-base font-semibold text-slate-800 hover:bg-slate-100 hover:text-blue-700">Keunggulan Bengkel</a>
            <a href="#layanan" class="mobile-nav-link block px-3 py-2.5 rounded-lg text-base font-semibold text-slate-800 hover:bg-slate-100 hover:text-blue-700">Paket & Layanan</a>
            <a href="#alur-servis" class="mobile-nav-link block px-3 py-2.5 rounded-lg text-base font-semibold text-slate-800 hover:bg-slate-100 hover:text-blue-700">Alur 4 Langkah Servis</a>
            <a href="#komitmen-jujur" class="mobile-nav-link block px-3 py-2.5 rounded-lg text-base font-semibold text-slate-800 hover:bg-slate-100 hover:text-blue-700">Kejujuran Servis</a>
            <a href="#testimoni" class="mobile-nav-link block px-3 py-2.5 rounded-lg text-base font-semibold text-slate-800 hover:bg-slate-100 hover:text-blue-700">Ulasan Google Review</a>
            <a href="#faq" class="mobile-nav-link block px-3 py-2.5 rounded-lg text-base font-semibold text-slate-800 hover:bg-slate-100 hover:text-blue-700">Tanya Jawab (FAQ)</a>
            <a href="#lokasi" class="mobile-nav-link block px-3 py-2.5 rounded-lg text-base font-semibold text-slate-800 hover:bg-slate-100 hover:text-blue-700">Lokasi & Jadwal Jam Buka</a>
            
            <div class="pt-4 border-t border-slate-200 space-y-2">
                <a href="<?= e($config['app']['google_maps_directions']) ?>" target="_blank" rel="noopener noreferrer" class="btn-primary w-full">
                    <i data-lucide="navigation" class="w-4 h-4"></i>
                    <span>Buka Rute di Google Maps</span>
                </a>
                <a href="tel:<?= e($config['app']['phone_raw']) ?>" class="btn-secondary w-full">
                    <i data-lucide="phone" class="w-4 h-4 text-slate-600"></i>
                    <span>Hubungi: <?= e($config['app']['phone']) ?></span>
                </a>
            </div>
        </div>
    </div>
</header>
