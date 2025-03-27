<?php

declare(strict_types=1);

?>

<?php
function getDatabaseConnection(): PDO
{
    return new PDO('sqlite:' . __DIR__ . '/news.db');
}
