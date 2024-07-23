<?php
require_once '../../connection.php';

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);

    $stmt = $connection->prepare("SELECT name, details FROM records WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
    } else {
        echo "Catatan tidak ditemukan";
        exit();
    }

    $stmt->close();
}
?>