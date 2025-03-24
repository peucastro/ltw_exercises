<?php
require_once('database/connection.php');
require_once('database/news.php');

require_once('templates/common.php');

$db = getDatabaseConnection();
$articles = getAllNews($db);
?>

<?= output_header("Super Legit News") ?>
<section id="news">
    <?php foreach ($articles as $article) { ?>
        <article>
            <header>
                <h1><a href="article.php?id=<?= $article['id'] ?>"><?= $article['title'] ?></a></h1>
            </header>
            <img src="https://picsum.photos/600/300?business" alt="">
            <p><?= $article['introduction'] ?></p>
            <footer>
                <span class="author"><?= $article['name'] ?></span>
                <span class="tags">
                    <?php $tags = explode(',', $article['tags']); ?>
                    <?php foreach ($tags as $tag) { ?>
                        <a href="/"><?= '#' . $tag ?></a>
                    <?php } ?>
                </span>
                <span class="date"><?= $date = date('F j', $article['published']) ?></span>
                <a class="comments" href="article.php?id=<?= $article['id'] ?>#comments"><?= $article['comments'] ?></a>
        </article>
    <?php } ?>
</section>
<?= output_footer() ?>
