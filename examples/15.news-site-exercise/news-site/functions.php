<?php

	function print_header(){
?>

<!DOCTYPE html>
<html lang="en">
	<head>
    <meta charset="utf-8">
		<title>Новините Днес</title>

		<link href="libs/bootstrap/css/bootstrap.css" rel="stylesheet">
		<link href="libs/bootstrap/css/bootstrap-responsive.css" rel="stylesheet">
		<link href="styles.css" rel="stylesheet">
	</head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="brand" href="index.php">Новините Днес</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
<?php
	$db = DB::getInstance();
				
	$query = "SELECT CategoryName  ".
			 "FROM newsportal.categories ".
			 "WHERE IsVisible = 1 ".
			 "ORDER BY `Order`";
			 
	$result = $db->getQueryResults($query);
	
	foreach ($result as $item){
		
		echo "<li><a href='category.php?cat=" . $item['CategoryName'] . "'>" . $item['CategoryName'] . "</a></li>";
		
	}
	
?>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container">
		<div class="hero-unit">	
			<div class="row-fluid">
				<div class="span4">
					<img class="site-logo" src="images/logo.png" />
				</div>
				<div class="span8">
					<h1>Най-актуалното от днешния ден</h1>
					<p>Актуланите новини от всички аспекти. Бъдете информирани винаги по всяко време!</p>
				</div>
			</div>
		</div>

<?php		
	}
	
	function print_footer(){
?>
	</div> 
	
    <script src="libs/bootstrap/js/bootstrap.js"></script>

  

</body>
</html>
<?php		
	}

?>