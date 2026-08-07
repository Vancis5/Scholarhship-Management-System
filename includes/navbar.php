<div class="navbar-actions">
    <!-- Notification Bell Button -->
    <a href="<?= SITE_URL ?>/notification" class="nav-action-btn" title="Notifications">
        <i data-lucide="bell"></i>
        <span class="nav-btn-badge" id="navNotifBadge">0</span>
    </a>

    <!-- User Profile & Settings Button -->
    <a href="<?= SITE_URL ?>/settings" class="nav-profile-btn" title="Account Settings">
        <i data-lucide="user-circle"></i>
        <span class="nav-profile-name"><?= isStudent() ? 'Student (' . htmlspecialchars($_SESSION['user_identifier'] ?? '') . ')' : 'Registrar Staff' ?></span>
    </a>
</div>