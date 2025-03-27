<?php
function getComments($db, $id)
{
    $stmt = $db->prepare('SELECT * FROM comments JOIN users USING (username) WHERE news_id = :id');
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    return $stmt->fetchAll();
}
