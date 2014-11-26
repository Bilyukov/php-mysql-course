<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>фУНКЦИИ ЗА МАСИВИ</title>
</head>
<body>
<?php

$names = array("Иван", "Георги", 'Петър', "Яни", "Атанас");

echo "Имена преди сортировка <br />";
echo "<pre>";
print_r($names);
echo "<pre>";

sort($names);

echo "Имена след сортировка <br />";
echo "<pre>";
print_r($names);
echo "<pre>";


echo "<hr>";

shuffle($names);

echo "Имена след shuffle <br />";
echo "<pre>";
print_r($names);
echo "<pre>";

echo "<hr>";

 $user = array(
		'Потребителско Име' => 'gbilyukov',
		'Точки' => '10',
        'Име' => 'Георги Билюков'
    );
	
echo "Потребител преди сортировка по ключове: <br />";
echo "<pre>";
print_r($user);
echo "<pre>";

ksort($user);


echo "Потребител след сортировка по ключове: <br />";
echo "<pre>";
print_r($user);
echo "<pre>";

echo "<hr>";
	
	// unset($user['Име']);
	
	if(isset($user['Име'])){
		echo "Масивът user съдържа елемент с ключ \"Име\"";
	} else {
		echo "Масивът user не съдържа елемент с ключ \"Име\"";
	}

echo "<hr>";

$colors = array(
    "залено", "жълто", 'синьо');

echo "Стрингов низ генериран от масив с помощта на функцията Implode: <br />";
$color_string = implode(", ", $colors);

echo $color_string;

echo "<hr>";

$colors = array(
    "залено", "жълто", 'синьо');

$other_colors = array(
    "оранвево", "сиво");

$all_colors = array_merge($colors, $other_colors );

echo "<pre>";
print_r($all_colors);
echo "<pre>";
?>

</body>
</html>

