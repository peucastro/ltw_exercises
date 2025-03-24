<?php function output_article($article)
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
