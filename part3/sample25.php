<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3c.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<title>sample 1-4.3</title>
</head>

<body>
	<h3>ファイルの読み込み</h3>

<?php
	$news = file_get_contents('./news_data/news.txt');

	$news .="<br>ファイルの内容を読み込みました。";

?>



<?php
	print($news);
?>
</body>
</html>
