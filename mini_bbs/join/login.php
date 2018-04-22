<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3c.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<title>ログイン</title>
	<link rel="stylesheet" type="text/css" href="mini_bbs_style.css">
</head>

<body>
<?php
//	require('../dbconnect.php');
//	session_start();
?>
	<h3>ログインする</h3>

	<div id="lead">
	<p>メールアドレスとパスワードを記入してログインしてください。</p>
	<p>入会手続きがまだの方はこちらからどうぞ。</p>
	<p>&raquo;<a href="join/">入会手続きをする</a></p>
	</div>
	<form action="" method="post">
		<dl>
			<dt>メールアドレス</dt>
			<dd>
				<input type="text" name="email" size="35" maxlength="255">
			</dd>

			<dt>パスワード</dt>
			<dd>
				<input type="password" name="password" size="35" maxlength="255">
			</dd>

			<dt>ログイン情報の記録</dt>
			<dd>
				<input type="checkbox" id="save" name="save" value="on" >
				<label for="save">次回からは自動的にログインする</label>
			</dd>
		</dl>

		<div><input type="submit" value="ログインする"></div>
	</form>

</body>
</html>
