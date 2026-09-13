<section id="keunggulan" class="py-20 bg-white relative">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Section Title -->
        <div class="text-center max-w-3xl mx-auto space-y-4 mb-16">
            <div class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-brand-50 text-brand-700 text-xs font-bold uppercase tracking-wider">
                <i data-lucide="check-shield" class="w-3.5 h-3.5"></i>
                <span>Komitmen Kualitas</span>
            </div>
            <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 tracking-tight">
                Kenapa Ribuan Pengendara Mempercayakan Motornya pada Kami?
            </h2>
            <p class="text-base sm:text-lg text-slate-600 font-normal leading-relaxed">
                Kami menggabungkan keahlian teknisi berpengalaman, pengerjaan terbuka di depan mata, dan komitmen kejujuran dalam setiap servis.
            </p>
        </div>

        <!-- 6 Features Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <?php foreach ($config['features'] as $index => $feature): ?>
                <div class="group relative p-8 rounded-2xl bg-slate-50 hover:bg-white border border-slate-200/80 hover:border-brand-200 shadow-soft hover:shadow-card transition-all duration-300 transform hover:-translate-y-1">
                    
                    <!-- Icon Box -->
                    <div class="w-14 h-14 rounded-2xl bg-white group-hover:bg-brand-600 border border-slate-200/90 group-hover:border-brand-600 text-brand-600 group-hover:text-white flex items-center justify-center shadow-xs transition-colors duration-300 mb-6">
                        <i data-lucide="<?= e($feature['icon']) ?>" class="w-7 h-7"></i>
                    </div>

                    <!-- Content -->
                    <h3 class="text-xl font-bold text-slate-900 mb-2.5 group-hover:text-brand-700 transition-colors">
                        <?= e($feature['title']) ?>
                    </h3>
                    
                    <p class="text-slate-600 text-sm leading-relaxed">
                        <?= e($feature['description']) ?>
                    </p>

                    <!-- Decorative bottom accent line on hover -->
                    <div class="absolute bottom-0 left-8 right-8 h-1 bg-gradient-to-r from-brand-600 to-racing-red rounded-t opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                </div>
            <?php endforeach; ?>
        </div>

        <!-- Extra Trust Banner Under Features -->
        <div class="mt-16 p-6 sm:p-8 rounded-2xl bg-gradient-to-r from-slate-900 via-brand-950 to-slate-900 text-white shadow-xl flex flex-col lg:flex-row items-center justify-between gap-6">
            <div class="space-y-1 text-center lg:text-left">
                <h4 class="text-lg sm:text-xl font-bold flex items-center justify-center lg:justify-start gap-2">
                    <i data-lucide="shield-alert" class="w-5 h-5 text-racing-yellow"></i>
                    <span>Motor Ada Kendala Mendadak Hari Ini?</span>
                </h4>
                <p class="text-slate-300 text-sm">
                    Jangan tunda sampai mogok di jalan. Bawa langsung ke bengkel kami untuk inspeksi 12 titik gratis!
                </p>
            </div>
            <div class="flex-shrink-0">
                <a href="#lokasi" class="inline-flex items-center gap-2 px-6 py-3 rounded-xl bg-racing-red hover:bg-racing-redDark text-white font-bold text-sm shadow-md transition-all">
                    <i data-lucide="map-pin" class="w-4 h-4"></i>
                    <span>Cek Rute Bengkel Terdekat</span>
                </a>
            </div>
        </div>

    </div>
</section>
