<section id="layanan" class="py-16 bg-slate-50 relative border-t border-slate-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Section Header -->
        <div class="text-center max-w-3xl mx-auto space-y-3 mb-14">
            <div class="inline-flex items-center gap-1.5 px-3 py-1 rounded-md bg-blue-100 text-blue-800 text-xs font-bold uppercase tracking-wider">
                <i data-lucide="wrench" class="w-3.5 h-3.5 text-blue-700"></i>
                <span>Katalog Layanan Bengkel</span>
            </div>
            <h2 class="text-2xl sm:text-3xl font-extrabold text-slate-900 tracking-tight">
                Pilihan Paket Servis & Estimasi Biaya Jasa
            </h2>
            <p class="text-base text-slate-600 font-normal leading-relaxed">
                Melayani motor matic, bebek, dan sport harian (Honda, Yamaha, Suzuki, Kawasaki). Estimasi tarif jasa transparan sebelum dikerjakan.
            </p>
        </div>

        <!-- Services Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <?php foreach ($config['services'] as $service): ?>
                <div class="flex flex-col bg-white rounded-xl border border-slate-200 hover:border-slate-300 transition-colors overflow-hidden">
                    
                    <!-- Card Top Header -->
                    <div class="p-6 border-b border-slate-100 bg-white">
                        <div class="flex items-center justify-between gap-2 mb-3">
                            <span class="text-xs font-bold px-2 py-0.5 rounded bg-blue-50 text-blue-700 border border-blue-200">
                                <?= e($service['tag']) ?>
                            </span>
                            <span class="text-[11px] font-bold px-2 py-0.5 rounded bg-red-50 text-red-700 border border-red-100">
                                <?= e($service['badge']) ?>
                            </span>
                        </div>
                        
                        <h3 class="text-lg font-bold text-slate-900">
                            <?= e($service['title']) ?>
                        </h3>

                        <!-- Price start indicator -->
                        <div class="mt-3 pt-3 border-t border-slate-100 flex items-baseline justify-between">
                            <span class="text-xs text-slate-500 font-medium">Estimasi Biaya Jasa</span>
                            <div class="text-right">
                                <span class="text-xs font-medium text-slate-500">Mulai </span>
                                <span class="text-xl font-extrabold text-blue-700"><?= e($service['price_start']) ?></span>
                            </div>
                        </div>
                    </div>

                    <!-- Card Body -->
                    <div class="p-6 flex-1 flex flex-col justify-between space-y-6">
                        <div class="space-y-4">
                            <p class="text-slate-600 text-sm leading-relaxed">
                                <?= e($service['description']) ?>
                            </p>

                            <!-- Check item list -->
                            <div class="space-y-2 pt-1">
                                <p class="text-xs font-bold uppercase tracking-wider text-slate-400">Rincian Pengerjaan:</p>
                                <ul class="space-y-2">
                                    <?php foreach ($service['items'] as $item): ?>
                                        <li class="flex items-start gap-2.5 text-xs text-slate-700">
                                            <i data-lucide="check" class="w-4 h-4 text-emerald-600 flex-shrink-0 mt-0.5"></i>
                                            <span><?= e($item) ?></span>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        </div>

                        <!-- Card Standardized Secondary CTA -->
                        <div class="pt-2 border-t border-slate-100">
                            <a href="#lokasi" class="btn-secondary w-full">
                                <i data-lucide="map-pin" class="w-4 h-4 text-slate-500"></i>
                                <span>Bawa Motor ke Bengkel</span>
                            </a>
                        </div>
                    </div>

                </div>
            <?php endforeach; ?>
        </div>

        <!-- Footnote note on pricing -->
        <div class="mt-10 p-4 rounded-xl bg-white border border-slate-200 text-slate-600 text-xs text-center max-w-2xl mx-auto flex items-center justify-center gap-2">
            <i data-lucide="info" class="w-4 h-4 text-blue-600 flex-shrink-0"></i>
            <span><strong>Catatan:</strong> Tarif di atas adalah biaya jasa pengerjaan. Jika diperlukan penggantian oli atau sparepart, mekanik akan selalu mengonfirmasikan pilihan dan harga kepada Anda terlebih dahulu.</span>
        </div>

    </div>
</section>
