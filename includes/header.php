<?php 
require_once __DIR__ . '/../config/config.php';
checkAuth();
?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap" rel="stylesheet">
        <link href="<?= SITE_URL ?>/assets/css/style.css" rel="stylesheet">
        <link href="<?= SITE_URL ?>/assets/lib/bulma.min.css" rel="stylesheet">
        <?php if (isset($page_css)): ?>
            <link rel="stylesheet" href="<?= SITE_URL ?>/assets/css/<?= $page_css ?>">
        <?php endif; ?>
        <link rel="icon" href="<?= SITE_URL ?>/assets/img/cmlogoremove.png">
        <script src="https://unpkg.com/lucide@latest"></script>
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <title><?= htmlspecialchars(($page_title ?? 'Scholarship Portal') . ' - Scholarship Portal') ?></title>
    </head>  


<body>
    <div id="pageProgressBar" class="page-progress-bar"></div>
    <section class="home">
        <?php include __DIR__ . '/../includes/sidebar.php'; ?>

        <div class="top-nav-sticky">
            <div class="top-nav">
                <h2><?= htmlspecialchars($page_title ?? 'Dashboard') ?></h2>
                <?php include __DIR__ . '/../includes/navbar.php'; ?>
            </div>
        </div>

