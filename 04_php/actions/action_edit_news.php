<?php

declare(strict_types=1);

require_once(__DIR__ . '/../database/connection.db.php');
require_once(__DIR__ . '/../database/news.db.php');

$id =  intval($_POST['id']);
$title = $_POST['title'];
$introduction = $_POST['introduction'];
$fulltext = $_POST['fulltext'];

$db = getDatabaseConnection();

$stmt = $db->prepare('UPDATE news SET title = :title, introduction = :introduction, fulltext = :fulltext WHERE id = :id');
$stmt->bindParam(':id', $id);
$stmt->bindParam(':title', $title);
$stmt->bindParam(':introduction', $introduction);
$stmt->bindParam(':fulltext', $fulltext);
$stmt->execute();

header('Location: ../article.php?id=' . $id);
