<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3c.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<title>P1.step02</title>
</head>

<body>
	<h3>データベース接続</h3>

<?php
//
//$db = mysqli_connect('localhost', 'root', '', 'mydb') or die(mysqli_connect_error());
// この記述は次のように省略できる（orの論理演算）
//$db = mysqli_connect('localhost', 'root', '', 'mydb');
//if (!$db) {
//	die(mysqli_connect_error());
//}

//
// ※php5.6以降では、mysql系関数が使えない。
// ソースにログイン名とパスワードを直書きしている。工夫が必要。
//$db = mysqli_connect('localhost', 'root', 'password', 'mydb') or die(mysqli_connect_error());
$db = mysqli_connect('localhost', 'phpMyAdmin', 'php@MyAdmin01', 'mydb') or die(mysqli_connect_error());
echo 'データベースに接続しました';

?>

</body>
</html>
