<?php

declare(strict_types=1);
require_once(__DIR__ . '/../utils/session.php');
$session = new Session();

require_once(__DIR__ . '/../database/connection.db.php');
require_once(__DIR__ . '/../database/news.db.php');

if (!$session->isLoggedIn())
    header('Location: /');

$db = getDatabaseConnection();

$title = $_POST['title'];
$published = time();
$tags = $_POST['tags'];
$username = $session->getUsername();
$introduction = $_POST['introduction'];
$fulltext = $_POST['fulltext'];

$stmt = $db->prepare('INSERT INTO news VALUES (NULL, :title, :published, :tags, :username, :introduction, :fulltext)');
$stmt->bindParam(':title', $title);
$stmt->bindParam(':published', $published);
$stmt->bindParam(':tags', $tags);
$stmt->bindParam(':username', $username);
$stmt->bindParam(':introduction', $introduction);
$stmt->bindParam(':fulltext', $fulltext);
$stmt->execute();

$id = $db->lastInsertId();
header('Location: /pages/article.php?id=' . $id);
