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

function isStudent() {
    return isset($_SESSION['user_role']) && $_SESSION['user_role'] === 'student';
}

function isRegistrar() {
    return !isStudent();
}

function requireRegistrar() {
    checkAuth();
    if (isStudent()) {
        header("Location: " . SITE_URL . "/dashboard");
        exit();
    }
}