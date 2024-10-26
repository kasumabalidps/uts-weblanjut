<div class="bg-gray-900 text-gray-300 min-h-screen">
    <div class="container mx-auto py-8 ">
        <h1 class="text-4xl font-bold mb-8 text-center text-[#4f45e4]">Daftar Peserta Cosplay 😂</h1>
        <div class="overflow-x-auto">
            <table class="w-full border-collapse bg-gray-800 rounded-lg shadow-lg">
                <thead>
                    <tr class="bg-[#4f45e4]">
                        <th class="border border-gray-700 px-4 py-3 text-left text-white">Nama</th>
                        <th class="border border-gray-700 px-4 py-3 text-left text-white">Karakter</th>
                        <th class="border border-gray-700 px-4 py-3 text-left text-white">Anime/Game</th>
                        <th class="border border-gray-700 px-4 py-3 text-left text-white">Kategori</th>
                        <th class="border border-gray-700 px-4 py-3 text-left text-white">Deskripsi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($data['peserta'] as $peserta) : ?>
                        <tr class="hover:bg-gray-700 transition duration-300">
                            <td class="border border-gray-700 px-4 py-3 text-white"><?= $peserta['nama'] ?></td>
                            <td class="border border-gray-700 px-4 py-3 text-white"><?= $peserta['karakter'] ?></td>
                            <td class="border border-gray-700 px-4 py-3 text-white"><?= $peserta['anime'] ?></td>
                            <td class="border border-gray-700 px-4 py-3 text-white"><?= $peserta['kategori'] ?></td>
                            <td class="border border-gray-700 px-4 py-3 text-white"><?= $peserta['deskripsi'] ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>