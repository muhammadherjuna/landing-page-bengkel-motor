<?php
$status = getWorkshopStatus($config['schedule']);
?>
<section id="beranda" class="relative overflow-hidden bg-gradient-to-b from-brand-50/70 via-white to-slate-50 pt-12 pb-20 lg:pt-20 lg:pb-28 border-b border-slate-200/60">
    <!-- Decorative subtle grid background -->
    <div class="absolute inset-0 bg-[linear-gradient(to_right,#e2e8f0_1px,transparent_1px),linear-gradient(to_bottom,#e2e8f0_1px,transparent_1px)] bg-[size:4rem_4rem] [mask-image:radial-gradient(ellipse_60%_50%_at_50%_0%,#000_70%,transparent_100%)] opacity-40 pointer-events-none"></div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-8 items-center">
            
            <!-- Left Column: Copywriting & CTAs -->
            <div class="lg:col-span-7 space-y-6 text-center lg:text-left">
                
                <!-- Trust Pill Badge -->
                <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-blue-50 border border-brand-200 text-brand-700 text-xs sm:text-sm font-semibold shadow-xs">
                    <span class="flex h-2 w-2 rounded-full bg-brand-600 animate-ping"></span>
                    <i data-lucide="shield-check" class="w-4 h-4 text-brand-600"></i>
                    <span>Bengkel Motor Terpercaya • Servis Jujur & Transparan</span>
                </div>

                <!-- Main Hero Headline -->
                <h1 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold text-slate-900 tracking-tight leading-[1.15]">
                    Tarikan Motor Enteng & Nyaman, <span class="text-transparent bg-clip-text bg-gradient-to-r from-brand-700 via-brand-600 to-racing-red">Tanpa Khawatir Biaya Tipu-Tipu.</span>
                </h1>

                <!-- Sub-headline -->
                <p class="text-lg sm:text-xl text-slate-600 font-normal leading-relaxed max-w-2xl mx-auto lg:mx-0">
                    <?= e($config['app']['subtagline']) ?> Cukup bawa motormu, mekanik ahli kami siap mengembalikan performa terbaik motor kesayangan Anda.
                </p>

                <!-- Live Workshop Status Alert Card -->
                <div class="p-4 rounded-2xl bg-white border border-slate-200/80 shadow-soft max-w-xl mx-auto lg:mx-0 text-left">
                    <div class="flex items-start sm:items-center justify-between gap-4 flex-col sm:flex-row">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 rounded-xl <?= $status['is_open'] ? 'bg-emerald-100 text-emerald-700' : 'bg-rose-100 text-rose-700' ?> flex items-center justify-center flex-shrink-0">
                                <i data-lucide="<?= $status['is_open'] ? 'door-open' : 'door-closed' ?>" class="w-5 h-5"></i>
                            </div>
                            <div>
                                <div class="flex items-center gap-2">
                                    <span class="font-bold text-slate-900 text-sm">Status Hari Ini (<?= e($status['day_name']) ?>):</span>
                                    <span class="text-xs px-2 py-0.5 rounded-md font-bold <?= $status['is_open'] ? 'bg-emerald-50 text-emerald-700 border border-emerald-200' : 'bg-rose-50 text-rose-700 border border-rose-200' ?>">
                                        <?= e($status['status_label']) ?>
                                    </span>
                                </div>
                                <p class="text-xs text-slate-500 font-medium mt-0.5">
                                    Jam Operasional: <span class="font-semibold text-slate-700"><?= e($status['today_hours']) ?></span>
                                </p>
                            </div>
                        </div>
                        <span class="text-[11px] font-medium text-slate-500 bg-slate-50 px-2.5 py-1 rounded-lg border border-slate-100 self-stretch sm:self-auto text-center">
                            <?= e($status['next_open']) ?>
                        </span>
                    </div>
                </div>

                <!-- Main CTA Action Buttons -->
                <div class="pt-2 flex flex-col sm:flex-row items-center justify-center lg:justify-start gap-4">
                    <a href="<?= e($config['app']['google_maps_directions']) ?>" target="_blank" rel="noopener noreferrer" class="w-full sm:w-auto inline-flex items-center justify-center gap-3 px-8 py-4 rounded-xl bg-gradient-to-r from-racing-red to-racing-redDark hover:from-racing-redDark hover:to-red-700 text-white font-bold text-base shadow-lg shadow-red-500/25 hover:shadow-xl hover:shadow-red-500/30 transition-all duration-200 transform hover:-translate-y-0.5 active:translate-y-0">
                        <i data-lucide="navigation" class="w-5 h-5"></i>
                        <span>Petunjuk Arah Google Maps</span>
                    </a>
                    
                    <a href="#layanan" class="w-full sm:w-auto inline-flex items-center justify-center gap-2 px-6 py-4 rounded-xl bg-white hover:bg-slate-50 text-slate-700 hover:text-brand-600 font-semibold text-base border border-slate-200 shadow-sm transition-all duration-200">
                        <i data-lucide="wrench" class="w-5 h-5 text-brand-600"></i>
                        <span>Daftar Paket Servis</span>
                    </a>
                </div>

                <!-- Micro reassurance bullets -->
                <div class="pt-2 flex items-center justify-center lg:justify-start gap-6 text-xs text-slate-500 font-medium flex-wrap">
                    <span class="flex items-center gap-1.5">
                        <i data-lucide="check-circle" class="w-4 h-4 text-emerald-500"></i>
                        Pengecekan Awal Gratis
                    </span>
                    <span class="flex items-center gap-1.5">
                        <i data-lucide="check-circle" class="w-4 h-4 text-emerald-500"></i>
                        Bisa Dilihat Langsung
                    </span>
                    <span class="flex items-center gap-1.5">
                        <i data-lucide="check-circle" class="w-4 h-4 text-emerald-500"></i>
                        Garansi Servis Resmi
                    </span>
                </div>

            </div>

            <!-- Right Column: Interactive Workshop Card & Visual Showcase -->
            <div class="lg:col-span-5">
                <div class="relative mx-auto max-w-md lg:max-w-none">
                    
                    <!-- Decorative glow backdrop -->
                    <div class="absolute -inset-1.5 bg-gradient-to-r from-brand-600 via-blue-500 to-racing-red rounded-3xl blur-lg opacity-25"></div>

                    <!-- Main Showcase Card -->
                    <div class="relative bg-white rounded-2xl border border-slate-200/90 shadow-card p-6 sm:p-8 space-y-6">
                        
                        <!-- Header of Card -->
                        <div class="flex items-center justify-between pb-4 border-b border-slate-100">
                            <div class="flex items-center gap-3">
                                <div class="w-10 h-10 rounded-xl bg-brand-50 text-brand-600 flex items-center justify-center font-bold">
                                    <i data-lucide="award" class="w-6 h-6"></i>
                                </div>
                                <div>
                                    <h3 class="font-bold text-slate-900 leading-tight"><?= e($config['app']['name']) ?></h3>
                                    <p class="text-xs text-slate-500">Bengkel Umum & Servis Harian</p>
                                </div>
                            </div>
                            <div class="text-right">
                                <div class="flex items-center gap-1 text-amber-500 justify-end">
                                    <i data-lucide="star" class="w-4 h-4 fill-amber-400"></i>
                                    <span class="font-extrabold text-sm text-slate-800"><?= e($config['app']['rating']) ?></span>
                                </div>
                                <span class="text-[11px] text-slate-400">(<?= e($config['app']['review_count']) ?> Ulasan)</span>
                            </div>
                        </div>

                        <!-- 4 Highlights Grid -->
                        <div class="grid grid-cols-2 gap-3.5">
                            <div class="p-3.5 rounded-xl bg-slate-50 border border-slate-100">
                                <p class="text-2xl font-black text-brand-700"><?= e($config['app']['vehicles_serviced']) ?></p>
                                <p class="text-xs text-slate-600 font-medium mt-0.5">Motor Ditangani</p>
                            </div>
                            <div class="p-3.5 rounded-xl bg-slate-50 border border-slate-100">
                                <p class="text-2xl font-black text-brand-700"><?= e($config['app']['experience_years']) ?>+ Th</p>
                                <p class="text-xs text-slate-600 font-medium mt-0.5">Pengalaman Mekanik</p>
                            </div>
                            <div class="p-3.5 rounded-xl bg-slate-50 border border-slate-100">
                                <p class="text-2xl font-black text-racing-red">100%</p>
                                <p class="text-xs text-slate-600 font-medium mt-0.5">Suku Cadang Asli</p>
                            </div>
                            <div class="p-3.5 rounded-xl bg-slate-50 border border-slate-100">
                                <p class="text-2xl font-black text-emerald-600">14 Hari</p>
                                <p class="text-xs text-slate-600 font-medium mt-0.5">Garansi Pengerjaan</p>
                            </div>
                        </div>

                        <!-- Special Service Benefit List -->
                        <div class="space-y-2.5 pt-2">
                            <div class="flex items-center gap-3 text-xs sm:text-sm text-slate-700 font-medium">
                                <div class="w-5 h-5 rounded-full bg-emerald-100 text-emerald-700 flex items-center justify-center flex-shrink-0">
                                    <i data-lucide="check" class="w-3.5 h-3.5"></i>
                                </div>
                                <span>Spesialis CVT Matic Bebas Gredek & Tarikan Berat</span>
                            </div>
                            <div class="flex items-center gap-3 text-xs sm:text-sm text-slate-700 font-medium">
                                <div class="w-5 h-5 rounded-full bg-emerald-100 text-emerald-700 flex items-center justify-center flex-shrink-0">
                                    <i data-lucide="check" class="w-3.5 h-3.5"></i>
                                </div>
                                <span>Pengerjaan Terbuka & Bisa Ditunggu Langsung</span>
                            </div>
                            <div class="flex items-center gap-3 text-xs sm:text-sm text-slate-700 font-medium">
                                <div class="w-5 h-5 rounded-full bg-emerald-100 text-emerald-700 flex items-center justify-center flex-shrink-0">
                                    <i data-lucide="check" class="w-3.5 h-3.5"></i>
                                </div>
                                <span>Boleh Bawa Oli & Sparepart Sendiri dari Rumah</span>
                            </div>
                        </div>

                        <!-- Direct Location CTA inside Card -->
                        <div class="pt-2">
                            <a href="#lokasi" class="w-full flex items-center justify-between p-3.5 rounded-xl bg-slate-900 hover:bg-slate-800 text-white text-xs sm:text-sm font-semibold transition-colors group">
                                <div class="flex items-center gap-2.5">
                                    <i data-lucide="map-pin" class="w-4 h-4 text-racing-red"></i>
                                    <span>Lihat Peta & Jam Buka Lengkap</span>
                                </div>
                                <i data-lucide="arrow-right" class="w-4 h-4 text-slate-400 group-hover:translate-x-1 transition-transform"></i>
                            </a>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
