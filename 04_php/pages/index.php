<?php

declare(strict_types=1);

require_once(__DIR__ . '/../database/connection.db.php');
require_once(__DIR__ . '/../database/news.db.php');

require_once(__DIR__ . '/../templates/common.tpl.php');
require_once(__DIR__ . '/../templates/news.tpl.php');

$db = getDatabaseConnection();
$articles = getAllNews($db);

output_header("Super Legit News");
output_article_list($articles);
output_footer();
