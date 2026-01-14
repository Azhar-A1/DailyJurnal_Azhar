<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$admin_users = ['admin', 'danny'];

if (!isset($_SESSION['username']) || !in_array($_SESSION['username'], $admin_users)) {
    header("Location: admin.php?page=dashboard");
    exit;
}
?>
