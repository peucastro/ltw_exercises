<?php

declare(strict_types=1);

require_once(__DIR__ . '/../utils/session.php');
$session = new Session();

require_once(__DIR__ . '/../database/connection.db.php');

$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';

$user = getUser($username, $password);

if ($user !== false) {
    $session->setId($user['id'] ?? 0);
    $session->setName($user['name'] ?? $username);
    header('Location: /');
    exit();
} else {
    header('Location: /pages/login.php');
    exit();
}
