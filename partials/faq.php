<section id="faq" class="py-20 bg-white relative border-t border-slate-200/60">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Section Header -->
        <div class="text-center space-y-4 mb-14">
            <div class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-amber-50 text-amber-800 border border-amber-200 text-xs font-bold uppercase tracking-wider">
                <i data-lucide="help-circle" class="w-3.5 h-3.5 text-amber-600"></i>
                <span>Tanya Jawab Seputar Servis</span>
            </div>
            <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 tracking-tight">
                Pertanyaan yang Sering Diajukan
            </h2>
            <p class="text-base sm:text-lg text-slate-600 font-normal leading-relaxed">
                Informasi penting seputar kedatangan, sistem servis, garansi, dan suku cadang.
            </p>
        </div>

        <!-- FAQ Accordion List -->
        <div class="space-y-4" id="faq-accordion">
            <?php foreach ($config['faqs'] as $index => $faq): ?>
                <div class="faq-item border border-slate-200 rounded-2xl overflow-hidden transition-all duration-200 bg-white">
                    <button type="button" class="faq-toggle w-full flex items-center justify-between p-5 text-left font-bold text-slate-800 hover:text-brand-600 hover:bg-slate-50 transition-colors gap-4" aria-expanded="<?= $index === 0 ? 'true' : 'false' ?>">
                        <span class="text-base sm:text-lg flex items-center gap-3">
                            <span class="w-7 h-7 rounded-lg bg-brand-50 text-brand-700 text-xs font-extrabold flex items-center justify-center flex-shrink-0">
                                Q<?= $index + 1 ?>
                            </span>
                            <span><?= e($faq['question']) ?></span>
                        </span>
                        <i data-lucide="chevron-down" class="faq-icon w-5 h-5 text-slate-400 transform transition-transform duration-300 <?= $index === 0 ? 'rotate-180 text-brand-600' : '' ?>"></i>
                    </button>
                    <div class="faq-content px-5 pb-5 pt-1 text-slate-600 text-sm sm:text-base leading-relaxed border-t border-slate-100 bg-slate-50/50 <?= $index === 0 ? '' : 'hidden' ?>">
                        <?= e($faq['answer']) ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <!-- Bottom Assistance Box -->
        <div class="mt-12 p-6 rounded-2xl bg-slate-100 border border-slate-200 text-center space-y-2">
            <p class="font-bold text-slate-800 text-sm">Masih punya pertanyaan lain seputar kendala motor Anda?</p>
            <p class="text-xs text-slate-600">Hubungi kami langsung melalui telepon atau datang langsung ke bengkel untuk konsultasi gratis dengan kepala mekanik.</p>
            <div class="pt-2">
                <a href="tel:<?= e($config['app']['phone_raw']) ?>" class="inline-flex items-center gap-2 text-xs font-bold text-brand-700 hover:text-brand-900 bg-white px-4 py-2 rounded-xl shadow-xs border border-slate-200">
                    <i data-lucide="phone-call" class="w-3.5 h-3.5"></i>
                    <span>Telepon Bengkel: <?= e($config['app']['phone']) ?></span>
                </a>
            </div>
        </div>

    </div>
</section>
