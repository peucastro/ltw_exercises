<?php

declare(strict_types=1);

require_once(__DIR__ . '/../database/connection.db.php');
require_once(__DIR__ . '/../database/news.db.php');

require_once(__DIR__ . '/../templates/common.tpl.php');
require_once(__DIR__ . '/../templates/edit_article.tpl.php');

$db = getDatabaseConnection();
$article = getArticle($db, intval($_GET['id']));

output_header("Super Legit News");
output_edit_article_form($article);
output_footer();
