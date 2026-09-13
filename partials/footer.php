<!-- Clean Light Footer (Unified Theme, No Dark Block Jumps) -->
<footer class="bg-slate-100 border-t border-slate-200 text-slate-600 text-sm py-14">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-12 gap-8 lg:gap-8 pb-10 border-b border-slate-200">
            
            <!-- Col 1: Brand Info -->
            <div class="lg:col-span-4 space-y-3">
                <div class="flex items-center gap-2.5">
                    <div class="w-9 h-9 rounded-lg bg-blue-700 text-white flex items-center justify-center">
                        <i data-lucide="wrench" class="w-4 h-4 text-white"></i>
                    </div>
                    <div>
                        <span class="font-extrabold text-lg tracking-tight text-slate-900">
                            GARASI<span class="text-blue-700">PRIMA</span> MOTOR
                        </span>
                        <p class="text-[11px] text-slate-500 font-medium">Servis & Perawatan Motor Berkala</p>
                    </div>
                </div>
                <p class="text-slate-600 text-xs sm:text-sm leading-relaxed">
                    <?= e($config['app']['subtagline']) ?>
                </p>
                <div class="pt-1 flex items-center gap-2 text-xs text-slate-700">
                    <div class="flex text-amber-500">
                        <i data-lucide="star" class="w-3.5 h-3.5 fill-amber-400"></i>
                        <i data-lucide="star" class="w-3.5 h-3.5 fill-amber-400"></i>
                        <i data-lucide="star" class="w-3.5 h-3.5 fill-amber-400"></i>
                        <i data-lucide="star" class="w-3.5 h-3.5 fill-amber-400"></i>
                        <i data-lucide="star" class="w-3.5 h-3.5 fill-amber-400"></i>
                    </div>
                    <span><strong><?= e($config['app']['rating']) ?>/5.0</strong> (<?= e($config['app']['review_count']) ?> ulasan pelanggan)</span>
                </div>
            </div>

            <!-- Col 2: Navigation Links -->
            <div class="lg:col-span-2 space-y-3">
                <h4 class="font-bold text-slate-900 text-xs uppercase tracking-wider">Navigasi</h4>
                <ul class="space-y-2 text-xs sm:text-sm">
                    <li><a href="#beranda" class="hover:text-blue-700 transition-colors">Beranda</a></li>
                    <li><a href="#keunggulan" class="hover:text-blue-700 transition-colors">Keunggulan</a></li>
                    <li><a href="#layanan" class="hover:text-blue-700 transition-colors">Layanan & Biaya</a></li>
                    <li><a href="#alur-servis" class="hover:text-blue-700 transition-colors">Alur Servis</a></li>
                    <li><a href="#komitmen-jujur" class="hover:text-blue-700 transition-colors">Kejujuran Servis</a></li>
                    <li><a href="#testimoni" class="hover:text-blue-700 transition-colors">Ulasan Pelanggan</a></li>
                    <li><a href="#faq" class="hover:text-blue-700 transition-colors">Tanya Jawab FAQ</a></li>
                    <li><a href="#lokasi" class="hover:text-blue-700 transition-colors">Lokasi & Peta</a></li>
                </ul>
            </div>

            <!-- Col 3: Operational Summary -->
            <div class="lg:col-span-3 space-y-3">
                <h4 class="font-bold text-slate-900 text-xs uppercase tracking-wider">Jam Buka Bengkel</h4>
                <div class="space-y-1.5 text-xs">
                    <div class="flex justify-between py-1 border-b border-slate-200">
                        <span class="text-slate-500">Senin - Kamis</span>
                        <span class="text-slate-800 font-semibold">08:00 - 17:30</span>
                    </div>
                    <div class="flex justify-between py-1 border-b border-slate-200">
                        <span class="text-slate-500">Jumat</span>
                        <span class="text-slate-800 font-semibold">08:00 - 17:30</span>
                    </div>
                    <div class="flex justify-between py-1 border-b border-slate-200">
                        <span class="text-slate-500">Sabtu</span>
                        <span class="text-slate-800 font-semibold">08:00 - 18:00</span>
                    </div>
                    <div class="flex justify-between py-1">
                        <span class="text-slate-500">Minggu</span>
                        <span class="text-slate-800 font-semibold">08:30 - 16:00</span>
                    </div>
                </div>
                <p class="text-[11px] text-slate-500 mt-2">*Buka setiap hari, langsung datang tanpa reservasi.</p>
            </div>

            <!-- Col 4: Contact & Methods -->
            <div class="lg:col-span-3 space-y-3">
                <h4 class="font-bold text-slate-900 text-xs uppercase tracking-wider">Kontak & Alamat</h4>
                <div class="space-y-2 text-xs">
                    <p class="flex items-start gap-2">
                        <i data-lucide="map-pin" class="w-4 h-4 text-red-600 flex-shrink-0 mt-0.5"></i>
                        <span><?= e($config['app']['address']) ?></span>
                    </p>
                    <p class="flex items-center gap-2">
                        <i data-lucide="phone" class="w-4 h-4 text-emerald-600 flex-shrink-0"></i>
                        <a href="<?= e($config['app']['whatsapp_url']) ?>" target="_blank" rel="noopener noreferrer" class="hover:text-blue-700 font-medium"><?= e($config['app']['phone']) ?> (WhatsApp)</a>
                    </p>
                    <p class="flex items-center gap-2">
                        <i data-lucide="mail" class="w-4 h-4 text-slate-500 flex-shrink-0"></i>
                        <span><?= e($config['app']['email']) ?></span>
                    </p>
                </div>

                <div class="pt-2">
                    <p class="text-[11px] text-slate-600 font-semibold mb-1.5">Metode Pembayaran:</p>
                    <div class="flex items-center gap-1.5 flex-wrap text-[10px] text-slate-700 font-semibold">
                        <span class="px-2 py-0.5 rounded bg-white border border-slate-200">QRIS</span>
                        <span class="px-2 py-0.5 rounded bg-white border border-slate-200">Tunai</span>
                        <span class="px-2 py-0.5 rounded bg-white border border-slate-200">BCA</span>
                        <span class="px-2 py-0.5 rounded bg-white border border-slate-200">Mandiri</span>
                        <span class="px-2 py-0.5 rounded bg-white border border-slate-200">BRI</span>
                    </div>
                </div>
            </div>

        </div>

        <!-- Copyright Line -->
        <div class="pt-6 flex flex-col sm:flex-row items-center justify-between gap-4 text-xs text-slate-500">
            <p>© <?= date('Y') ?> <?= e($config['app']['name']) ?>. Seluruh Hak Cipta Dilindungi.</p>
            <p>Bengkel Servis Motor Profesional</p>
        </div>
    </div>
</footer>

<!-- Floating Back to Top Button -->
<button 
    id="back-to-top-btn" 
    type="button" 
    aria-label="Kembali ke atas halaman" 
    class="fixed bottom-6 right-6 z-40 w-11 h-11 rounded-lg bg-white border border-slate-300 text-slate-700 shadow-md hover:bg-slate-50 hover:text-slate-900 active:bg-slate-100 flex items-center justify-center transition-all duration-200 opacity-0 translate-y-3 pointer-events-none focus:outline-none focus:ring-2 focus:ring-red-600">
    <i data-lucide="arrow-up" class="w-5 h-5"></i>
</button>

<!-- Initialize Lucide Icons -->
<script>
    lucide.createIcons();
</script>

<!-- Main Interactive Script -->
<script src="assets/js/main.js"></script>

</body>
</html>
