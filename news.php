<?php 
include_once 'readNews.class.php';
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Read News</title>
	<style>
		.wrapp 
		{
			margin: 10px auto;
			border: 1px solid black;
			padding: 10px;
		}
		.newsblog
		{
			background-color: rgb(187,25,25);
			color: #FFF;
			text-align: center;
			padding: 7px;
			border-bottom: 3px solid gold;
		}
	</style>
</head>
<body>
	<div class="wrapp">
		<div class="newsblog">
			<?php 
				$news = new ReadNews();
				$news->readAllNews();
			 ?>
		</div>
		<a href="index.php">Create some news!</a>
	</div>
</body>
</html>