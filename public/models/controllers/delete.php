<?php
    require_once '../../models/database.php';
    require_once '../../models/event.php';
    require_once '../../models/user.php';

    if (!isset($_GET['type']) || !isset($_GET['id'])) {
        header('Location: ../../templates/admin.php');
        exit;
    }
    $type = $_GET['type'];
    $id = (int) $_GET['id'];
    $database = new Database();
    $pdo = $database->connect();
    $event = new Event($pdo);
    $user = new User($pdo);
    if ($type === 'event')
        $event->delete($id);
    elseif ($type === 'user') {
        $user->delete($id);
    }
    header('Location: ../../templates/admin.php');
    exit;