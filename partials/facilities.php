<section id="komitmen-jujur" class="py-20 bg-slate-50 relative border-t border-slate-200/60">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Section Header -->
        <div class="text-center max-w-3xl mx-auto space-y-4 mb-16">
            <div class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-emerald-100 text-emerald-800 text-xs font-bold uppercase tracking-wider">
                <i data-lucide="shield-check" class="w-3.5 h-3.5 text-emerald-600"></i>
                <span>Komitmen Kejujuran Bengkel</span>
            </div>
            <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 tracking-tight">
                Servis Tenang & Transparan, Tanpa Rasa Was-Was
            </h2>
            <p class="text-base sm:text-lg text-slate-600 font-normal leading-relaxed">
                Kami memahami kekhawatiran Anda saat ke bengkel motor. Di sini, kejujuran dan keterbukaan pengerjaan adalah prioritas utama kami.
            </p>
        </div>

        <!-- Trust & Flexibility 6 items grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            <?php foreach ($config['trust_commitments'] as $item): ?>
                <div class="p-6 rounded-2xl bg-white border border-slate-200/80 shadow-soft hover:border-brand-300 hover:shadow-card transition-all duration-200 flex items-start gap-4">
                    <div class="w-12 h-12 rounded-xl bg-brand-50 text-brand-600 flex items-center justify-center flex-shrink-0">
                        <i data-lucide="<?= e($item['icon']) ?>" class="w-6 h-6"></i>
                    </div>
                    <div class="space-y-1.5">
                        <h3 class="font-bold text-base text-slate-900 leading-snug"><?= e($item['title']) ?></h3>
                        <p class="text-slate-600 text-xs sm:text-sm leading-relaxed"><?= e($item['desc']) ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

    </div>
</section>
