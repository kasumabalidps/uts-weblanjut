<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Peserta</title>
</head>
<body class="bg-gray-300">
    <h1 class="text-3xl font-bold mb-6 mt-6 text-center text-black">Daftar Peserta Cosplay</h1>
    <div class="px-12">
        <table class="w-full border-collapse bg-white rounded-bl-lg rounded-br-lg border border-gray-200">
            <thead>
                <tr class="bg-gray-50">
                    <th class="border border-gray-200 px-4 py-2">Nama</th>
                    <th class="border border-gray-200 px-4 py-2">Karakter</th>
                    <th class="border border-gray-200 px-4 py-2">Anime/Game</th>
                    <th class="border border-gray-200 px-4 py-2">Kategori</th>
                    <th class="border border-gray-200 px-4 py-2">Deskripsi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data['peserta'] as $peserta) : ?>
                    <tr class="hover:bg-gray-50">
                        <td class="border border-gray-200 px-4 py-2"><?= $peserta['nama'] ?></td>
                        <td class="border border-gray-200 px-4 py-2"><?= $peserta['karakter'] ?></td>
                        <td class="border border-gray-200 px-4 py-2"><?= $peserta['anime'] ?></td>
                        <td class="border border-gray-200 px-4 py-2"><?= $peserta['kategori'] ?></td>
                        <td class="border border-gray-200 px-4 py-2"><?= $peserta['deskripsi'] ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>