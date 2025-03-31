<?php

declare(strict_types=1);

function getDatabaseConnection(): PDO
{
    return new PDO('sqlite:' . __DIR__ . '/news.db');
}

function getUser(string $username, string $password)
{
    $db = getDatabaseConnection();

    $hashedPassword = sha1($password);

    $stmt = $db->prepare('SELECT * FROM users WHERE username = ? AND password = ?');
    $stmt->execute([$username, $hashedPassword]);

    return $stmt->fetch();
}
