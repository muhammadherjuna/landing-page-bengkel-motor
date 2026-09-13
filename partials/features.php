<section id="keunggulan" class="py-16 bg-white relative">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Section Title -->
        <div class="text-center max-w-3xl mx-auto space-y-3 mb-14">
            <div class="inline-flex items-center gap-1.5 px-3 py-1 rounded-md bg-blue-50 text-blue-800 text-xs font-bold uppercase tracking-wider">
                <i data-lucide="shield-check" class="w-3.5 h-3.5 text-blue-700"></i>
                <span>Komitmen Kualitas</span>
            </div>
            <h2 class="text-2xl sm:text-3xl font-extrabold text-slate-900 tracking-tight">
                Kenapa Memilih Garasi Prima Motor?
            </h2>
            <p class="text-base text-slate-600 font-normal leading-relaxed">
                Kami mengutamakan kejujuran pengerjaan, peralatan lengkap, dan estimasi biaya transparan sebelum tindakan servis dimulai.
            </p>
        </div>

        <!-- 6 Features Grid (Clean, Solid Borders, No AI Glow) -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <?php foreach ($config['features'] as $index => $feature): ?>
                <div class="p-6 rounded-xl bg-white border border-slate-200 hover:border-blue-300 transition-colors duration-150">
                    
                    <!-- Icon Box -->
                    <div class="w-12 h-12 rounded-lg bg-blue-50 border border-blue-100 text-blue-700 flex items-center justify-center mb-5">
                        <i data-lucide="<?= e($feature['icon']) ?>" class="w-6 h-6"></i>
                    </div>

                    <!-- Content -->
                    <h3 class="text-lg font-bold text-slate-900 mb-2">
                        <?= e($feature['title']) ?>
                    </h3>
                    
                    <p class="text-slate-600 text-sm leading-relaxed">
                        <?= e($feature['description']) ?>
                    </p>
                </div>
            <?php endforeach; ?>
        </div>

        <!-- Clean Light Callout Banner (Replaces harsh black box) -->
        <div class="mt-12 p-6 rounded-xl bg-slate-50 border border-slate-200 flex flex-col sm:flex-row items-center justify-between gap-5 text-center sm:text-left">
            <div class="space-y-1">
                <h4 class="text-base sm:text-lg font-bold text-slate-900 flex items-center justify-center sm:justify-start gap-2">
                    <i data-lucide="info" class="w-5 h-5 text-blue-700 flex-shrink-0"></i>
                    <span>Motor Ada Kendala Mendadak Hari Ini?</span>
                </h4>
                <p class="text-slate-600 text-sm">
                    Langsung bawa motor Anda ke bengkel kami untuk pengecekan dan konsultasi 100% gratis tanpa paksaan servis.
                </p>
            </div>
            <div class="flex-shrink-0">
                <a href="#lokasi" class="btn-primary">
                    <i data-lucide="map-pin" class="w-4 h-4"></i>
                    <span>Cek Rute Bengkel</span>
                </a>
            </div>
        </div>

    </div>
</section>
