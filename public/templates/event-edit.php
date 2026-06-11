<?php
    include 'partials/header-admin.php';

    require_once '../models/database.php';
    $database = new Database();
    $pdo = $database->connect();
    $id = (int) $_GET['id'];
    $stmt = $pdo->prepare("SELECT * FROM events WHERE id = ? ");
    $stmt->execute([$id]);
    $event = $stmt->fetch(PDO::FETCH_ASSOC);
    if (!$event)
    {
        die('Event not found');
    }
?>

<main class="main-content">
    <div class="page-header">
        <h1 class="greeting">Edit Event</h1>
        <p class="greeting-sub">Update an existing event.</p>
    </div>
    <div class="card">
        <div class="card-header">
            <div>
                <h3 class="card-title">Edit Event Form</h3>
                <p class="card-subtitle">Modify event information.</p>
            </div>
            <span class="badge badge-red">Edit</span>
        </div>
        <div style="padding:0 1.5rem 1.5rem;">
            <form action="../models/update.php" method="post">
                <input type="hidden" name="id" value="<?= $event['id']; ?>">
                <div style="display:grid; grid-template-columns:repeat(auto-fit, minmax(240px,1fr)); gap:1rem; margin-bottom:1rem;">
                    <div>
                        <label style="display:block; margin-bottom:0.5rem; font-weight:500;">
                            Event Name
                        </label>
                        <input type="text" name="title" value="<?= htmlspecialchars($event['title']); ?>" required style="width:100%; padding:0.85rem 1rem; border:1px solid var(--border-color); border-radius:12px; background:var(--surface-color); color:var(--text-primary);">
                    </div>
                    <div>
                        <label style="display:block; margin-bottom:0.5rem; font-weight:500;">
                            Category
                        </label>
                        <input type="text" name="category" value="<?= htmlspecialchars($event['category']); ?>" required style="width:100%; padding:0.85rem 1rem; border:1px solid var(--border-color); border-radius:12px; background:var(--surface-color); color:var(--text-primary);">
                    </div>
                </div>
                <div style="display:grid; grid-template-columns:repeat(auto-fit, minmax(240px,1fr)); gap:1rem; margin-bottom:1rem;">
                    <div>
                        <label style="display:block; margin-bottom:0.5rem; font-weight:500;">
                            Event Date
                        </label>
                        <input type="date" name="date" value="<?= $event['date']; ?>" required style="width:100%; padding:0.85rem 1rem; border:1px solid var(--border-color); border-radius:12px; background:var(--surface-color); color:var(--text-primary);">
                    </div>
                    <div>
                        <label style="display:block; margin-bottom:0.5rem; font-weight:500;">
                            Location
                        </label>
                        <input type="text" name="location" value="<?= htmlspecialchars($event['location']); ?>" required style="width:100%; padding:0.85rem 1rem; border:1px solid var(--border-color); border-radius:12px; background:var(--surface-color); color:var(--text-primary);">
                    </div>
                </div>
                <div style="margin-bottom:1rem;">
                    <label style="display:block; margin-bottom:0.5rem; font-weight:500;">
                        Event Description
                    </label>
                    <textarea rows="8" name="description" required style="width:100%; padding:0.85rem 1rem; border:1px solid var(--border-color); border-radius:12px; background:var(--surface-color); color:var(--text-primary); resize:vertical;"><?= htmlspecialchars($event['description']); ?></textarea>
                </div>
                <div style="display:flex; gap:0.75rem; flex-wrap:wrap;">
                    <button type="submit" class="btn">
                        Update Event
                    </button>
                    <a href="../templates/admin.php" class="btn btn-ghost">
                        Cancel
                    </a>
                </div>
            </form>
        </div>
    </div>
</main>

<?php
    include 'partials/footer-admin.php';
?>