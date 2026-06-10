<?php
require_once 'database.php';
if (!isset($_GET['type']) || !isset($_GET['id'])) {
    header('Location: ../templates/admin.php');
    exit;
}
$type = $_GET['type'];
$id = (int) $_GET['id'];
$database = new Database();
$pdo = $database->connect();
if ($type === 'event') {
    $stmt = $pdo->prepare("DELETE FROM events WHERE id = ?");
    $stmt->execute([$id]);
}
elseif ($type === 'user') {
    $stmt = $pdo->prepare("DELETE FROM users WHERE id = ?");
    $stmt->execute([$id]);
}

header('Location: ../templates/admin.php');
exit;