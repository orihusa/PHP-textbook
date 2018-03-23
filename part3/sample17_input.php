<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3c.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<title>sample 1-3.3</title>
</head>

<body>
	<h3>入力されたIDを次回アクセス時まで覚える---Cookie</h3>

<?php
	// Cookieに内容が保存されていれば、変数に格納する。
	if(isset($_COOKIE['my_id'])) {
		$myId = $_COOKIE['my_id'];
	} else {
		$myId = '';
	}
?>

<form action="sample17.php" method="post">
	<dl>
		<dt>ID</dt>
		<dd><input type="text" name="my_id" id="my_id" value="<?php echo $myId; ?>"></dd>
		<dt>パスワード</dt>
		<dd><input type="password" name="password" id="password"></dd>
		<dt>IDの保存</dt>
	</dl>

	<p>
		<input type="checkbox" name="save" id="save" value="on">
		<label for="save">IDを保存する</label>
	</p>
	<input type="submit" value="送信する">
</form>

</body>
</html>
