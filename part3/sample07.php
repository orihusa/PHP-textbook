<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3c.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<title>sample 1-2.1</title>
</head>

<body>
<h3>10歳から70歳まで選べる、ドロップダウンボックスを表示する</h3>

<p>for文を使用する場合</p>
<select name="age" id="age">
<?php
for ($i = 10; $i <= 70; $i++) {
	print('<option value="' . $i . '">' . $i . '歳</option>');
}
?>
</select>
<br>
<p>while文を使用する場合</p>
<select name="age" id="age">
<?php
$i = 10;
while ($i <= 70) {
	print('<option value="' . $i . '">' . $i . '歳</option>');
	$i++;
}
?>
</select>

</body>
</html>
