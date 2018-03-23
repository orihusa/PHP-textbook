<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3c.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<title>sample 1-3.8</title>
</head>

<body>
<h3>書式を整える---sprintf</h3>

<?php
	$date = sprintf('%04d年 %02d月 %02d日', 2018, 1, 23);
?>

<p>日付数字を２ケタで表示する</p>

<?php
	print($date);
?>

</body>
</html>
