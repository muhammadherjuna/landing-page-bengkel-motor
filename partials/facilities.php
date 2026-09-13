<section id="komitmen-jujur" class="py-16 bg-slate-50 relative border-t border-slate-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Section Header -->
        <div class="text-center max-w-3xl mx-auto space-y-3 mb-14">
            <div class="inline-flex items-center gap-1.5 px-3 py-1 rounded-md bg-emerald-100 text-emerald-800 text-xs font-bold uppercase tracking-wider">
                <i data-lucide="shield-check" class="w-3.5 h-3.5 text-emerald-700"></i>
                <span>Komitmen Kejujuran Bengkel</span>
            </div>
            <h2 class="text-2xl sm:text-3xl font-extrabold text-slate-900 tracking-tight">
                Servis Tenang & Transparan di Bengkel Kami
            </h2>
            <p class="text-base text-slate-600 font-normal leading-relaxed">
                Kami memahami kekhawatiran Anda saat servis motor. Di sini, kejujuran pengerjaan dan keleluasaan pelanggan adalah prioritas utama.
            </p>
        </div>

        <!-- Trust & Flexibility 6 items grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            <?php foreach ($config['trust_commitments'] as $item): ?>
                <div class="p-6 rounded-xl bg-white border border-slate-200 hover:border-slate-300 transition-colors flex items-start gap-4">
                    <div class="w-11 h-11 rounded-lg bg-blue-50 text-blue-700 flex items-center justify-center flex-shrink-0">
                        <i data-lucide="<?= e($item['icon']) ?>" class="w-5 h-5"></i>
                    </div>
                    <div class="space-y-1">
                        <h3 class="font-bold text-base text-slate-900 leading-snug"><?= e($item['title']) ?></h3>
                        <p class="text-slate-600 text-xs sm:text-sm leading-relaxed"><?= e($item['desc']) ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

    </div>
</section>
