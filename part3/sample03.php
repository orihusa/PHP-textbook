<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3c.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<title>sample 1-1.3</title>
</head>

<body>
	<h3>画面に現在の時刻を表示する</h3>

<pre>
<?php
// タイムゾーン指定
	date_default_timezone_set('Asia/Tokyo');

// 現在時刻表示
	print('現在は ' . date('G時 i分 s秒') . ' です' . "\n");

	print('秒の表示 ' . date('s') . "\n");

	print('分の表示 ' . date('i') . "\n");
?>
</pre>

<p>
<?php
// パラメータの確認
	print(date('G'));	// 時を24時間表記で。
	print('時');
	print(date('i'));	// 分。2桁表記。
	print('分');
	print(date('s'));	// 秒。2桁表記。
	print('秒');
?>
</P>

<?php
// 文字列の連結
	print(date('G') . '時' . date('i') . '分' . date('s') . '秒');
?>
</P>

</body>
</html>
