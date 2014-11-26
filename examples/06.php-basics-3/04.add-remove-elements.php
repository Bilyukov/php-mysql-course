<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
</head>
<body>

<?php

$array = array();
$array[] = "едно";
$array[1] = "две";
$array[] = 3;

echo " <strong>Всички елементи</strong><br/>";

echo "<pre>";
print_r($array);
echo "</pre>";

echo "<p><strong>Размер на масива: " . count($array) . "</strong></p>";
echo "<hr />";

unset($array[1]); // премахаme на елемента с индекс 1
echo "<br/><strong>Елемнетите след премахане на елемента с индекс 1</strong><br/>";

echo "<pre>";
print_r($array);
echo "</pre>";
echo "<p><strong>Размер на масива: " . count($array) . "</strong></p>";


?>

</body>
</html>

