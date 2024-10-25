<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body class="bg-gray-900 text-gray-300">
    <div class="container mx-auto py-8">
        <h1 class="text-4xl font-bold mb-8 text-center text-[#4f45e4]">Daftar Peserta Cosplay 😂</h1>
        <div class="overflow-x-auto">
            <table class="w-full border-collapse bg-gray-800 rounded-lg shadow-lg">
                <thead>
                    <tr class="bg-[#4f45e4]">
                        <th class="border border-gray-700 px-4 py-3 text-left">Nama</th>
                        <th class="border border-gray-700 px-4 py-3 text-left">Karakter</th>
                        <th class="border border-gray-700 px-4 py-3 text-left">Anime/Game</th>
                        <th class="border border-gray-700 px-4 py-3 text-left">Kategori</th>
                        <th class="border border-gray-700 px-4 py-3 text-left">Deskripsi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($data['peserta'] as $peserta) : ?>
                        <tr class="hover:bg-gray-700 transition duration-300">
                            <td class="border border-gray-700 px-4 py-3"><?= $peserta['nama'] ?></td>
                            <td class="border border-gray-700 px-4 py-3"><?= $peserta['karakter'] ?></td>
                            <td class="border border-gray-700 px-4 py-3"><?= $peserta['anime'] ?></td>
                            <td class="border border-gray-700 px-4 py-3"><?= $peserta['kategori'] ?></td>
                            <td class="border border-gray-700 px-4 py-3"><?= $peserta['deskripsi'] ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>