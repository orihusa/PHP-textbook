<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3c.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<title>sample 1-4.4</title>
</head>

<body>
	<h3>RSSの情報を読み込む</h3>

<?php
	// XMLファイルを読み込み、XMLオブジェクトに格納
	// （また悩んだぞ！　拡張モジュールの罠）
	$xmlTree = simplexml_load_file('http://h2o-space.com/category/news/feed');

	foreach($xmlTree -> channel -> item as $item) {
		print('<li><a href="' . $item -> link . '">' . $item -> title . '</a></li>');
	}
?>

</body>
</html>
