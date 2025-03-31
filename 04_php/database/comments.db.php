<?php

declare(strict_types=1);

function getComments(PDO $db, int $id): array
{
    $stmt = $db->prepare('SELECT * FROM comments LEFT JOIN users USING (username) WHERE news_id = :id');
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    return $stmt->fetchAll();
}
