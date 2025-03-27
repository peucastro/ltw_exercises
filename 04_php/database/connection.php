<?php

declare(strict_types=1);

?>

<?php
function getDatabaseConnection()
{
    return new PDO('sqlite:database/news.db');
}
