<?php
    require_once '../models/database.php';

    $redirect = $_POST['redirect'] ?? '../templates/home.php';
    if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
        header("Location: $redirect");
        exit;
    }
    $database = new Database();
    $pdo = $database->connect();
    $title = trim($_POST['title']);
    $description = trim($_POST['description']);
    $date = $_POST['date'];
    $location = trim($_POST['location']);
    $category = trim($_POST['category']);
    $createdById = 0;
    if ($_POST['source'] === 'submit_event') {
        $username = trim($_POST['username']);
        $email = trim($_POST['email']);
        $stmt = $pdo->prepare("SELECT id FROM users WHERE username = ? AND email = ?");
        $stmt->execute([$username, $email]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($user) {
            $createdById = $user['id'];
        }
    }
    $stmt = $pdo->prepare("SELECT COUNT(*) FROM events WHERE title = ? AND description = ? AND date = ? AND location = ? AND category = ? AND created_by_id <=> ?");
    $stmt->execute([$title, $description, $date, $location, $category, $createdById]);
    $exists = $stmt->fetchColumn();
    if ($exists > 0) {
        echo "<script>
            alert('You have already created this event.'); 
            window.history.back(); 
            </script>";
        exit;
    }
    $stmt = $pdo->prepare("INSERT INTO events(title, description, date, location, category, created_by_id) VALUES(?, ?, ?, ?, ?, ?)");
    $stmt->execute([$title, $description, $date, $location, $category, $createdById]);
    header("Location: $redirect");
    exit;