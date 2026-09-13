<?php
$status = getWorkshopStatus($config['schedule']);
?>
<section id="beranda" class="relative bg-white pt-10 pb-16 lg:pt-16 lg:pb-24 border-b border-slate-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-12 items-center">
            
            <!-- Left Column: Copywriting & CTAs -->
            <div class="lg:col-span-7 space-y-6 text-center lg:text-left">
                
                <!-- Trust Pill Badge (Clean & Solid) -->
                <div class="inline-flex items-center gap-2 px-3 py-1 rounded-md bg-blue-50 border border-blue-200 text-blue-800 text-xs sm:text-sm font-semibold">
                    <i data-lucide="shield-check" class="w-4 h-4 text-blue-700"></i>
                    <span>Bengkel Servis Motor Terpercaya • Pengerjaan Terbuka & Jujur</span>
                </div>

                <!-- Main Hero Headline (Solid, High Contrast, Anti AI-Slop) -->
                <h1 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-slate-900 tracking-tight leading-[1.2]">
                    Bengkel Servis Motor Harian & Perawatan Berkala di Jakarta Timur.
                </h1>

                <!-- Sub-headline -->
                <p class="text-base sm:text-lg text-slate-600 font-normal leading-relaxed max-w-2xl mx-auto lg:mx-0">
                    <?= e($config['app']['subtagline']) ?>
                </p>

                <!-- Live Workshop Status Alert Card (Clean Light Design) -->
                <div class="p-4 rounded-xl bg-slate-50 border border-slate-200 max-w-xl mx-auto lg:mx-0 text-left">
                    <div class="flex items-start sm:items-center justify-between gap-3 flex-col sm:flex-row">
                        <div class="flex items-center gap-3">
                            <div class="w-9 h-9 rounded-lg <?= $status['is_open'] ? 'bg-emerald-100 text-emerald-800' : 'bg-rose-100 text-rose-800' ?> flex items-center justify-center flex-shrink-0">
                                <i data-lucide="<?= $status['is_open'] ? 'door-open' : 'door-closed' ?>" class="w-4 h-4"></i>
                            </div>
                            <div>
                                <div class="flex items-center gap-2">
                                    <span class="font-bold text-slate-900 text-sm">Status Hari Ini (<?= e($status['day_name']) ?>):</span>
                                    <span class="text-xs px-2 py-0.5 rounded font-bold <?= $status['is_open'] ? 'bg-emerald-100 text-emerald-800 border border-emerald-300' : 'bg-rose-100 text-rose-800 border border-rose-300' ?>">
                                        <?= e($status['status_label']) ?>
                                    </span>
                                </div>
                                <p class="text-xs text-slate-500 font-medium mt-0.5">
                                    Jam Operasional: <span class="font-semibold text-slate-800"><?= e($status['today_hours']) ?></span>
                                </p>
                            </div>
                        </div>
                        <span class="text-xs font-medium text-slate-600 bg-white px-2.5 py-1 rounded border border-slate-200 self-stretch sm:self-auto text-center">
                            <?= e($status['next_open']) ?>
                        </span>
                    </div>
                </div>

                <!-- Main CTA Action Buttons (Standardized 2-Level System) -->
                <div class="pt-2 flex flex-col sm:flex-row items-center justify-center lg:justify-start gap-3">
                    <a href="<?= e($config['app']['google_maps_directions']) ?>" target="_blank" rel="noopener noreferrer" class="btn-primary w-full sm:w-auto">
                        <i data-lucide="navigation" class="w-4 h-4"></i>
                        <span>Petunjuk Arah Google Maps</span>
                    </a>
                    
                    <a href="#layanan" class="btn-secondary w-full sm:w-auto">
                        <i data-lucide="wrench" class="w-4 h-4 text-slate-600"></i>
                        <span>Lihat Paket Servis</span>
                    </a>
                </div>

                <!-- Micro reassurance bullets -->
                <div class="pt-2 flex items-center justify-center lg:justify-start gap-5 text-xs text-slate-600 font-medium flex-wrap">
                    <span class="flex items-center gap-1.5">
                        <i data-lucide="check" class="w-4 h-4 text-emerald-600"></i>
                        Pengecekan Awal Gratis
                    </span>
                    <span class="flex items-center gap-1.5">
                        <i data-lucide="check" class="w-4 h-4 text-emerald-600"></i>
                        Bisa Ditunggu & Dilihat Langsung
                    </span>
                    <span class="flex items-center gap-1.5">
                        <i data-lucide="check" class="w-4 h-4 text-emerald-600"></i>
                        Garansi Servis 14 Hari
                    </span>
                </div>

            </div>

            <!-- Right Column: Workshop Highlight Card (Solid, No Glow, Grounded) -->
            <div class="lg:col-span-5">
                <div class="bg-white rounded-xl border border-slate-200 shadow-sm p-6 sm:p-7 space-y-5">
                    
                    <!-- Header of Card -->
                    <div class="flex items-center justify-between pb-4 border-b border-slate-200">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 rounded-lg bg-blue-50 text-blue-700 flex items-center justify-center font-bold">
                                <i data-lucide="award" class="w-5 h-5"></i>
                            </div>
                            <div>
                                <h3 class="font-bold text-slate-900 leading-tight"><?= e($config['app']['name']) ?></h3>
                                <p class="text-xs text-slate-500 font-medium">Bengkel Umum & Servis Harian</p>
                            </div>
                        </div>
                        <div class="text-right">
                            <div class="flex items-center gap-1 text-amber-500 justify-end">
                                <i data-lucide="star" class="w-4 h-4 fill-amber-400"></i>
                                <span class="font-extrabold text-sm text-slate-800"><?= e($config['app']['rating']) ?></span>
                            </div>
                            <span class="text-[11px] text-slate-500">(<?= e($config['app']['review_count']) ?> Ulasan)</span>
                        </div>
                    </div>

                    <!-- Workshop Photo with Verification Badge -->
                    <div class="relative rounded-lg overflow-hidden border border-slate-200 aspect-[16/9] bg-slate-100 shadow-sm group">
                        <img 
                            src="<?= e($config['app']['workshop_photo']) ?>" 
                            alt="Tampak Depan Bengkel <?= e($config['app']['name']) ?>" 
                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300"
                            width="600"
                            height="338"
                            loading="eager"
                        >
                        <div class="absolute bottom-2.5 left-2.5 bg-slate-900/80 backdrop-blur-sm text-white text-[11px] font-medium px-2.5 py-1 rounded-md flex items-center gap-1.5 shadow-sm">
                            <i data-lucide="map-pin" class="w-3.5 h-3.5 text-red-400"></i>
                            <span>Tampak Depan Bengkel & Area Servis</span>
                        </div>
                    </div>

                    <!-- 4 Highlights Grid (Clean White/Slate) -->
                    <div class="grid grid-cols-2 gap-3">
                        <div class="p-3 rounded-lg bg-slate-50 border border-slate-200">
                            <p class="text-xl font-bold text-slate-900"><?= e($config['app']['vehicles_serviced']) ?></p>
                            <p class="text-xs text-slate-600 font-medium mt-0.5">Motor Ditangani</p>
                        </div>
                        <div class="p-3 rounded-lg bg-slate-50 border border-slate-200">
                            <p class="text-xl font-bold text-slate-900"><?= e($config['app']['experience_years']) ?>+ Th</p>
                            <p class="text-xs text-slate-600 font-medium mt-0.5">Pengalaman Mekanik</p>
                        </div>
                        <div class="p-3 rounded-lg bg-slate-50 border border-slate-200">
                            <p class="text-xl font-bold text-red-600">100%</p>
                            <p class="text-xs text-slate-600 font-medium mt-0.5">Suku Cadang Asli</p>
                        </div>
                        <div class="p-3 rounded-lg bg-slate-50 border border-slate-200">
                            <p class="text-xl font-bold text-emerald-700">14 Hari</p>
                            <p class="text-xs text-slate-600 font-medium mt-0.5">Garansi Servis</p>
                        </div>
                    </div>

                    <!-- Honest Benefits List -->
                    <div class="space-y-2.5 pt-1">
                        <div class="flex items-start gap-2.5 text-xs sm:text-sm text-slate-700">
                            <i data-lucide="check-circle" class="w-4 h-4 text-emerald-600 flex-shrink-0 mt-0.5"></i>
                            <span>Spesialis CVT Matic: Bersihkan debu, ganti roller & grease anti-gredek</span>
                        </div>
                        <div class="flex items-start gap-2.5 text-xs sm:text-sm text-slate-700">
                            <i data-lucide="check-circle" class="w-4 h-4 text-emerald-600 flex-shrink-0 mt-0.5"></i>
                            <span>Pengerjaan Terbuka: Anda bisa melihat langsung proses bongkar pasang</span>
                        </div>
                        <div class="flex items-start gap-2.5 text-xs sm:text-sm text-slate-700">
                            <i data-lucide="check-circle" class="w-4 h-4 text-emerald-600 flex-shrink-0 mt-0.5"></i>
                            <span>Boleh bawa sparepart & oli sendiri dari rumah (ongkos pasang terjangkau)</span>
                        </div>
                    </div>

                    <!-- Direct Location CTA inside Card (Standardized Secondary Button) -->
                    <div class="pt-2">
                        <a href="#lokasi" class="btn-secondary w-full justify-between">
                            <span class="flex items-center gap-2">
                                <i data-lucide="map-pin" class="w-4 h-4 text-red-600"></i>
                                <span>Lihat Peta & Jam Buka Lengkap</span>
                            </span>
                            <i data-lucide="chevron-right" class="w-4 h-4 text-slate-400"></i>
                        </a>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>
