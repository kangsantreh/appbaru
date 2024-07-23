<?php
require_once '../../connection.php';

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);

    $stmt = $connection->prepare("DELETE FROM records WHERE id = ?");
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        header("Location: ../views/index.php");
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}
?>