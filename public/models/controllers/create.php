<?php
    require_once '../../models/database.php';
    require_once '../../models/event.php';

    $redirect = $_POST['redirect'] ?? '../../templates/home.php';
    if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
        header("Location: $redirect");
        exit;
    }
    $database = new Database();
    $pdo = $database->connect();
    $event = new Event($pdo);
    $title = trim($_POST['title']);
    $description = trim($_POST['description']);
    $date = $_POST['date'];
    $location = trim($_POST['location']);
    $category = trim($_POST['category']);
    $createdById = 0;
    if ($_POST['source'] === 'submit_event') {
        $username = trim($_POST['username']);
        $email = trim($_POST['email']);
        $createdById = $event->getUserId($username, $email);
    }
    if ($event->alreadyExists($title, $description, $date, $location, $category, $createdById)) {
        echo "<script>
            alert('You have already created this event.'); 
            window.history.back(); 
        </script>";
        exit;
    }
    $event->create($title, $description, $date, $location, $category, $createdById);
    header("Location: $redirect");
    exit;