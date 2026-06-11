<?php
    include 'partials/header-admin.php';
?>

<main class="main-content">
    <div class="page-header">
        <h1 class="greeting">Create Event</h1>
        <p class="greeting-sub">Create a new event for the Local Events Hub.</p>
    </div>
    <div class="card">
        <div class="card-header">
            <div>
                <h3 class="card-title">New Event Form</h3>
                <p class="card-subtitle">Fill in the event information below.</p>
            </div>
            <span class="badge badge-green">Create</span>
        </div>
        <div style="padding:0 1.5rem 1.5rem;">
            <form action="../models/create.php" method="post">
                <input type="hidden" name="redirect" value="../templates/admin.php">
                <input type="hidden" name="source" value="submit_event">
                <div style="display:grid; grid-template-columns:repeat(auto-fit, minmax(240px,1fr)); gap:1rem; margin-bottom:1rem;">
                    <div>
                        <label style="display:block; margin-bottom:0.5rem; font-weight:500;">
                            Event Name
                        </label>
                        <input type="text" name="title" placeholder="Enter event name" required style="width:100%; padding:0.85rem 1rem; border:1px solid var(--border-color); border-radius:12px; background:var(--surface-color); color:var(--text-primary);">
                    </div>
                    <div>
                        <label style="display:block; margin-bottom:0.5rem; font-weight:500;">
                            Category
                        </label>
                        <select name="category" required style="width:100%; padding:0.85rem 1rem; border:1px solid var(--border-color); border-radius:12px; background:var(--surface-color); color:var(--text-primary);">
                            <option value="">Select Category</option>
                            <option>Music</option>
                            <option>Sports</option>
                            <option>Technology</option>
                            <option>Workshop</option>
                            <option>Community</option>
                            <option>Other</option>
                        </select>
                    </div>
                </div>
                <div style="display:grid; grid-template-columns:repeat(auto-fit, minmax(240px,1fr)); gap:1rem; margin-bottom:1rem;">
                    <div>
                        <label style="display:block; margin-bottom:0.5rem; font-weight:500;">
                            Event Date
                        </label>
                        <input type="date" name="date" required style="width:100%; padding:0.85rem 1rem; border:1px solid var(--border-color); border-radius:12px; background:var(--surface-color); color:var(--text-primary);">
                    </div>
                    <div>
                        <label style="display:block; margin-bottom:0.5rem; font-weight:500;">
                            Location
                        </label>
                        <input type="text" name="location" placeholder="Enter location" required style="width:100%; padding:0.85rem 1rem; border:1px solid var(--border-color); border-radius:12px; background:var(--surface-color); color:var(--text-primary);">
                    </div>
                </div>
                <div style="margin-bottom:1rem;">
                    <label style="display:block; margin-bottom:0.5rem; font-weight:500;">
                        Event Description
                    </label>
                    <textarea rows="8" name="description" placeholder="Describe your event..." required style="width:100%; padding:0.85rem 1rem; border:1px solid var(--border-color); border-radius:12px; background:var(--surface-color); color:var(--text-primary); resize:vertical;"></textarea>
                </div>
                <div style="display:flex; gap:0.75rem; flex-wrap:wrap;">
                    <button type="submit" class="btn">
                        Create Event
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