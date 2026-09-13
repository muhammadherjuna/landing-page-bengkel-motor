<section id="faq" class="py-16 bg-white relative border-t border-slate-200">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Section Header -->
        <div class="text-center space-y-3 mb-12">
            <div class="inline-flex items-center gap-1.5 px-3 py-1 rounded-md bg-amber-50 text-amber-800 border border-amber-200 text-xs font-bold uppercase tracking-wider">
                <i data-lucide="help-circle" class="w-3.5 h-3.5 text-amber-600"></i>
                <span>Tanya Jawab Seputar Servis</span>
            </div>
            <h2 class="text-2xl sm:text-3xl font-extrabold text-slate-900 tracking-tight">
                Pertanyaan yang Sering Diajukan
            </h2>
            <p class="text-base text-slate-600 font-normal leading-relaxed">
                Informasi penting seputar kedatangan, sistem servis, garansi, dan sparepart.
            </p>
        </div>

        <!-- FAQ Accordion List -->
        <div class="space-y-3" id="faq-accordion">
            <?php foreach ($config['faqs'] as $index => $faq): ?>
                <div class="faq-item border border-slate-200 rounded-xl overflow-hidden bg-white">
                    <button type="button" class="faq-toggle w-full flex items-center justify-between p-4 sm:p-5 text-left font-bold text-slate-800 hover:text-blue-700 hover:bg-slate-50 transition-colors gap-3" aria-expanded="<?= $index === 0 ? 'true' : 'false' ?>">
                        <span class="text-sm sm:text-base flex items-center gap-3">
                            <span class="w-6 h-6 rounded bg-slate-100 text-slate-700 text-xs font-bold flex items-center justify-center flex-shrink-0">
                                <?= $index + 1 ?>
                            </span>
                            <span><?= e($faq['question']) ?></span>
                        </span>
                        <i data-lucide="chevron-down" class="faq-icon w-4 h-4 text-slate-400 transform transition-transform duration-200 flex-shrink-0 <?= $index === 0 ? 'rotate-180 text-blue-700' : '' ?>"></i>
                    </button>
                    <div class="faq-content px-4 sm:px-5 pb-5 pt-1 text-slate-600 text-sm leading-relaxed border-t border-slate-100 bg-slate-50/50 <?= $index === 0 ? '' : 'hidden' ?>">
                        <?= e($faq['answer']) ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <!-- Bottom Assistance Box -->
        <div class="mt-10 p-5 rounded-xl bg-slate-50 border border-slate-200 text-center space-y-2">
            <p class="font-bold text-slate-800 text-sm">Punya pertanyaan lain mengenai motor Anda?</p>
            <p class="text-xs text-slate-600">Hubungi kami langsung via WhatsApp atau datang langsung ke bengkel untuk konsultasi gratis.</p>
            <div class="pt-2 flex justify-center">
                <a href="<?= e($config['app']['whatsapp_url']) ?>" target="_blank" rel="noopener noreferrer" class="btn-secondary">
                    <i data-lucide="phone" class="w-4 h-4 text-emerald-600"></i>
                    <span>Chat WhatsApp: <?= e($config['app']['phone']) ?></span>
                </a>
            </div>
        </div>

    </div>
</section>
