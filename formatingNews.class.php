<?php 
// formatingNews.class.php

class FormatingNews
{
	public function formatNews()
	{
	if (isset($_POST['title'],$_POST['article'],$_FILES['files'])) 
	{
		$title = trim($_POST['title']);
		$article = trim($_POST['article']);
		$files = $_FILES['files'];
		$isValid = $this->newsValidation($title, $article, $files);
			if ($isValid) {
				$isUpload = $this->imgLocation($files);
			if ($isUpload) 
			{
				$newsCreated = $this->updateNews($title, $article, $files);
				echo "<h1>NEWS IS SUCCESFUL CREATED</h1>";
			}
			else
			{
				echo "File must be in jpg format, or maybe name of that file exsist";
			}
			}
			else
			{
				echo "You must input News Title and your article must be higher than 20 char and less than 200 chars...";
			}
		}
	}


	public function newsValidation($title, $article, $files)
	{
		$isValid = false;
		if ($files['type'] == "images/jpg" && $files['size'] <= 102400) {
			$isValid = true;
		}
		if (strlen($article) >= 20 && strlen($article) <= 200) 
		{
			$isValid = true;
		}
		return $isValid;
	}
	public function imgLocation($files)
	{
			$isValid = false;
		$changeLocation = sprintf("imgs/%s", $files['name']);
		if (!file_exists($changeLocation)) 
			{
			$succes = move_uploaded_file($files['tmp_name'], $changeLocation);
			$isValid = true;
		}
		else 
		{
			header("Location:index.php");
			exit();
		}
		return $isValid;
	}

	public function updateNews($title, $article, $files)
	{
		$filePath = "news.txt";
		$handle = fopen($filePath, "a+");
		$date = date(DATE_RFC2822);
		if ($handle !== false) 
		{
			$newsText = sprintf("~~~~NEWS~~~~\n TITLE:%s\n DATE:[%s]\n CONTENT:%s\n
				PHOTO:%s\n",$title, $date, $article, $files['name']);
			fwrite($handle, $newsText);
			fclose($handle);
		}
	}
} // class ends


 ?>