<?php
$status = getWorkshopStatus($config['schedule']);
$currentDayNum = (int)(new DateTime('now', new DateTimeZone('Asia/Jakarta')))->format('N');
?>
<section id="lokasi" class="py-16 bg-slate-50 relative border-t border-slate-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Section Header -->
        <div class="text-center max-w-3xl mx-auto space-y-3 mb-14">
            <div class="inline-flex items-center gap-1.5 px-3 py-1 rounded-md bg-red-50 text-red-800 text-xs font-bold uppercase tracking-wider border border-red-200">
                <i data-lucide="map-pin" class="w-3.5 h-3.5 text-red-600"></i>
                <span>Lokasi & Jadwal Kedatangan</span>
            </div>
            <h2 class="text-2xl sm:text-3xl font-extrabold text-slate-900 tracking-tight">
                Lokasi Bengkel & Jam Operasional
            </h2>
            <p class="text-base text-slate-600 font-normal leading-relaxed">
                Langsung datang ke bengkel tanpa antrean reservasi online. Ikuti rute navigasi Google Maps di bawah ini.
            </p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
            
            <!-- Left Info Column: Address & Schedule Table -->
            <div class="lg:col-span-5 space-y-6">
                
                <!-- Address Card -->
                <div class="p-6 rounded-xl bg-white border border-slate-200 space-y-4">
                    <div class="flex items-start gap-3.5">
                        <div class="w-10 h-10 rounded-lg bg-red-50 text-red-600 flex items-center justify-center flex-shrink-0 mt-0.5">
                            <i data-lucide="map-pin" class="w-5 h-5"></i>
                        </div>
                        <div class="space-y-1">
                            <h3 class="font-bold text-slate-900 text-base">Alamat Lengkap</h3>
                            <p class="text-slate-600 text-sm leading-relaxed"><?= e($config['app']['address']) ?></p>
                        </div>
                    </div>

                    <div class="p-3.5 rounded-lg bg-slate-50 border border-slate-200 flex items-start gap-2.5 text-xs text-slate-600">
                        <i data-lucide="compass" class="w-4 h-4 text-blue-700 flex-shrink-0 mt-0.5"></i>
                        <div>
                            <span class="font-bold text-slate-800">Patokan / Landmark:</span>
                            <p class="mt-0.5"><?= e($config['app']['landmark']) ?></p>
                        </div>
                    </div>

                    <!-- Standardized Action Buttons -->
                    <div class="pt-2 flex flex-col sm:flex-row gap-3">
                        <a href="<?= e($config['app']['google_maps_directions']) ?>" target="_blank" rel="noopener noreferrer" class="btn-primary w-full sm:flex-1">
                            <i data-lucide="navigation" class="w-4 h-4"></i>
                            <span>Buka Navigasi Rute</span>
                        </a>
                        <a href="<?= e($config['app']['whatsapp_url']) ?>" target="_blank" rel="noopener noreferrer" class="btn-secondary w-full sm:flex-1">
                            <i data-lucide="phone" class="w-4 h-4 text-emerald-600"></i>
                            <span>WhatsApp</span>
                        </a>
                    </div>
                </div>

                <!-- Operational Hours Weekly Schedule Table -->
                <div class="p-6 rounded-xl bg-white border border-slate-200 space-y-4">
                    <div class="flex items-center justify-between pb-3 border-b border-slate-200">
                        <div class="flex items-center gap-2.5">
                            <div class="w-7 h-7 rounded bg-blue-50 text-blue-700 flex items-center justify-center">
                                <i data-lucide="clock" class="w-4 h-4"></i>
                            </div>
                            <h3 class="font-bold text-slate-900 text-sm sm:text-base">Jadwal Jam Buka</h3>
                        </div>
                        <span class="text-xs font-bold px-2 py-0.5 rounded <?= $status['is_open'] ? 'bg-emerald-100 text-emerald-800 border border-emerald-300' : 'bg-rose-100 text-rose-800 border border-rose-300' ?>">
                            <?= e($status['status_label']) ?>
                        </span>
                    </div>

                    <div class="divide-y divide-slate-100 text-xs sm:text-sm">
                        <?php foreach ($config['schedule'] as $dayNum => $schedule): ?>
                            <?php $isToday = ($dayNum === $currentDayNum); ?>
                            <div class="py-2.5 flex items-center justify-between <?= $isToday ? 'bg-blue-50/70 -mx-3 px-3 rounded font-bold text-blue-900' : 'text-slate-600' ?>">
                                <div class="flex items-center gap-2">
                                    <span><?= e($schedule['day']) ?></span>
                                    <?php if ($isToday): ?>
                                        <span class="text-[10px] uppercase font-bold px-1.5 py-0.5 bg-blue-700 text-white rounded">Hari Ini</span>
                                    <?php endif; ?>
                                </div>
                                <div class="text-right">
                                    <span class="<?= $isToday ? 'text-blue-800 font-bold' : 'text-slate-800 font-medium' ?>">
                                        <?= e($schedule['open']) ?> - <?= e($schedule['close']) ?> WIB
                                    </span>
                                    <?php if (!empty($schedule['break_note'])): ?>
                                        <p class="text-[10px] text-amber-700 font-normal"><?= e($schedule['break_note']) ?></p>
                                    <?php endif; ?>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>

            </div>

            <!-- Right Column: Interactive Google Maps Iframe -->
            <div class="lg:col-span-7">
                <div class="p-3 sm:p-4 rounded-xl bg-white border border-slate-200 space-y-3">
                    
                    <!-- Map Wrapper -->
                    <div class="relative w-full h-[380px] sm:h-[440px] rounded-lg overflow-hidden bg-slate-100 border border-slate-200">
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
                    <div class="p-3 rounded-lg bg-slate-50 border border-slate-200 flex flex-col sm:flex-row items-center justify-between gap-3 text-xs">
                        <div class="flex items-center gap-2 text-slate-600 text-center sm:text-left">
                            <i data-lucide="check" class="w-4 h-4 text-emerald-600 flex-shrink-0"></i>
                            <span>Akses mudah, parkir motor luas & aman persis di depan bengkel.</span>
                        </div>
                        <a href="<?= e($config['app']['google_maps_directions']) ?>" target="_blank" rel="noopener noreferrer" class="font-semibold text-blue-700 hover:text-blue-900 inline-flex items-center gap-1">
                            <span>Buka di Aplikasi Google Maps</span>
                            <i data-lucide="external-link" class="w-3.5 h-3.5"></i>
                        </a>
                    </div>

                </div>
            </div>

        </div>

    </div>
</section>
