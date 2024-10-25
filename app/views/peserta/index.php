<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Peserta</title>
</head>
<body>
    <h1>Hello Peserta</h1>
    <?php foreach ($data['peserta'] as $peserta) : ?>
        <p><?= $peserta['nama'] ?></p>
    <?php endforeach; ?>
</body>
</html>