<div class="bg-gradient-to-br from-slate-900 to-gray-900 min-h-screen flex items-center justify-center p-4">
    <div class="bg-gray-800/30 backdrop-blur-xl p-8 lg:p-12 rounded-2xl shadow-2xl w-full max-w-2xl border border-white/10">
        <div class="mb-10 text-center">
            <h1 class="text-4xl font-bold text-white mb-3">Pemesanan Tiket</h1>
            <p class="text-gray-400">Isi form di bawah untuk memesan tiket konser</p>
        </div>

        <form action="<?=BASEURL; ?>/loket/pesanan" method="POST" class="space-y-8">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="relative">
                    <label for="nama" class="block text-sm font-medium text-gray-300 mb-2">Nama Lengkap</label>
                    <div class="relative">
                        <span class="absolute inset-y-0 left-0 pl-4 flex items-center text-gray-400">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>
                        </span>
                        <input type="text" id="nama" name="nama" required 
                            class="pl-12 w-full rounded-xl bg-white/5 border-transparent text-white placeholder-gray-400 focus:border-teal-400 focus:ring-1 focus:ring-teal-400 text-base py-3 px-4 transition-all duration-200"
                            placeholder="John Doe">
                    </div>
                </div>

                <div class="relative">
                    <label for="nomer" class="block text-sm font-medium text-gray-300 mb-2">Nomor HP</label>
                    <div class="relative">
                        <span class="absolute inset-y-0 left-0 pl-4 flex items-center text-gray-400">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                            </svg>
                        </span>
                        <input type="tel" id="nomer" name="nomer" required 
                            class="pl-12 w-full rounded-xl bg-white/5 border-transparent text-white placeholder-gray-400 focus:border-teal-400 focus:ring-1 focus:ring-teal-400 text-base py-3 px-4 transition-all duration-200"
                            placeholder="08123456789">
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label for="kategori" class="block text-sm font-medium text-gray-300 mb-2">Kategori Tiket</label>
                    <div class="relative">
                        <select id="kategori" name="kategori" required 
                            class="w-full rounded-xl bg-white/5 border-transparent text-gray-300 focus:border-teal-400 focus:ring-1 focus:ring-teal-400 text-base py-3 px-4 transition-all duration-200 appearance-none">
                            <option value="" disabled selected class="text-gray-900">Pilih Kategori</option>
                            <option value="Regular" class="text-gray-900">Regular - Rp 500.000</option>
                            <option value="VIP" class="text-gray-900">VIP - Rp 1.000.000</option>
                            <option value="VVIP" class="text-gray-900">VVIP - Rp 2.000.000</option>
                        </select>
                        <span class="absolute right-4 top-1/2 -translate-y-1/2 text-gray-400">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </span>
                    </div>
                </div>

                <div>
                    <label for="jumlah" class="block text-sm font-medium text-gray-300 mb-2">Jumlah Tiket</label>
                    <div class="relative">
                        <span class="absolute inset-y-0 left-0 pl-4 flex items-center text-gray-400">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 20l4-16m2 16l4-16M6 9h14M4 15h14" />
                            </svg>
                        </span>
                        <input type="number" id="jumlah" name="jumlah" min="1" max="4" required 
                            class="pl-12 w-full rounded-xl bg-white/5 border-transparent text-white placeholder-gray-400 focus:border-teal-400 focus:ring-1 focus:ring-teal-400 text-base py-3 px-4 transition-all duration-200"
                            placeholder="Max. 4 tiket">
                    </div>
                </div>
            </div>

            <div>
                <label for="deskripsi" class="block text-sm font-medium text-gray-300 mb-2">Catatan Tambahan</label>
                <textarea id="deskripsi" name="deskripsi" rows="3" 
                    class="w-full rounded-xl bg-white/5 border-transparent text-white placeholder-gray-400 focus:border-teal-400 focus:ring-1 focus:ring-teal-400 text-base py-3 px-4 transition-all duration-200"
                    placeholder="Tambahkan catatan khusus jika diperlukan"></textarea>
            </div>

            <div class="pt-6">
                <button type="submit" 
                    class="group w-full flex items-center justify-center py-4 px-6 rounded-xl text-lg font-semibold text-white bg-gradient-to-r from-teal-500 to-emerald-500 hover:from-teal-600 hover:to-emerald-600 transition-all duration-200 ease-in-out transform hover:-translate-y-0.5 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-teal-500">
                    Pesan Sekarang
                    <svg class="w-5 h-5 ml-2 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                    </svg>
                </button>
            </div>

            <div class="flex items-center justify-center space-x-2 text-sm text-gray-400 mt-6">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                <p>Dengan memesan tiket, Anda menyetujui syarat dan ketentuan yang berlaku</p>
            </div>
        </form>
    </div>
</div>

<script>
    // Form validation
    const form = document.querySelector('form');
    const jumlahInput = document.getElementById('jumlah');
    
    form.addEventListener('submit', (e) => {
        const jumlah = jumlahInput.value;
        if (jumlah > 4) {
            e.preventDefault();
            alert('Maksimal pemesanan adalah 4 tiket');
        }
    });

    // Real-time validation
    jumlahInput.addEventListener('input', (e) => {
        if (e.target.value > 4) {
            e.target.classList.add('border-red-500', 'focus:border-red-500', 'focus:ring-red-500');
        } else {
            e.target.classList.remove('border-red-500', 'focus:border-red-500', 'focus:ring-red-500');
        }
    });
</script>
