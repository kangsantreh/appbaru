<?php require_once '../controllers/get-record.php'; ?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Update Catatan</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
    <h1>Update Catatan</h1>
    <form method="post" action="../controllers/update-record.php">
        <input type="hidden" name="id" value="<?= htmlspecialchars($id) ?>">
        <label for="name">Nama:</label>
        <input type="text" id="name" name="name" value="<?= htmlspecialchars($row['name']) ?>" required>
        <label for="details">Detail:</label>
        <textarea id="details" name="details" required><?= htmlspecialchars($row['details']) ?></textarea>
        <button type="submit">Update</button>
    </form>
    <a href="index.php">Kembali ke Panel Admin</a>
</body>
</html>