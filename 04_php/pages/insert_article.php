<?php

declare(strict_types=1);

require_once(__DIR__ . '/../utils/session.php');
$session = new Session();

require_once(__DIR__ . '/../database/connection.db.php');

require_once(__DIR__ . '/../templates/common.tpl.php');
require_once(__DIR__ . '/../templates/insert_article.tpl.php');

if (!$session->isLoggedIn())
    header('Location: /');

output_header("Super Legit News", $session);
output_add_article_form();
output_footer();
