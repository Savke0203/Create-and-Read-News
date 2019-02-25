<?php 
// readNews.class.php

class ReadNews
{
	public function readAllNews()
	{
		$filePath = "news.txt";
		$handle = fopen($filePath, "r");
		if ($handle !== false) 
		{
			while (! feof($handle)) {
				$allNews = fgets($handle) . "<br>";
				echo "$allNews";

			}
			fclose($handle);
		}
	}
}
 ?>
