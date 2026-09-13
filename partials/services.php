<section id="layanan" class="py-20 bg-slate-50 relative border-t border-slate-200/60">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Section Header -->
        <div class="text-center max-w-3xl mx-auto space-y-4 mb-16">
            <div class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-brand-100 text-brand-800 text-xs font-bold uppercase tracking-wider">
                <i data-lucide="wrench" class="w-3.5 h-3.5"></i>
                <span>Katalog Layanan Bengkel</span>
            </div>
            <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 tracking-tight">
                Solusi Lengkap Perawatan Motor Anda
            </h2>
            <p class="text-base sm:text-lg text-slate-600 font-normal leading-relaxed">
                Melayani motor matic, bebek, dan sport harian dari semua merek (Honda, Yamaha, Suzuki, Kawasaki). Pengerjaan presisi dengan estimasi harga transparan.
            </p>
        </div>

        <!-- Services Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <?php foreach ($config['services'] as $service): ?>
                <div class="flex flex-col bg-white rounded-2xl border border-slate-200/90 shadow-soft hover:shadow-card transition-all duration-300 overflow-hidden group">
                    
                    <!-- Card Top Header -->
                    <div class="p-6 border-b border-slate-100 bg-gradient-to-br from-white to-slate-50/50">
                        <div class="flex items-center justify-between gap-2 mb-3">
                            <span class="text-xs font-bold px-2.5 py-1 rounded-md bg-brand-50 text-brand-700 border border-brand-200/60">
                                <?= e($service['tag']) ?>
                            </span>
                            <span class="text-[11px] font-bold px-2 py-0.5 rounded bg-racing-red/10 text-racing-redDark">
                                <?= e($service['badge']) ?>
                            </span>
                        </div>
                        
                        <h3 class="text-xl font-bold text-slate-900 group-hover:text-brand-600 transition-colors">
                            <?= e($service['title']) ?>
                        </h3>

                        <!-- Price start indicator -->
                        <div class="mt-4 pt-4 border-t border-slate-100 flex items-baseline justify-between">
                            <span class="text-xs text-slate-500 font-medium">Estimasi Biaya Jasa</span>
                            <div class="text-right">
                                <span class="text-xs font-semibold text-slate-500">Mulai </span>
                                <span class="text-xl font-extrabold text-brand-700"><?= e($service['price_start']) ?></span>
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
                            <div class="space-y-2 pt-2">
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

                        <!-- Card CTA -->
                        <div class="pt-4 border-t border-slate-100">
                            <a href="#lokasi" class="w-full flex items-center justify-center gap-2 py-2.5 px-4 rounded-xl bg-slate-100 hover:bg-brand-600 text-slate-700 hover:text-white font-semibold text-xs transition-colors duration-200">
                                <i data-lucide="map-pin" class="w-3.5 h-3.5"></i>
                                <span>Bawa Motor ke Bengkel</span>
                            </a>
                        </div>
                    </div>

                </div>
            <?php endforeach; ?>
        </div>

        <!-- Footnote note on pricing -->
        <div class="mt-12 p-4 rounded-xl bg-blue-50/80 border border-blue-100 text-slate-600 text-xs text-center max-w-2xl mx-auto flex items-center justify-center gap-2">
            <i data-lucide="info" class="w-4 h-4 text-brand-600 flex-shrink-0"></i>
            <span><strong>Catatan:</strong> Estimasi tarif di atas adalah biaya jasa pengerjaan. Jika diperlukan penggantian oli atau suku cadang, mekanik akan mengonfirmasikan pilihan dan harga kepada Anda terlebih dahulu.</span>
        </div>

    </div>
</section>
