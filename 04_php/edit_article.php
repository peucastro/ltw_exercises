<?php

declare(strict_types=1);

require_once(__DIR__ . '/database/connection.db.php');
require_once(__DIR__ . '/database/news.db.php');

require_once(__DIR__ . '/templates/common.tpl.php');

$db = getDatabaseConnection();
$article = getArticle($db, intval($_GET['id']));

?>

<?php output_header("Super Legit News") ?>
<form>
    <input type="hidden" name="id" value="<?= intval($_GET['id']) ?>">
    <label>Title:
        <input type="text" name="title" value="<?= $article['name'] ?>">
    </label>
    <label>Introduction:
        <textarea name="introduction" rows=5 cols=60>
            <?= $article['introduction'] ?>
        </textarea>
    </label>
    <label>Full text:
        <textarea name="fulltext" rows=20 cols=120>
            <?= $article['fulltext'] ?>
        </textarea>
    </label>
    <input type="submit" value="Send">
</form>
<?php output_footer() ?>
