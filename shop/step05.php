<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3c.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<title>P1.step05</title>
</head>

<body>
	<h3>レコードセットからデータを取得する</h3>

<?php
// ソースにログイン名とパスワードを直書きしている。工夫が必要。
$db = mysqli_connect('localhost', 'phpMyAdmin', 'php@MyAdmin01', 'mydb') or die(mysqli_connect_error());
//echo 'データベースに接続しました';
//echo '<br>';

//my.confで設定されるが、プログラムの記述が優先される。
mysqli_set_charset($db, 'utf8');
//echo '文字コードを、UTF-8 に設定しました';

$recordSet = mysqli_query($db, 'SELECT * FROM my_items');
//$data = mysqli_fetch_assoc($recordSet);
//echo $data['item_name'];
//$data = mysqli_fetch_assoc($recordSet);
//echo '<br>';
//echo $data['item_name'];

while ($data = mysqli_fetch_assoc($recordSet)) {
	echo $data['item_name'];
	echo '<br>';
}

?>

</body>
</html>
