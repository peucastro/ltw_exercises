<?php

declare(strict_types=1);

?>

<?php function output_edit_article_form($article): void
{ ?>
    <section>
        <form action="actions/action_edit_news.php" method="post">
            <input type="hidden" name="id" value="<?= intval($_GET['id']) ?>">
            <label>Title:
                <input type="text" name="title" value="<?= $article['title'] ?>">
            </label>
            <label>Introduction:
                <textarea name="introduction" rows=5 cols=35>
            <?= $article['introduction'] ?>
        </textarea>
            </label>
            <label>Full text:
                <textarea name="fulltext" rows=20 cols=35>
            <?= $article['fulltext'] ?>
        </textarea>
            </label>
            <input type="submit" value="Send">
        </form>
    </section>
<?php } ?>
