<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3c.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<title>sample 1-2.2</title>
</head>

<body>
<h3>今日の日にちをドロップダウンに表示する</h3>


<form action="" method="get">
<dl>
	<dt>日にち</dt>
	<dd>
	<?php print(date('n')); ?>月
	<select name="day" id="day">
	<?php

// 月末日付までループ。date()パラメータは44ページの説明に無い。
// date() パラメータ：t　今月の末日を得る。閏年対応。

		for ($day = 1; $day <= date('t'); $day++) {
			print('<option value="' . $day . '">' . $day . '日</option>');
		}
	?>
	</select>
	</dd>
</dl>
<input type="submit" value="送信する" >
</form>

</body>
</html>
