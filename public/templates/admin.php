<?php
    session_start();
        if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') {
            header('Location: ../templates/home.php');
            exit;
        }

    include 'partials/header-admin.php';
    require_once '../models/database.php';
    require_once '../models/event.php';
    require_once '../models/user.php';

    $database = new Database();
    $pdo = $database->connect();
    $event = new Event($pdo);
    $user = new User($pdo);
    $eventsModel = $event->findAll();
    $usersModel = $user->findAll();
    $totalEvents = $event->count();
    $totalUsers = $user->count();
?>

<main class="main-content">
    <div class="page-header">
        <h1 class="greeting">Local Events Hub Admin Dashboard</h1>
        <p class="greeting-sub">Manage events and users across the platform.</p>
    </div>
    <div style="display:grid; grid-template-columns:repeat(auto-fit, minmax(220px,1fr)); gap:1rem; margin-bottom:1.5rem;">
        <div class="card" style="padding:1.25rem;">
            <p style="margin:0; color:var(--text-secondary); font-size:1rem;">Total Events</p>
            <h2 style="margin:0.5rem 0 0;"><?= $totalEvents; ?></h2>
        </div>
        <div class="card" style="padding:1.25rem;">
            <p style="margin:0; color:var(--text-secondary); font-size:1rem;">Total Users</p>
            <h2 style="margin:0.5rem 0 0;"><?= $totalUsers; ?></h2>
        </div>
    </div>
    <div class="card" id="blog-posts" style="margin-bottom:1.5rem;">
        <div class="card-header">
            <div>
                <h3 class="card-title">Events</h3>
                <p class="card-subtitle">Manage event information, locations, categories, organizers and event dates.</p>
            </div>
            <a href="event-create.php" class="btn btn-ghost">+ New Event</a>
        </div>
        <div class="table-container">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Event Name</th>
                        <th>Category</th>
                        <th>Organizer</th>
                        <th>Event Date</th>
                        <th>Location</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($eventsModel as $event): ?>
                    <tr>
                        <td>#<?= $event['id']; ?></td>
                        <td>
                            <div style="font-weight:600;">
                                <?= htmlspecialchars($event['title']); ?>
                            </div>
                            <div style="font-size:0.8125rem; color:var(--text-secondary);">
                                <?= htmlspecialchars($event['description']); ?>
                            </div>
                        </td>
                        <td>
                            <?= htmlspecialchars($event['category']); ?>
                        </td>
                        <td>
                            <?= $event['username'] ? htmlspecialchars($event['username']) : 'Deleted User'; ?>
                        </td>
                        <td>
                            <?= htmlspecialchars($event['date']); ?>
                        </td>
                        <td>
                            <?= htmlspecialchars($event['location']); ?>
                        </td>
                        <td>
                            <div style="display:flex; gap:0.5rem; flex-wrap:wrap;">
                                <a href="event-edit.php?id=<?= $event['id']; ?>" class="btn btn-ghost">
                                    Edit
                                </a>
                                <a href="../models/controllers/delete.php?type=event&id=<?= $event['id']; ?>" class="btn btn-delete" onclick="return confirm('Are you sure you want to delete this event?');">
                                    Delete
                                </a>
                            </div>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
    <div class="card" id="users">
        <div class="card-header">
            <div>
                <h3 class="card-title">Users</h3>
                <p class="card-subtitle">Registered users who submit and manage events.</p>
            </div>
        </div>
        <div class="table-container">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Event Count</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($usersModel as $user): ?>
                    <tr>
                        <td>#<?= $user['id']; ?></td>
                        <td>
                            <?= htmlspecialchars($user['username']); ?>
                        </td>
                        <td>
                            <?= htmlspecialchars($user['email']); ?>
                        </td>
                        <td>
                            <span class="badge <?= strtolower($user['role']) === 'admin' ? 'badge-green' : 'badge-red'; ?>">
                                <?= htmlspecialchars($user['role']); ?>
                            </span>
                        </td>
                        <td>
                            <?= $user['event_count']; ?>
                        </td>
                        <td>
                            <div style="display:flex; gap:0.5rem; flex-wrap:wrap;">
                                <a href="../models/controllers/delete.php?type=user&id=<?= $user['id']; ?>" class="btn btn-delete" onclick="return confirm('Are you sure you want to delete this user?');">
                                    Delete
                                </a>
                            </div>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</main>

<?php
    include 'partials/footer-admin.php';
?>