<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3c.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<title>会員登録</title>
	<link rel="stylesheet" type="text/css" href="mini_bbs_style.css">
</head>

<body>
<?php
	session_start();

	if (!empty($_POST)) {
		// エラー項目の確認　未入力項目の場合、後でエラー出す仕掛けを施す。
		if ($_POST['name'] == '') {
			$error['name'] = 'blank';
		}

		if ($_POST['email'] == '') {
			$error['email'] = 'blank';
		}

		// パスワード文字列は4文字以上とする。
		if (strlen($_POST['password']) < 4) {
			$error['password'] = 'length';
		}
		if ($_POST['password'] == '') {
			$error['password'] = 'blank';
		}

		// 画像ファイルの拡張子判定
		$fileName = $_FILES['image']['name'];
		if (!empty($fileName)) {
			$ext = substr($fileName, -3);
			if ($ext != 'jpg' && $ext != 'gif') {
				$error['image'] = 'type';
			}
		}





		// エラーが無い場合、セッションに値を保存する。
		if (empty($error)) {
			$_SESSION['join'] = $_POST;
			header('Location: check.php');
			exit();
		}
	}
?>
	<h3>会員登録</h3>

	<p>次のフォームに必要事項をご記入ください。</p>
	<form action="" method="post" enctype="multipart/form-data">
		<dl>
			<dt>ニックネーム<span class="required">必須</span></dt>
			<dd>
				<input type="text" name="name" size="35" maxlength="255"
				value="<?php
					if (!isset($error['name'])) {
						echo htmlspecialchars($_POST['name'], ENT_QUOTES, 'UTF-8');
					}
				?>">
				<?php if (isset($error['name']) && $error['name'] == 'blank'): ?>
				<p class="error">* ニックネームを入力してください。</p>
				<?php endif; ?>
			</dd>

			<dt>メールアドレス<span class="required">必須</span></dt>
			<dd>
				<input type="text" name="email" size="35" maxlength="255"
				value="<?php
					echo htmlspecialchars($_POST['email'], ENT_QUOTES, 'UTF-8');
				?>">
				<?php if (isset($error['email']) && $error['email'] == 'blank'): ?>
				<p class="error">* メールアドレスを入力してください。</p>
				<?php endif; ?>
			</dd>

			<dt>パスワード<span class="required">必須</span></dt>
			<dd>
				<input type="password" name="password" size="10" maxlength="20"
				value="<?php
					echo htmlspecialchars($_POST['password'], ENT_QUOTES, 'UTF-8');
				?>">
				<?php if (isset($error['password']) && $error['password'] == 'blank'): ?>
				<p class="error">* パスワードを入力してください。</p>
				<?php endif; ?>
				<?php if (isset($error['password']) && $error['password'] == 'length'): ?>
				<p class="error">* パスワードは4文字以上で入力してください。</p>
				<?php endif; ?>
			</dd>

			<dt>写真など</dt>
			<dd><input type="file" name="image" size="35" ></dd>
		</dl>

		<div><input type="submit" value="入力内容を確認する"></div>
	</form>

</body>
</html>
