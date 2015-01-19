<?php
	require_once(dirname(__FILE__).'/functions.php');
	require_once(dirname(__FILE__).'/DB.php');

	
	print_header();
	
	$db = DB::getInstance();
	
	$category = $_GET['cat'];
				
	$query = "SELECT n.NewsTitle, n.NewsBody, n.Created, n.PicturePath, c.CategoryName, a.FirstName, a.LastName  ".
			 "FROM newsportal.news AS n ".
			 "LEFT JOIN categories AS c ON c.CategoryID = n.CategoryID ".
			 "LEFT JOIN authors AS a ON a.AuthorID = n.AuthorID ".
			 "WHERE c.CategoryName='".$category . "' ".
			 "ORDER BY n.Created DESC;";
			 
	$result = $db->getQueryResults($query);
	
	foreach ($result as $row){
?>
		<div class="row article">
		  <div class="span4">
			<img src="<?= $row['PicturePath'] ?>"/>
		  </div>
		  <div class="span8">
			<div class="row">
				<h2><?= $row['NewsTitle'] ?></h2>
			</div>
			<div class="row">
				<?= $row['NewsBody'] ?>
			</div>
			<div class="row-fluid more-info">
				<div class="span4">
					<span class="label label-success"><?= $row['CategoryName'] ?></span>
				</div>
				<div class="span4">
					<strong><?= date('m/d/Y', strtotime($row['Created'])); ?></strong>
				</div>
				<div class="span4">
					<p class="text-right">Автор: <strong><?= $row['FirstName'].' '.$row['LastName'] ?></strong></p>
				</div>
			</div>
		  </div>
		</div>


<?php	
	
	}
	

	
	print_footer();
?>