<?php

declare(strict_types=1);

require_once(__DIR__ . '/database/connection.php');
require_once(__DIR__ . '/database/news.php');
require_once(__DIR__ . '/database/comments.php');

require_once(__DIR__ . '/templates/common.php');
require_once(__DIR__ . '/templates/news.php');

$db = getDatabaseConnection();
$article = getArticle($db, intval($_GET['id']));
$comments = getComments($db, intval($_GET['id']));


output_header("Super Legit News");
output_full_article($article, $comments);
output_footer();
