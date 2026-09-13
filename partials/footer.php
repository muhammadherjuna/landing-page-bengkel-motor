<!-- Pre-Footer Action Banner -->
<section class="bg-gradient-to-r from-slate-900 via-brand-950 to-slate-900 text-white py-14 border-b border-slate-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col lg:flex-row items-center justify-between gap-8 text-center lg:text-left">
            <div class="space-y-2 max-w-2xl">
                <span class="inline-block px-3 py-1 rounded-full bg-racing-red/20 text-racing-red text-xs font-extrabold uppercase tracking-wider">
                    Siap Melayani Motor Anda Hari Ini
                </span>
                <h3 class="text-2xl sm:text-3xl font-extrabold tracking-tight">
                    Motor Terasa Berat, Bergetar, atau Waktunya Ganti Oli?
                </h3>
                <p class="text-slate-300 text-sm sm:text-base">
                    Datang langsung ke bengkel kami tanpa perlu ribet booking antrean online. Pengecekan awal selalu gratis!
                </p>
            </div>
            <div class="flex flex-col sm:flex-row items-center gap-4 flex-shrink-0">
                <a href="<?= e($config['app']['google_maps_directions']) ?>" target="_blank" rel="noopener noreferrer" class="w-full sm:w-auto inline-flex items-center justify-center gap-2 px-8 py-4 rounded-xl bg-racing-red hover:bg-racing-redDark text-white font-bold text-base shadow-lg shadow-red-600/30 transition-all transform hover:-translate-y-0.5">
                    <i data-lucide="navigation" class="w-5 h-5"></i>
                    <span>Petunjuk Arah Google Maps</span>
                </a>
                <a href="tel:<?= e($config['app']['phone_raw']) ?>" class="w-full sm:w-auto inline-flex items-center justify-center gap-2 px-6 py-4 rounded-xl bg-slate-800 hover:bg-slate-700 text-white font-semibold text-base border border-slate-700 transition-colors">
                    <i data-lucide="phone-call" class="w-5 h-5 text-brand-400"></i>
                    <span><?= e($config['app']['phone']) ?></span>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Main Footer -->
<footer class="bg-slate-950 text-slate-400 text-sm py-16 border-t border-slate-900">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-12 gap-10 lg:gap-8 pb-12 border-b border-slate-800/80">
            
            <!-- Col 1: Brand Info -->
            <div class="lg:col-span-4 space-y-4">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-xl bg-brand-600 text-white flex items-center justify-center shadow-md">
                        <i data-lucide="wrench" class="w-5 h-5 text-white"></i>
                    </div>
                    <div>
                        <span class="font-extrabold text-xl tracking-tight text-white">
                            GARASI<span class="text-brand-500">PRIMA</span> MOTOR
                        </span>
                        <p class="text-[11px] text-slate-400">Servis & Perawatan Berkala</p>
                    </div>
                </div>
                <p class="text-slate-400 text-xs sm:text-sm leading-relaxed">
                    <?= e($config['app']['subtagline']) ?>
                </p>
                <div class="pt-1 flex items-center gap-2 text-xs text-slate-300">
                    <div class="flex text-amber-400">
                        <i data-lucide="star" class="w-4 h-4 fill-amber-400"></i>
                        <i data-lucide="star" class="w-4 h-4 fill-amber-400"></i>
                        <i data-lucide="star" class="w-4 h-4 fill-amber-400"></i>
                        <i data-lucide="star" class="w-4 h-4 fill-amber-400"></i>
                        <i data-lucide="star" class="w-4 h-4 fill-amber-400"></i>
                    </div>
                    <span><strong><?= e($config['app']['rating']) ?>/5.0</strong> dari <?= e($config['app']['review_count']) ?> ulasan pelanggan</span>
                </div>
            </div>

            <!-- Col 2: Navigation Links -->
            <div class="lg:col-span-2 space-y-3">
                <h4 class="font-bold text-white text-sm uppercase tracking-wider">Navigasi</h4>
                <ul class="space-y-2 text-xs sm:text-sm">
                    <li><a href="#beranda" class="hover:text-white transition-colors">Beranda</a></li>
                    <li><a href="#keunggulan" class="hover:text-white transition-colors">Keunggulan</a></li>
                    <li><a href="#layanan" class="hover:text-white transition-colors">Layanan & Biaya</a></li>
                    <li><a href="#alur-servis" class="hover:text-white transition-colors">Alur Servis</a></li>
                    <li><a href="#komitmen-jujur" class="hover:text-white transition-colors">Kejujuran Servis</a></li>
                    <li><a href="#faq" class="hover:text-white transition-colors">Tanya Jawab FAQ</a></li>
                    <li><a href="#lokasi" class="hover:text-white transition-colors">Lokasi & Peta</a></li>
                </ul>
            </div>

            <!-- Col 3: Operational Summary -->
            <div class="lg:col-span-3 space-y-3">
                <h4 class="font-bold text-white text-sm uppercase tracking-wider">Jam Operasional</h4>
                <div class="space-y-2 text-xs">
                    <div class="flex justify-between py-1 border-b border-slate-900">
                        <span class="text-slate-400">Senin - Kamis</span>
                        <span class="text-white font-medium">08:00 - 17:30</span>
                    </div>
                    <div class="flex justify-between py-1 border-b border-slate-900">
                        <span class="text-slate-400">Jumat</span>
                        <span class="text-white font-medium">08:00 - 17:30</span>
                    </div>
                    <div class="flex justify-between py-1 border-b border-slate-900">
                        <span class="text-slate-400">Sabtu</span>
                        <span class="text-white font-medium">08:00 - 18:00</span>
                    </div>
                    <div class="flex justify-between py-1">
                        <span class="text-slate-400">Minggu</span>
                        <span class="text-white font-medium">08:30 - 16:00</span>
                    </div>
                </div>
                <p class="text-[11px] text-slate-500 mt-2">*Buka setiap hari, siap melayani tanpa janji temu.</p>
            </div>

            <!-- Col 4: Contact & Methods -->
            <div class="lg:col-span-3 space-y-3">
                <h4 class="font-bold text-white text-sm uppercase tracking-wider">Kontak & Alamat</h4>
                <div class="space-y-2.5 text-xs">
                    <p class="flex items-start gap-2">
                        <i data-lucide="map-pin" class="w-4 h-4 text-racing-red flex-shrink-0 mt-0.5"></i>
                        <span><?= e($config['app']['address']) ?></span>
                    </p>
                    <p class="flex items-center gap-2">
                        <i data-lucide="phone" class="w-4 h-4 text-brand-400 flex-shrink-0"></i>
                        <a href="tel:<?= e($config['app']['phone_raw']) ?>" class="hover:text-white font-medium"><?= e($config['app']['phone']) ?></a>
                    </p>
                    <p class="flex items-center gap-2">
                        <i data-lucide="mail" class="w-4 h-4 text-slate-400 flex-shrink-0"></i>
                        <span><?= e($config['app']['email']) ?></span>
                    </p>
                </div>

                <div class="pt-2">
                    <p class="text-[11px] text-slate-400 font-semibold mb-2">Metode Pembayaran:</p>
                    <div class="flex items-center gap-2 flex-wrap text-[10px] text-slate-300 font-bold">
                        <span class="px-2 py-1 rounded bg-slate-900 border border-slate-800">QRIS</span>
                        <span class="px-2 py-1 rounded bg-slate-900 border border-slate-800">Tunai</span>
                        <span class="px-2 py-1 rounded bg-slate-900 border border-slate-800">BCA</span>
                        <span class="px-2 py-1 rounded bg-slate-900 border border-slate-800">Mandiri</span>
                        <span class="px-2 py-1 rounded bg-slate-900 border border-slate-800">BRI</span>
                    </div>
                </div>
            </div>

        </div>

        <!-- Copyright & Back to Top -->
        <div class="pt-8 flex flex-col sm:flex-row items-center justify-between gap-4 text-xs text-slate-500">
            <p>© <?= date('Y') ?> <?= e($config['app']['name']) ?>. Seluruh Hak Cipta Dilindungi.</p>
            <div class="flex items-center gap-6">
                <span>Bengkel Servis Motor Profesional</span>
                <a href="#beranda" class="inline-flex items-center gap-1 text-slate-400 hover:text-white transition-colors">
                    <span>Kembali ke Atas</span>
                    <i data-lucide="arrow-up" class="w-3.5 h-3.5"></i>
                </a>
            </div>
        </div>
    </div>
</footer>

<!-- Initialize Lucide Icons -->
<script>
    lucide.createIcons();
</script>

<!-- Main Interactive Script -->
<script src="assets/js/main.js"></script>

</body>
</html>
