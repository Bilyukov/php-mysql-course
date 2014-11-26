<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<dl>
<?php

    $userArr = array(
        'name' => 'Georgi Bilyukov',
        'username' => 'gbilyukov'
    );
	
	$userArr['points'] = 9;
	
    echo "<dt> Име: </dt>";
    echo "<dd>" . $userArr['name'] . " </dd>";
    echo "<dt>Потребителско име: </dt>";
    echo "<dd>" . $userArr['username'] . " </dd>";
    echo "<dt> Точки </dt>";
    echo "<dd>" . $userArr['points'] . " </dd>";
?>
</dl>
</table>
</body>
</html>

