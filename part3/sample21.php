<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3c.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<title>sample 1-3.7</title>
</head>

<body>
<h3>小数を整数に切り上げる・切り下げる</h3>

<?php
	// 小数点以下を切り捨てで算出
	print('<p>3,000円のものから 100円値引きした場合は、' . floor(100 / 3000 * 100) . '%引きです。</p>');
?>

<p>その他の計算</p>
<ul>
<?php
	print('<li>元の計算式⇒ 100 / 3000 * 100 = ?</li>');
	print('<li>元の計算結果⇒' . 100 / 3000 * 100 . '</li>');
	print('<li>小数点以下切り上げ（ceil）⇒' . ceil(100 / 3000 * 100) . '</li>');
	print('<li>小数点以下四捨五入（round）⇒' . round(100 / 3000 * 100) . '</li>');
	print('<li>四捨五入で小数点以下１位まで表示（round）⇒' . round(100 / 3000 * 100, 1) . '</li>');
?>
</ul>

</body>
</html>
