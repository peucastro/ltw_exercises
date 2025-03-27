<?php

declare(strict_types=1);

require_once(__DIR__ . '/database/connection.php');
require_once(__DIR__ . '/database/news.php');

require_once(__DIR__ . '/templates/common.php');
require_once(__DIR__ . '/templates/news.php');

$db = getDatabaseConnection();
$articles = getAllNews($db);

output_header("Super Legit News");
output_article_list($articles);
output_footer();
