<?php
$status = getWorkshopStatus($config['schedule']);
?>
<!-- Top Utility Bar -->
<div class="bg-slate-900 text-slate-300 text-xs py-2 px-4 border-b border-slate-800">
    <div class="max-w-7xl mx-auto flex flex-col sm:flex-row justify-between items-center gap-2">
        <div class="flex items-center gap-4 flex-wrap justify-center sm:justify-start">
            <span class="flex items-center gap-1.5">
                <i data-lucide="map-pin" class="w-3.5 h-3.5 text-racing-red"></i>
                <span class="truncate max-w-xs sm:max-w-md"><?= e($config['app']['address']) ?></span>
            </span>
            <span class="hidden md:inline-block text-slate-600">•</span>
            <span class="hidden md:flex items-center gap-1.5 text-slate-300">
                <i data-lucide="phone" class="w-3.5 h-3.5 text-brand-500"></i>
                <span><?= e($config['app']['phone']) ?></span>
            </span>
        </div>
        <div class="flex items-center gap-3">
            <!-- Dynamic Status Badge -->
            <div id="live-status-pill" class="flex items-center gap-1.5 px-2.5 py-0.5 rounded-full text-xs font-semibold <?= $status['is_open'] ? 'bg-emerald-950/80 text-emerald-400 border border-emerald-800/60' : 'bg-rose-950/80 text-rose-400 border border-rose-800/60' ?>">
                <span class="w-2 h-2 rounded-full <?= $status['is_open'] ? 'bg-emerald-400 animate-pulse' : 'bg-rose-400' ?>"></span>
                <span id="status-label"><?= e($status['status_label']) ?></span>
                <span class="text-slate-400 font-normal hidden lg:inline">(<?= e($status['today_hours']) ?>)</span>
            </div>
            <span class="text-slate-400 hidden sm:inline">|</span>
            <span class="text-slate-400 hidden sm:inline text-[11px]">Tanpa Reservasi • Langsung Datang</span>
        </div>
    </div>
</div>

<!-- Main Sticky Header -->
<header class="sticky top-0 z-50 bg-white/95 backdrop-blur-md border-b border-slate-200/80 transition-all duration-300 shadow-sm">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-20">
            <!-- Brand Logo -->
            <a href="#beranda" class="flex items-center gap-3 group">
                <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-brand-700 via-brand-800 to-slate-900 text-white flex items-center justify-center shadow-md group-hover:scale-105 transition-transform duration-200">
                    <i data-lucide="wrench" class="w-6 h-6 text-brand-200 group-hover:rotate-45 transition-transform duration-300"></i>
                </div>
                <div>
                    <div class="flex items-center gap-1.5">
                        <span class="font-extrabold text-xl sm:text-2xl tracking-tight text-slate-900">
                            GARASI<span class="text-brand-600">PRIMA</span>
                        </span>
                        <span class="text-[10px] uppercase font-bold tracking-wider px-1.5 py-0.5 bg-racing-red text-white rounded">MOTOR</span>
                    </div>
                    <p class="text-xs text-slate-500 font-medium">Servis & Perawatan Motor Berkala</p>
                </div>
            </a>

            <!-- Desktop Nav Menu -->
            <nav class="hidden lg:flex items-center space-x-1 font-medium text-sm text-slate-700">
                <a href="#beranda" class="px-3 py-2 rounded-lg hover:text-brand-600 hover:bg-slate-100/70 transition-colors">Beranda</a>
                <a href="#keunggulan" class="px-3 py-2 rounded-lg hover:text-brand-600 hover:bg-slate-100/70 transition-colors">Keunggulan</a>
                <a href="#layanan" class="px-3 py-2 rounded-lg hover:text-brand-600 hover:bg-slate-100/70 transition-colors">Layanan</a>
                <a href="#alur-servis" class="px-3 py-2 rounded-lg hover:text-brand-600 hover:bg-slate-100/70 transition-colors">Alur Servis</a>
                <a href="#komitmen-jujur" class="px-3 py-2 rounded-lg hover:text-brand-600 hover:bg-slate-100/70 transition-colors">Kejujuran Servis</a>
                <a href="#faq" class="px-3 py-2 rounded-lg hover:text-brand-600 hover:bg-slate-100/70 transition-colors">FAQ</a>
                <a href="#lokasi" class="px-3 py-2 rounded-lg hover:text-brand-600 hover:bg-slate-100/70 transition-colors">Lokasi & Jam</a>
            </nav>

            <!-- Action Button & CTA -->
            <div class="hidden sm:flex items-center gap-3">
                <a href="<?= e($config['app']['google_maps_directions']) ?>" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-2 px-4 py-2.5 rounded-xl bg-racing-red hover:bg-racing-redDark text-white font-semibold text-sm shadow-md hover:shadow-lg transition-all duration-200 transform hover:-translate-y-0.5 active:translate-y-0">
                    <i data-lucide="navigation" class="w-4 h-4"></i>
                    <span>Petunjuk Arah</span>
                </a>
            </div>

            <!-- Mobile Menu Button -->
            <div class="flex items-center gap-2 lg:hidden">
                <a href="<?= e($config['app']['google_maps_directions']) ?>" target="_blank" rel="noopener noreferrer" class="p-2 rounded-lg bg-racing-red text-white text-xs font-semibold flex items-center gap-1 sm:hidden">
                    <i data-lucide="navigation" class="w-4 h-4"></i>
                    <span>Rute</span>
                </a>
                <button id="mobile-menu-btn" type="button" aria-label="Toggle Navigation Menu" class="p-2.5 rounded-lg text-slate-700 hover:bg-slate-100 focus:outline-none focus:ring-2 focus:ring-brand-500">
                    <i id="menu-icon" data-lucide="menu" class="w-6 h-6"></i>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Drawer Navigation -->
    <div id="mobile-menu" class="hidden lg:hidden border-t border-slate-200 bg-white shadow-xl transition-all">
        <div class="px-4 pt-3 pb-6 space-y-1">
            <a href="#beranda" class="mobile-nav-link block px-3 py-2.5 rounded-lg text-base font-semibold text-slate-800 hover:bg-brand-50 hover:text-brand-600">Beranda</a>
            <a href="#keunggulan" class="mobile-nav-link block px-3 py-2.5 rounded-lg text-base font-semibold text-slate-800 hover:bg-brand-50 hover:text-brand-600">Keunggulan Bengkel</a>
            <a href="#layanan" class="mobile-nav-link block px-3 py-2.5 rounded-lg text-base font-semibold text-slate-800 hover:bg-brand-50 hover:text-brand-600">Paket & Layanan</a>
            <a href="#alur-servis" class="mobile-nav-link block px-3 py-2.5 rounded-lg text-base font-semibold text-slate-800 hover:bg-brand-50 hover:text-brand-600">Alur 4 Langkah Servis</a>
            <a href="#komitmen-jujur" class="mobile-nav-link block px-3 py-2.5 rounded-lg text-base font-semibold text-slate-800 hover:bg-brand-50 hover:text-brand-600">Kejujuran Servis</a>
            <a href="#faq" class="mobile-nav-link block px-3 py-2.5 rounded-lg text-base font-semibold text-slate-800 hover:bg-brand-50 hover:text-brand-600">Tanya Jawab (FAQ)</a>
            <a href="#lokasi" class="mobile-nav-link block px-3 py-2.5 rounded-lg text-base font-semibold text-slate-800 hover:bg-brand-50 hover:text-brand-600">Lokasi & Jadwal Jam Buka</a>
            
            <div class="pt-4 border-t border-slate-100 space-y-2">
                <a href="<?= e($config['app']['google_maps_directions']) ?>" target="_blank" rel="noopener noreferrer" class="w-full flex items-center justify-center gap-2 py-3 px-4 rounded-xl bg-racing-red text-white font-bold text-sm shadow-md">
                    <i data-lucide="navigation" class="w-4 h-4"></i>
                    <span>Buka Rute di Google Maps</span>
                </a>
                <a href="tel:<?= e($config['app']['phone_raw']) ?>" class="w-full flex items-center justify-center gap-2 py-2.5 px-4 rounded-xl bg-slate-100 text-slate-700 font-semibold text-sm hover:bg-slate-200">
                    <i data-lucide="phone-call" class="w-4 h-4 text-brand-600"></i>
                    <span>Hubungi Bengkel: <?= e($config['app']['phone']) ?></span>
                </a>
            </div>
        </div>
    </div>
</header>
