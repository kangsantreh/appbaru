<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Catatan</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
    <h1>Tambah Catatan</h1>
    <form method="post" action="../controllers/add-record.php">
        <label for="name">Nama:</label>
        <input type="text" id="name" name="name" required>
        <label for="details">Detail:</label>
        <textarea id="details" name="details" required></textarea>
        <button type="submit">Tambah</button>
    </form>
    <a href="index.php">Kembali ke Panel Admin</a>
</body>
</html>