<style>
* { font-size:22px; }

</style>
<?php
	$а = '<strong>АЗ СЪМ ПРОМЕНЛИВАТА</strong>';
	
	echo 'Променливата с единички кавички $а';
	
	echo "<br />";
	
	echo "Променливата с двойни кавички $а";
	
	echo "<br /><br /><br /><br /><br />";
	
	echo "Показване на знакът \" двойна кавичка!";
	
	echo "<br />";
	
	echo "Показване на знакът \' едичнична кавичка!";
	
	echo "<br />";
	
	echo "<pre>Текстов знак за нов ред \n Този знак е различен от тага &#60;br&#62; </pre>";
	
	echo "Можем да покажем и знака \$ долар.";
	
	echo "<br />";
	
	echo "Можем да покажем и знака \\ за escaping.";
	
	echo "<br /><br /><br /><br /><br />";
	
	$my_string = "<strong>I love PHP!</strong>";
	
	$my_string_length = strlen($my_string);
	
	echo "Поменливата \$my_string_length е с дължина $my_string_length";
	
	$bg_string = "<strong>Обичам PHP!</strong>";
	
	$bg_string_length = mb_strlen($bg_string, "UTF-8");
	
	echo "<br />";
	
	echo "Поменливата \$bg_string е с дължина $bg_string_length";
	
	
	
 ?>