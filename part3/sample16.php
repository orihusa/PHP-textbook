<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3c.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<title>sample 1-3.2</title>
</head>

<body>
<h3>一行毎にテーブルセルの色を変える</h3>

<table>
<?php
	for($i = 1; $i <= 10; $i++) {
		if($i % 2) {
			print('<tr style="background-color: #bce0f2">');
		} else {
			print('<tr>');
		}
		print('<td>' . $i . '</td>');
		print('<td>' . $i . '行目の情報です</td>');
		print('</tr>');
	}

// if文の条件式で、($i % 2 == 1) とあるのを、「== 1」を省略する事ができる。
// 1は、trueと解釈される為。ここでは除算の余りが1の場合、trueの処理が実行される。
// 因みに、falseは0とは異なるため、利用に関して注意すべき。
?>
</table>

</body>
</html>
