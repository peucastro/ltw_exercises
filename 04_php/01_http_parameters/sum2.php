<?php
$num1 = $_GET['num1'];
$num2 = $_GET['num2'];

$sum = $num1 + $num2;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <p><?php echo "$num1 + $num2 = $sum" ?></p>
    <a href="form2.html">Do another sum.</a>
</body>

</html>
