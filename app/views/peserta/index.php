<div class="bg-gradient-to-r from-gray-900 to-gray-800 text-gray-300 min-h-screen">
    <div class="container mx-auto py-10">
        <h1 class="text-5xl font-extrabold mb-8 text-center text-[#4f45e4] drop-shadow-lg">Daftar Peserta Cosplay 🎉</h1>
        <div class="overflow-x-auto">
            <table class="w-full border-collapse bg-gray-700 rounded-lg shadow-lg">
                <thead>
                    <tr class="bg-[#4f45e4]">
                        <th class="border border-gray-600 px-6 py-4 text-left text-white font-semibold">Nama</th>
                        <th class="border border-gray-600 px-6 py-4 text-left text-white font-semibold">Karakter</th>
                        <th class="border border-gray-600 px-6 py-4 text-left text-white font-semibold">Anime/Game</th>
                        <th class="border border-gray-600 px-6 py-4 text-left text-white font-semibold">Kategori</th>
                        <th class="border border-gray-600 px-6 py-4 text-left text-white font-semibold">Deskripsi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($data['peserta'] as $peserta) : ?>
                        <tr class="hover:bg-gray-600 transition duration-300">
                            <td class="border border-gray-600 px-6 py-4 text-white"><?= htmlspecialchars($peserta['nama']) ?></td>
                            <td class="border border-gray-600 px-6 py-4 text-white"><?= htmlspecialchars($peserta['karakter']) ?></td>
                            <td class="border border-gray-600 px-6 py-4 text-white"><?= htmlspecialchars($peserta['anime']) ?></td>
                            <td class="border border-gray-600 px-6 py-4 text-white"><?= htmlspecialchars($peserta['kategori']) ?></td>
                            <td class="border border-gray-600 px-6 py-4 text-white"><?= htmlspecialchars($peserta['deskripsi']) ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>