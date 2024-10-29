<div class="bg-gradient-to-b from-gray-900 to-gray-950 min-h-screen">
    <div class="max-w-6xl mx-auto px-4 py-12">
        
        <div class="mb-12">
            <div class="max-w-xl mx-auto">
                <div class="relative">
                    <input type="text"
                           placeholder="Masukkan nama untuk mencari tiket..." 
                           class="w-full bg-gray-800/50 border border-gray-700 text-gray-300 rounded-xl px-5 py-4 pl-12 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent"
                    >
                    <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                        <svg class="h-5 w-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                        </svg>
                    </div>
                </div>
            </div>
        </div>


        <div class="bg-gray-800/30 backdrop-blur-xl rounded-2xl border border-gray-700/50 shadow-xl">
            <div class="p-6">
                <h2 class="text-2xl font-bold bg-gradient-to-r from-indigo-400 to-purple-400 bg-clip-text text-transparent mb-6">
                    Daftar Pesanan Tiket
                </h2>
                
                <div class="overflow-x-auto">
                    <table class="w-full">
                        <thead>
                            <tr class="border-b border-gray-700">
                                <th class="px-6 py-4 text-left text-sm font-semibold text-gray-300">Nama</th>
                                <th class="px-6 py-4 text-left text-sm font-semibold text-gray-300">No. HP</th>
                                <th class="px-6 py-4 text-left text-sm font-semibold text-gray-300">Kategori Tiket</th>
                                <th class="px-6 py-4 text-left text-sm font-semibold text-gray-300">Jumlah</th>
                                <th class="px-6 py-4 text-left text-sm font-semibold text-gray-300">Status</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-700">
                            <?php foreach ($data['peserta'] as $peserta) : ?>
                            <tr class="hover:bg-gray-700/30 transition-colors duration-200">
                                <td class="px-6 py-4 text-sm text-gray-300"><?= $peserta['nama'] ?></td>
                                <td class="px-6 py-4 text-sm text-gray-300"><?= $peserta['nomer'] ?></td>
                                <td class="px-6 py-4">
                                    <span class="px-3 py-1 text-xs font-medium rounded-full bg-indigo-500/10 text-indigo-400 border border-indigo-500/20">
                                        <?= $peserta['kategori'] ?>
                                    </span>
                                </td>
                                <td class="px-6 py-4 text-sm text-gray-300"><?= $peserta['jumlah'] ?></td>
                                <td class="px-6 py-4">
                                    <span class="px-3 py-1 text-xs font-medium rounded-full bg-emerald-500/10 text-emerald-400 border border-emerald-500/20">
                                        Confirmed
                                    </span>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>