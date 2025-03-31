<?php

declare(strict_types=1);

?>

<?php function output_comments($article, $comments): void
{ ?>
    <section id="comments">
        <h1><?= count($comments) ?> Comments</h1>
        <?php foreach ($comments as $comment) { ?>
            <article class="comment">
                <span class="user"> <?= $comment['username'] ?></span>
                <span class="date"><?= date('F j', $comment['published']) ?></span>
                <p><?= $comment['text'] ?></p>
            </article>
        <?php } ?>
        <form action="/actions/action_insert_comment.php" method="post">
            <input type="hidden" name="id" value="<?= $article['id'] ?>">
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
            <button type="submit">Reply</button>
        </form>
    </section>
<?php } ?>
