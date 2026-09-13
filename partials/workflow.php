<section id="alur-servis" class="py-16 bg-white relative">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Section Header -->
        <div class="text-center max-w-3xl mx-auto space-y-3 mb-14">
            <div class="inline-flex items-center gap-1.5 px-3 py-1 rounded-md bg-emerald-50 text-emerald-800 text-xs font-bold uppercase tracking-wider">
                <i data-lucide="shield-check" class="w-3.5 h-3.5 text-emerald-600"></i>
                <span>Transparansi 100%</span>
            </div>
            <h2 class="text-2xl sm:text-3xl font-extrabold text-slate-900 tracking-tight">
                Alur 4 Langkah Servis Tanpa Was-Was
            </h2>
            <p class="text-base text-slate-600 font-normal leading-relaxed">
                Kami menjamin tidak ada biaya tersembunyi atau penggantian suku cadang tanpa persetujuan Anda terlebih dahulu.
            </p>
        </div>

        <!-- 4 Steps Workflow Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 relative">
            
            <?php foreach ($config['workflow'] as $index => $step): ?>
                <div class="flex flex-col p-6 rounded-xl bg-white border border-slate-200 hover:border-slate-300 transition-colors">
                    
                    <!-- Step Badge & Icon -->
                    <div class="flex items-center justify-between mb-5">
                        <span class="w-9 h-9 rounded-lg bg-blue-700 text-white font-bold text-sm flex items-center justify-center">
                            <?= e($step['step']) ?>
                        </span>
                        <div class="w-9 h-9 rounded-lg bg-slate-50 border border-slate-200 text-slate-600 flex items-center justify-center">
                            <i data-lucide="<?= e($step['icon']) ?>" class="w-4 h-4"></i>
                        </div>
                    </div>

                    <!-- Step Title -->
                    <h3 class="text-base font-bold text-slate-900 mb-2">
                        <?= e($step['title']) ?>
                    </h3>

                    <!-- Step Description -->
                    <p class="text-slate-600 text-xs sm:text-sm leading-relaxed flex-1">
                        <?= e($step['description']) ?>
                    </p>

                    <!-- Small bottom indicator -->
                    <div class="mt-4 pt-3 border-t border-slate-100 flex items-center gap-1.5 text-xs font-medium text-slate-500">
                        <span>Langkah <?= $index + 1 ?> dari 4</span>
                        <i data-lucide="chevron-right" class="w-3 h-3 text-slate-400"></i>
                    </div>

                </div>
            <?php endforeach; ?>

        </div>

        <!-- Clean Guarantee Callout (Replaces harsh black box) -->
        <div class="mt-10 max-w-3xl mx-auto p-5 rounded-xl bg-emerald-50/80 border border-emerald-200 text-slate-800">
            <div class="flex flex-col sm:flex-row items-center justify-center gap-3.5 text-center sm:text-left">
                <div class="w-10 h-10 rounded-lg bg-emerald-100 text-emerald-800 flex items-center justify-center flex-shrink-0">
                    <i data-lucide="badge-check" class="w-5 h-5"></i>
                </div>
                <div>
                    <h4 class="font-bold text-sm sm:text-base text-slate-900">Garansi Servis Pengerjaan Otomatis</h4>
                    <p class="text-xs sm:text-sm text-slate-600 mt-0.5">Jika motor Anda masih terasa kurang nyaman setelah servis, silakan bawa kembali ke bengkel dalam masa garansi tanpa tambahan biaya jasa.</p>
                </div>
            </div>
        </div>

    </div>
</section>
