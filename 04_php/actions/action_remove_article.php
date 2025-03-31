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
$article = getArticle($db, intval($id));

$stmt = $db->prepare("DELETE FROM news WHERE id = :id");
$stmt->bindParam(':id', $id);
$stmt->execute();

header('Location: /');
