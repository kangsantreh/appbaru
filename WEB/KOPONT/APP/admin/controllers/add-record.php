<?php
require_once '../../connection.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = trim($_POST['name']);
    $details = trim($_POST['details']);

    $stmt = $connection->prepare("INSERT INTO records (name, details) VALUES (?, ?)");
    $stmt->bind_param("ss", $name, $details);

    if ($stmt->execute()) {
        header("Location: ../views/index.php");
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}
?>