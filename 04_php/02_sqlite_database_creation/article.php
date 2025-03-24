<?php
require_once('database/connection.php');
require_once('database/news.php');
require_once('database/comments.php');

require_once('templates/common.php');

$db = getDatabaseConnection();
$article = getArticle($db, $_GET['id']);
$comments = getComments($db, $_GET['id']);
?>

<?= output_header("Super Legit News") ?>
<section id="news">
    <article>
        <header>
            <h1><a href="article.php?id=<?= $article['id'] ?>"><?= $article['title'] ?></a></h1>
        </header>
        <img src="https://picsum.photos/600/300?business" alt="">
        <p><?= $article['fulltext'] ?></p>
        <section id="comments">
            <h1><?= count($comments) ?> Comments</h1>
            <?php foreach ($comments as $comment) { ?>
                <article class="comment">
                    <span class="user"> <?= $comment['username'] ?></span>
                    <span class="date"><?= $date = date('F j', $comment['published']) ?></span>
                    <p><?= $comment['text'] ?></p>
                </article>
            <?php } ?>
            <form>
                <h2>Add your voice...</h2>
                <label>Username
                    <input type="text" name="username">
                </label>
                <label>E-mail
                    <input type="email" name="email">
                </label>
                <label>Comment
                    <textarea name="comment"></textarea>
                </label>
                <button formaction="#" formmethod="post">Reply</button>
            </form>
        </section>
        <footer>
            <span class="author"><?= $article['name'] ?></span>
            <span class="tags">
                <?php $tags = explode(',', $article['tags']); ?>
                <?php foreach ($tags as $tag) { ?>
                    <a href="/"><?= '#' . $tag ?></a>
                <?php } ?>
            </span>
            <span class="date"><?= $date = date('F j', $article['published']) ?></span>
            <a class="comments" href="article.php?id=<?= $article['id'] ?>#comments"><?= count($comments) ?></a>
        </footer>
    </article>
</section>
<?= output_footer() ?>
