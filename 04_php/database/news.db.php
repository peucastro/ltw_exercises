<?php

declare(strict_types=1);

?>

<?php
function getAllNews(PDO $db): array
{
    $stmt = $db->prepare('SELECT news.*, users.*, COUNT(comments.id) AS comments
    FROM news JOIN
      users USING (username) LEFT JOIN
      comments ON comments.news_id = news.id
    GROUP BY news.id, users.username
    ORDER BY published DESC');
    $stmt->execute();
    return $stmt->fetchAll();
}

function getArticle(PDO $db, int $id): array|false
{
    $stmt = $db->prepare('SELECT * FROM news LEFT JOIN users USING (username) WHERE id = :id');
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    return $stmt->fetch();
}
