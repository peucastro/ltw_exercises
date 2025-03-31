<?php

declare(strict_types=1);

?>

<?php function output_add_article_form(): void
{ ?>
    <section>
        <form action="/actions/action_insert_article.php" method="post">
            <input type="hidden" name="id"">
            <label>Title:
                <input type="text" name="title"">
            </label>
            <label>Tags:
                <input type="text" name="tags">
            </label>
            <label>Introduction:
                <textarea name="introduction" rows=5 cols=35></textarea>
            </label>
            <label>Full text:
                <textarea name="fulltext" rows=20 cols=35></textarea>
            </label>
            <input type="submit" value="Send">
        </form>
    </section>
<?php } ?>
