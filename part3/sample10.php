<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3c.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<title>sample 1-2.4</title>
</head>

<body>
<h3>商品の一覧をチェックボックスに表示する</h3>

<form action="" method="get">

<dl>
	<dt>商品</dt>
	<dd>
	<?php
	$items = array(
		'a-1' => 'ガム',
		'b-1' => 'チョコレート',
		'c-1' => 'クッキー',
		'd-1' => 'ラムネ',
	);

	foreach ($items as $itemKey => $itemValue) {
		print('<input type="checkbox" id="' . $itemKey . '" value="' . $itemKey . '">');
		print('<label for="' . $itemKey . '">' . $itemValue . '</label>  ' . "\n");
	}
	?>
	</dd>
</dl>
<input type="submit" value="送信する">
</form>

</body>
</html>
