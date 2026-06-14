<?php
    require_once '../../models/database.php';
    require_once '../../models/event.php';

    $database = new Database();
    $pdo = $database->connect();
    $event = new Event($pdo);
    $event->update($_POST['id'], $_POST['title'], $_POST['description'], $_POST['date'], $_POST['location'], $_POST['category']);
    header('Location: ../../templates/admin.php');
    exit;
