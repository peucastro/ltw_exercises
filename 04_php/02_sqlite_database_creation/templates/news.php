<?php function output_article($article)
{ ?>
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
        </footer>
    </article>
<?php } ?>

<?php function output_full_article($article)
{ ?>
    <article>
        <header>
            <h1><a href="article.php?id=<?= $article['id'] ?>"><?= $article['title'] ?></a></h1>
        </header>
        <img src="https://picsum.photos/600/300?business" alt="">
        <p><?= $article['fulltext'] ?></p>
    </article>
<?php } ?>

<?php function output_article_list($articles)
{ ?>
    <section id="news">
        <?php foreach ($articles as $article) output_article($article); ?>
    </section>

<?php } ?>
