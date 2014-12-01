
<?php
	function printHeader() {
		echo "<!DOCTYPE html>" .
			 "<head lang=\"en\">".
			 "<meta charset=\"UTF-8\">".
			 "<title>Въведение във Функциите</title>".
			 "<meta charset=\"UTF-8\">".
			 "</head>".
			 "<body>";
	}

	function printFooter() {
		echo '</body>'.
			 '</html>';
	}


	printHeader();
	
	echo "Hello Functions!!!";
	
	printFooter();

?>