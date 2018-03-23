<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3c.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<title>sample 1-4.2</title>
</head>

<body>
	<h3>ファイルに内容を書き込む</h3>

<?php
// 自動的にファイルを出力する。
// 但し、このパスではURL直書きすれば内容を参照できてしまう。
	$success = file_put_contents('./news_data/news.txt', '2018-3-23 ホームページをリニューアルしました');
?>



<?php
	if ($success) {
		print('<p>ファイルへの書き込みが完了しました。</p>');
	} else {
		print('<p>書き込みに失敗しました。ディレクトリの権限などを確認して下さい。</p>');
	}
?>
</body>
</html>
