<?php
    require_once 'database.php';
    $database = new Database();
    $pdo = $database->connect();
    $stmt = $pdo->prepare("UPDATE events SET title = ?, description = ?, date = ?, location = ?, category = ? WHERE id = ?");
    $stmt->execute([$_POST['title'], $_POST['description'], $_POST['date'], $_POST['location'], $_POST['category'], $_POST['id']]);
    header('Location: ../templates/admin.php');
    exit;
