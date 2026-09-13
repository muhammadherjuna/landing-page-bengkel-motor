<section id="testimoni" class="py-16 bg-white relative border-t border-slate-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Section Header -->
        <div class="text-center max-w-3xl mx-auto space-y-3 mb-14">
            <div class="inline-flex items-center gap-1.5 px-3 py-1 rounded-md bg-amber-50 text-amber-800 border border-amber-200 text-xs font-bold uppercase tracking-wider">
                <i data-lucide="star" class="w-3.5 h-3.5 fill-amber-400 text-amber-500"></i>
                <span>Ulasan Google Review (<?= e($config['app']['rating']) ?>/5.0)</span>
            </div>
            <h2 class="text-2xl sm:text-3xl font-extrabold text-slate-900 tracking-tight">
                Pengalaman Nyata Pelanggan Kami
            </h2>
            <p class="text-base text-slate-600 font-normal leading-relaxed">
                Ulasan jujur dari para pemilik motor harian yang telah merasakan servis transparan di bengkel kami.
            </p>
        </div>

        <!-- 3 Testimonials Grid -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <?php foreach ($config['testimonials'] as $item): ?>
                <div class="flex flex-col justify-between p-6 rounded-xl bg-slate-50 border border-slate-200 hover:border-slate-300 transition-colors">
                    
                    <div class="space-y-4">
                        <!-- Rating Stars & Google Tag -->
                        <div class="flex items-center justify-between">
                            <div class="flex text-amber-400 gap-0.5">
                                <?php for ($i = 0; $i < $item['rating']; $i++): ?>
                                    <i data-lucide="star" class="w-4 h-4 fill-amber-400"></i>
                                <?php endfor; ?>
                            </div>
                            <span class="text-[11px] font-semibold text-slate-500 bg-white px-2 py-0.5 rounded border border-slate-200 flex items-center gap-1">
                                <i data-lucide="check" class="w-3 h-3 text-emerald-600"></i>
                                <span>Google Review</span>
                            </span>
                        </div>

                        <!-- Review Text -->
                        <p class="text-slate-700 text-sm leading-relaxed italic">
                            “<?= e($item['review']) ?>”
                        </p>
                    </div>

                    <!-- Author Info -->
                    <div class="pt-5 mt-5 border-t border-slate-200 flex items-center justify-between">
                        <div>
                            <h4 class="font-bold text-sm text-slate-900"><?= e($item['name']) ?></h4>
                            <span class="inline-block text-[11px] font-medium text-blue-700 bg-blue-50 px-2 py-0.5 rounded mt-0.5 border border-blue-100">
                                <?= e($item['vehicle']) ?>
                            </span>
                        </div>
                        <span class="text-[11px] text-slate-400"><?= e($item['time_ago']) ?></span>
                    </div>

                </div>
            <?php endforeach; ?>
        </div>

        <!-- Google Rating Trust Banner -->
        <div class="mt-10 p-4 rounded-xl bg-white border border-slate-200 text-center max-w-xl mx-auto flex flex-col sm:flex-row items-center justify-center gap-3 text-xs text-slate-600">
            <div class="flex items-center gap-1 text-amber-500">
                <i data-lucide="star" class="w-4 h-4 fill-amber-400"></i>
                <span class="font-extrabold text-slate-800 text-sm"><?= e($config['app']['rating']) ?> / 5.0</span>
            </div>
            <span class="hidden sm:inline text-slate-300">•</span>
            <span>Berdasarkan <strong><?= e($config['app']['review_count']) ?>+ ulasan terverifikasi</strong> di Google Maps</span>
        </div>

    </div>
</section>
