<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3c.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<title>PHPの教科書Part5</title>
</head>

<body>
	<h3>データベース接続</h3>

<?php
// ソースにログイン名とパスワードを直書きしている。工夫が必要。
$db = mysqli_connect('localhost', 'phpMyAdmin', 'php@MyAdmin01', 'mydb') or die(mysqli_connect_error());
echo 'データベースに接続しました';

?>

</body>
</html>
