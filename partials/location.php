<?php
$status = getWorkshopStatus($config['schedule']);
$currentDayNum = (int)(new DateTime('now', new DateTimeZone('Asia/Jakarta')))->format('N');
?>
<section id="lokasi" class="py-20 bg-slate-100/70 relative border-t border-slate-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Section Header -->
        <div class="text-center max-w-3xl mx-auto space-y-4 mb-16">
            <div class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-racing-red/10 text-racing-redDark text-xs font-bold uppercase tracking-wider">
                <i data-lucide="map-pin" class="w-3.5 h-3.5"></i>
                <span>Lokasi & Jadwal Kedatangan</span>
            </div>
            <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 tracking-tight">
                Kunjungi Bengkel Kami Langsung
            </h2>
            <p class="text-base sm:text-lg text-slate-600 font-normal leading-relaxed">
                Tanpa perlu reservasi online yang membingungkan. Cukup ikuti rute navigasi peta dan tim mekanik kami siap menyambut motor Anda.
            </p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
            
            <!-- Left Info Column: Address & Schedule Table -->
            <div class="lg:col-span-5 space-y-6">
                
                <!-- Address Card -->
                <div class="p-6 rounded-2xl bg-white border border-slate-200 shadow-soft space-y-4">
                    <div class="flex items-start gap-3.5">
                        <div class="w-10 h-10 rounded-xl bg-red-50 text-racing-red flex items-center justify-center flex-shrink-0 mt-0.5">
                            <i data-lucide="map-pin" class="w-5 h-5"></i>
                        </div>
                        <div class="space-y-1">
                            <h3 class="font-bold text-slate-900 text-base">Alamat Lengkap</h3>
                            <p class="text-slate-600 text-sm leading-relaxed"><?= e($config['app']['address']) ?></p>
                        </div>
                    </div>

                    <div class="p-3.5 rounded-xl bg-slate-50 border border-slate-100 flex items-start gap-2.5 text-xs text-slate-600">
                        <i data-lucide="compass" class="w-4 h-4 text-brand-600 flex-shrink-0 mt-0.5"></i>
                        <div>
                            <span class="font-bold text-slate-800">Patokan / Landmark:</span>
                            <p class="mt-0.5"><?= e($config['app']['landmark']) ?></p>
                        </div>
                    </div>

                    <div class="pt-2 flex flex-col sm:flex-row gap-3">
                        <a href="<?= e($config['app']['google_maps_directions']) ?>" target="_blank" rel="noopener noreferrer" class="flex-1 flex items-center justify-center gap-2 py-3 px-4 rounded-xl bg-racing-red hover:bg-racing-redDark text-white font-bold text-xs shadow-md transition-all">
                            <i data-lucide="navigation" class="w-4 h-4"></i>
                            <span>Buka Navigasi Rute</span>
                        </a>
                        <a href="tel:<?= e($config['app']['phone_raw']) ?>" class="flex items-center justify-center gap-2 py-3 px-4 rounded-xl bg-slate-100 hover:bg-slate-200 text-slate-800 font-semibold text-xs transition-colors">
                            <i data-lucide="phone" class="w-4 h-4 text-brand-600"></i>
                            <span>Hubungi</span>
                        </a>
                    </div>
                </div>

                <!-- Operational Hours Weekly Schedule Table -->
                <div class="p-6 rounded-2xl bg-white border border-slate-200 shadow-soft space-y-4">
                    <div class="flex items-center justify-between pb-3 border-b border-slate-100">
                        <div class="flex items-center gap-2.5">
                            <div class="w-8 h-8 rounded-lg bg-brand-50 text-brand-600 flex items-center justify-center">
                                <i data-lucide="clock" class="w-4 h-4"></i>
                            </div>
                            <h3 class="font-bold text-slate-900 text-sm sm:text-base">Jadwal Jam Operasional</h3>
                        </div>
                        <span class="text-xs font-bold px-2 py-0.5 rounded-md <?= $status['is_open'] ? 'bg-emerald-50 text-emerald-700 border border-emerald-200' : 'bg-rose-50 text-rose-700 border border-rose-200' ?>">
                            <?= e($status['status_label']) ?>
                        </span>
                    </div>

                    <div class="divide-y divide-slate-100 text-xs sm:text-sm">
                        <?php foreach ($config['schedule'] as $dayNum => $schedule): ?>
                            <?php $isToday = ($dayNum === $currentDayNum); ?>
                            <div class="py-2.5 flex items-center justify-between <?= $isToday ? 'bg-brand-50/70 -mx-3 px-3 rounded-lg font-bold text-brand-900' : 'text-slate-600' ?>">
                                <div class="flex items-center gap-2">
                                    <span><?= e($schedule['day']) ?></span>
                                    <?php if ($isToday): ?>
                                        <span class="text-[10px] uppercase font-extrabold px-1.5 py-0.5 bg-brand-600 text-white rounded">Hari Ini</span>
                                    <?php endif; ?>
                                </div>
                                <div class="text-right">
                                    <span class="<?= $isToday ? 'text-brand-700 font-extrabold' : 'text-slate-800 font-medium' ?>">
                                        <?= e($schedule['open']) ?> - <?= e($schedule['close']) ?> WIB
                                    </span>
                                    <?php if (!empty($schedule['break_note'])): ?>
                                        <p class="text-[10px] text-amber-600 font-normal"><?= e($schedule['break_note']) ?></p>
                                    <?php endif; ?>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>

            </div>

            <!-- Right Column: Interactive Google Maps Iframe -->
            <div class="lg:col-span-7">
                <div class="p-3 sm:p-4 rounded-3xl bg-white border border-slate-200 shadow-soft space-y-4">
                    
                    <!-- Map Wrapper -->
                    <div class="relative w-full h-[400px] sm:h-[480px] rounded-2xl overflow-hidden bg-slate-100 border border-slate-200">
                        <iframe 
                            src="<?= e($config['app']['google_maps_embed']) ?>" 
                            width="100%" 
                            height="100%" 
                            style="border:0;" 
                            allowfullscreen="" 
                            loading="lazy" 
                            referrerpolicy="no-referrer-when-downgrade"
                            title="Peta Lokasi Bengkel <?= e($config['app']['name']) ?>"
                            class="w-full h-full">
                        </iframe>
                    </div>

                    <!-- Map Footer Actions -->
                    <div class="p-3 rounded-xl bg-slate-50 border border-slate-100 flex flex-col sm:flex-row items-center justify-between gap-3 text-xs">
                        <div class="flex items-center gap-2 text-slate-600 text-center sm:text-left">
                            <i data-lucide="car" class="w-4 h-4 text-brand-600 flex-shrink-0"></i>
                            <span>Akses mudah, parkir motor luas & aman di depan bengkel.</span>
                        </div>
                        <a href="<?= e($config['app']['google_maps_directions']) ?>" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-1.5 font-bold text-brand-700 hover:text-brand-900 transition-colors">
                            <span>Buka di Google Maps App</span>
                            <i data-lucide="external-link" class="w-3.5 h-3.5"></i>
                        </a>
                    </div>

                </div>
            </div>

        </div>

    </div>
</section>
