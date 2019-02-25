<?php 
include_once 'formatingNews.class.php';
if (isset($_POST['submit'])) {
	$news = new FormatingNews();
	$news->formatNews();
}
 ?>


 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>News-Create</title>
 	<style>
 		.allnews
 		{
 			background-color: orange;
 			color: black;
 			margin: 50px auto;
 			padding: 20px;
 		}
 		.allnews p 
 		{
 			font-size: 1.5em;
 			font-weight: 800;
 		}
 		.allnews a
 		{
 			margin-left: 20px;
 			text-decoration: none;
 			color: white;
 			border-bottom: 3px solid black;
 			transition: border-bottom 2s;
 		}
 		.allnews a:hover
 		{
			border-bottom: 3px dotted purple;
 		}
 	</style>
 </head>
 <body>
 	<form action="#" method="post" enctype="multipart/form-data">
 	<label for="title">News Title:</label>
	<input type="text" name="title"><br>
 	<label for="article">News Article:</label>
	<textarea name="article" rows="2" cols="40"></textarea><br>
	<input type="file" name="files"><br><br>
	<input type="submit" name="submit" value="submit">
 	</form>
 	<div class="allnews">
 		<p>If you wanna see all news you can <a href="news.php"> click on this link</a></p>
 	</div>
 </body>
 </html>