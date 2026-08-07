<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

define('SITE_URL', 'http://localhost/sms');

function checkAuth() {
    if (empty($_SESSION['user_logged_in'])) {
        header("Location: " . SITE_URL . "/login");
        exit();
    }
}