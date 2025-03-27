<?php

declare(strict_types=1);

require_once('database/connection.php');
require_once('database/news.php');
require_once('database/comments.php');

require_once('templates/common.php');
require_once('templates/news.php');

$db = getDatabaseConnection();
$article = getArticle($db, $_GET['id']);
$comments = getComments($db, $_GET['id']);


output_header("Super Legit News");
output_full_article($article, $comments);
output_footer();
