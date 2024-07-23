<?php
require_once '../../connection.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = intval($_POST['id']);
    $name = trim($_POST['name']);
    $details = trim($_POST['details']);

    $stmt = $connection->prepare("UPDATE records SET name = ?, details = ? WHERE id = ?");
    $stmt->bind_param("ssi", $name, $details, $id);

    if ($stmt->execute()) {
        header("Location: ../views/index.php");
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}
?>