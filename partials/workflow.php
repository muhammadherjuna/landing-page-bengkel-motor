<section id="alur-servis" class="py-20 bg-white relative overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Section Header -->
        <div class="text-center max-w-3xl mx-auto space-y-4 mb-16">
            <div class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-emerald-50 text-emerald-700 text-xs font-bold uppercase tracking-wider">
                <i data-lucide="shield-check" class="w-3.5 h-3.5"></i>
                <span>Transparansi 100%</span>
            </div>
            <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 tracking-tight">
                Alur 4 Langkah Servis Nyaman & Bebas Was-Was
            </h2>
            <p class="text-base sm:text-lg text-slate-600 font-normal leading-relaxed">
                Kami menjamin tidak ada biaya tersembunyi atau penggantian suku cadang tanpa persetujuan Anda terlebih dahulu.
            </p>
        </div>

        <!-- 4 Steps Workflow Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 relative">
            
            <?php foreach ($config['workflow'] as $index => $step): ?>
                <div class="relative flex flex-col p-6 rounded-2xl bg-slate-50 border border-slate-200/80 hover:border-brand-300 shadow-soft transition-all duration-300 group">
                    
                    <!-- Step Badge & Icon -->
                    <div class="flex items-center justify-between mb-6">
                        <span class="w-10 h-10 rounded-xl bg-brand-600 text-white font-extrabold text-sm flex items-center justify-center shadow-md">
                            <?= e($step['step']) ?>
                        </span>
                        <div class="w-10 h-10 rounded-xl bg-white border border-slate-200 text-slate-700 group-hover:text-brand-600 group-hover:border-brand-300 flex items-center justify-center transition-colors">
                            <i data-lucide="<?= e($step['icon']) ?>" class="w-5 h-5"></i>
                        </div>
                    </div>

                    <!-- Step Title -->
                    <h3 class="text-lg font-bold text-slate-900 mb-2 group-hover:text-brand-700 transition-colors">
                        <?= e($step['title']) ?>
                    </h3>

                    <!-- Step Description -->
                    <p class="text-slate-600 text-xs sm:text-sm leading-relaxed flex-1">
                        <?= e($step['description']) ?>
                    </p>

                    <!-- Small bottom indicator -->
                    <div class="mt-4 pt-3 border-t border-slate-200/60 flex items-center gap-1.5 text-[11px] font-semibold text-brand-600">
                        <span>Langkah <?= $index + 1 ?> dari 4</span>
                        <i data-lucide="chevron-right" class="w-3 h-3"></i>
                    </div>

                </div>
            <?php endforeach; ?>

        </div>

        <!-- Guarantee Callout -->
        <div class="mt-14 max-w-3xl mx-auto text-center p-6 rounded-2xl bg-slate-900 text-white shadow-card">
            <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
                <div class="w-12 h-12 rounded-full bg-emerald-500/20 text-emerald-400 flex items-center justify-center flex-shrink-0">
                    <i data-lucide="badge-check" class="w-6 h-6"></i>
                </div>
                <div class="text-center sm:text-left">
                    <h4 class="font-bold text-base text-white">Garansi Servis Berlaku Otomatis</h4>
                    <p class="text-xs sm:text-sm text-slate-300 mt-0.5">Jika motor Anda masih terasa kurang nyaman setelah servis, bawa kembali ke bengkel dalam masa garansi tanpa tambahan biaya jasa!</p>
                </div>
            </div>
        </div>

    </div>
</section>
