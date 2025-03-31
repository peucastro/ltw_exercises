<?php

declare(strict_types=1);
require_once(__DIR__ . '/../utils/session.php');
$session = new Session();

require_once(__DIR__ . '/../database/connection.db.php');
require_once(__DIR__ . '/../database/news.db.php');

if (!$session->isLoggedIn())
    header('Location: /');

$db = getDatabaseConnection();

$id = $_POST['id'];
$username = $_POST['username'];
$published = time();
$comment = $_POST['comment'];

$stmt = $db->prepare("INSERT INTO comments VALUES (NULL, :id, :username, :published, :comment)");
$stmt->bindParam(':id', $id);
$stmt->bindParam(':username', $username);
$stmt->bindParam(':published', $published);
$stmt->bindParam(':comment', $comment);
$stmt->execute();

header('Location: /pages/article.php?id=' . $id);