<?php
    require_once '../models/database.php';
    require_once '../models/user.php';
    session_start();
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $database = new Database();
        $pdo = $database->connect();
        $user = new User($pdo);
        $username = trim($_POST['username']);
        $email = trim($_POST['email']);
        $password = trim($_POST['password']);
        $userModel = $user->findByEmail($email);
        if (!$userModel) {
            $id = $user->create($username, $email, $password);
            $_SESSION['user_id'] = $id;
            $_SESSION['username'] = $username;
            $_SESSION['role'] = 'user';
            header('Location: ../templates/home.php');
            exit;
        }
        if ($userModel['username'] === $username && $user->verifyPassword($password, $userModel['password'])) {
            $_SESSION['user_id'] = $userModel['id'];
            $_SESSION['username'] = $userModel['username'];
            $_SESSION['role'] = $userModel['role'];
            if ($userModel['role'] === 'admin') {
                header('Location: ../templates/admin.php');
            }
            else {
                header('Location: ../templates/home.php');
            }
            exit;
        }
        echo "<script> 
            alert('Invalid username or password for this email.');
            window.history.back();
        </script>";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Local Events Hub - Login</title>
    <script>if(localStorage.getItem("daynight-theme")==="carbon"){document.documentElement.classList.add("carbon");}</script>
    <link rel="stylesheet" href="../assets/css/admin.css">
</head>
<body>
    <div class="login-theme-toggle">
        <div class="theme-toggle">
            <button class="theme-btn theme-btn-snow active" onclick="setTheme('snow')" title="Snow Edition">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <circle cx="12" cy="12" r="5"/>
                    <line x1="12" y1="1" x2="12" y2="3"/>
                    <line x1="12" y1="21" x2="12" y2="23"/>
                    <line x1="4.22" y1="4.22" x2="5.64" y2="5.64"/>
                    <line x1="18.36" y1="18.36" x2="19.78" y2="19.78"/>
                    <line x1="1" y1="12" x2="3" y2="12"/>
                    <line x1="21" y1="12" x2="23" y2="12"/>
                    <line x1="4.22" y1="19.78" x2="5.64" y2="18.36"/>
                    <line x1="18.36" y1="5.64" x2="19.78" y2="4.22"/>
                </svg>
            </button>
            <button class="theme-btn theme-btn-carbon" onclick="setTheme('carbon')" title="Carbon Edition">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"/>
                </svg>
            </button>
        </div>
    </div>

    <div class="login-page">
        <div class="login-container">
            <div class="login-card">
                <div class="login-header">
                    <div class="login-logo">
                        <div class="logo-icon">
                            <svg viewBox="0 0 24 24" fill="currentColor">
                                <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/>
                            </svg>
                        </div>
                        <span>Local Events Hub</span>
                    </div>
                    <h1 class="login-title">Welcome to Local Events Hub</h1>
                    <p class="login-subtitle">Login or create an account to submit and manage events.</p>
                </div>
                <form class="login-form" method="post">
                    <div class="form-group">
                        <label class="form-label">Username</label>
                        <input type="text" name="username" class="form-input" placeholder="Choose a username" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Email Address</label>
                        <input type="email" name="email" class="form-input" placeholder="you@example.com">
                    </div>
                    <div class="form-group">
                        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 0.5rem;">
                            <label class="form-label" style="margin-bottom: 0;">Password</label>
                            <a href="#" style="font-size: 0.8125rem; color: var(--accent);">Forgot password?</a>
                        </div>
                        <input type="password" name="password" class="form-input" placeholder="Enter your password">
                    </div>
                    <button type="submit" class="btn btn-primary" >
                        Continue
                    </button>
                </form>
                <p class="login-footer">
                    Don't have an account? <a href="#">Sign up for free</a>
                </p>
            </div>
        </div>
    </div>

    <script src="../assets/js/admin.js"></script>
</body>
</html>
