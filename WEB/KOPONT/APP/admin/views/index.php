<?php
require_once '../../connection.php';

$query = "SELECT id, name, details FROM records";
$result = $connection->query($query);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
    <h1>Admin Panel</h1>
    <a href="add-record.php">Tambah Catatan Baru</a>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Detail</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = $result->fetch_assoc()): ?>
                <tr>
                    <td><?= htmlspecialchars($row['id']) ?></td>
                    <td><?= htmlspecialchars($row['name']) ?></td>
                    <td><?= htmlspecialchars($row['details']) ?></td>
                    <td>
                        <a href="update-record.php?id=<?= htmlspecialchars($row['id']) ?>">Update</a>
                        <a href="../controllers/delete-record.php?id=<?= htmlspecialchars($row['id']) ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus catatan ini?')">Hapus</a>
                    </td>
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</body>
</html>