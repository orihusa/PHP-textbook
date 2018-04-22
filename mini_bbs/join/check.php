<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3c.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<title>会員登録</title>
</head>

<body>
<?php
	session_start();

	if (!isset($_SESSION['join'])) {
		header('Location: index.php');
		exit();
	}


?>
	<h3>会員登録</h3>

	<p>記入した内容を確認して、「登録する」ボタンをクリックしてください。</p>
	<form action="" method="post">
		<dl>
			<dt>ニックネーム</dt>
			<dd>
				<?php echo htmlspecialchars($_SESSION['join']['name'], ENT_QUOTES, 'UTF-8'); ?>
			</dd>

			<dt>メールアドレス</dt>
			<dd>
				<?php echo htmlspecialchars($_SESSION['join']['email'], ENT_QUOTES, 'UTF-8'); ?>
			</dd>

			<dt>パスワード</dt>
			<dd>【表示されません】</dd>

			<dt>写真など</dt>
			<dd>
				<img src="../member_picture/<?php echo htmlspecialchars($_SESSION['join']['image'], ENT_QUOTES, 'UTF-8'); ?>" width="100" height="100" alt="">
			</dd>
		</dl>

		<div><a href="index.php?action=rewrite">&laquo;&nbsp;書き直す</a>
			｜<input type="submit" value="登録する"></div>
	</form>

</body>
</html>
