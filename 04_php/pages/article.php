<?php

declare(strict_types=1);

require_once(__DIR__ . '/../utils/session.php');
$session = new Session();

require_once(__DIR__ . '/../database/connection.db.php');
require_once(__DIR__ . '/../database/news.db.php');
require_once(__DIR__ . '/../database/comments.db.php');

require_once(__DIR__ . '/../templates/common.tpl.php');
require_once(__DIR__ . '/../templates/news.tpl.php');

$db = getDatabaseConnection();
$article = getArticle($db, intval($_GET['id']));
$comments = getComments($db, intval($_GET['id']));


output_header("Super Legit News", $session);
output_full_article($article, $comments);
output_footer();
