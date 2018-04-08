<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3c.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<title>P1.step07</title>
</head>

<body>
	<h3>SQLを安全に保つ</h3>

<?php
$db = mysqli_connect('localhost', 'phpMyAdmin', 'php@MyAdmin01', 'mydb') or die(mysqli_connect_error());
mysqli_set_charset($db, 'utf8');

//テスト用
$request = "' OR ''='";
$safeSql = sprintf("SELECT * FROM test_table WHERE password='%s'",
			mysqli_real_escape_string($db, $request)
);
// こうする事で、シングルクォーテーションに\マーク付けて無害化する

print($safeSql);
?>

</body>
</html>
