<?php
	session_start();
	require('../dbconnect.php');

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

		// 重複アカウントのチェック
		if (empty($error)) {
			$sql = sprintf(
						'SELECT COUNT(*) AS cnt FROM members
							WHERE email="%s"',
							mysqli_real_escape_string($db, $_POST['email'])
				);
			$record = mysqli_query($db, $sql) or die(mysqli_error($db));
			$table = mysqli_fetch_assoc($record);
			if ($table['cnt'] > 0) {
				$error['email'] = 'duplicate';
			}
		}

		// 入力項目に異常が無い場合
		if (empty($error)) {
			// 画像をアップロードする
			$image = date('YmdHis') . $_FILES['image']['name'];
			move_uploaded_file($_FILES['inamge']['tmp_name'], '../member_picture/' . $image);

			$_SESSION['join'] = $_POST;
			$_SESSION['join']['image'] = $image;
			header('Location: check.php');
			exit();
		}
	}

	// 書き直しの場合
// 不具合対応（変数の初期値問題）
	if (isset($_REQUEST['action'])) {
		if ($_REQUEST['action'] == 'rewrite') {
			$_POST = $_SESSION['join'];
			$error['rewrite'] = true;
		}
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3c.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<title>会員登録</title>
	<link rel="stylesheet" type="text/css" href="../mini_bbs_style.css">
</head>

<body>
	<h3>会員登録</h3>

	<p>次のフォームに必要事項をご記入ください。</p>
	<form action="" method="post" enctype="multipart/form-data">
		<dl>
			<dt>ニックネーム<span class="required">必須</span></dt>
			<dd>
				<input type="text" name="name" size="35" maxlength="255"
				value="<?php
// 不具合対応（変数の初期値問題）
//					echo htmlspecialchars($_POST['name'], ENT_QUOTES, 'UTF-8');
// このままでは「Notice: Undefined index:～」のエラーが発生する。
// 原因は、フォーム入力値を受け取る処理で、初回アクセス時に値無しである為。
// （初期化してないから、そりゃそうだ。今まで動いてた仕様がおかしい）
					if (isset($_POST['name'])) {
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
// 不具合対応（変数の初期値問題）
					if (isset($_POST['email'])) {
						echo htmlspecialchars($_POST['email'], ENT_QUOTES, 'UTF-8');
					}
				?>">
				<?php if (isset($error['email']) && $error['email'] == 'blank'): ?>
				<p class="error">* メールアドレスを入力してください。</p>
				<?php endif; ?>
				<?php if (isset($error['email']) && $error['email'] == 'duplicate'): ?>
				<p class="error">* 指定されたメールアドレスは既に登録されています。</p>
				<?php endif; ?>
			</dd>

			<dt>パスワード<span class="required">必須</span></dt>
			<dd>
				<input type="password" name="password" size="10" maxlength="20"
				value="<?php
// 不具合対応（変数の初期値問題）
					if (isset($_POST['password'])) {
						echo htmlspecialchars($_POST['password'], ENT_QUOTES, 'UTF-8');
					}
				?>">
				<?php if (isset($error['password']) && $error['password'] == 'blank'): ?>
				<p class="error">* パスワードを入力してください。</p>
				<?php endif; ?>
				<?php if (isset($error['password']) && $error['password'] == 'length'): ?>
				<p class="error">* パスワードは4文字以上で入力してください。</p>
				<?php endif; ?>
			</dd>

			<dt>写真など</dt>
			<dd>
				<input type="file" name="image" size="35" >
				<?php if (isset($error['image']) && $error['image'] == 'type'): ?>
					<p class="error">* 写真などは「.gif」または「.jpg」の画像を指定して下さい。</p>
				<?php endif; ?>
				<?php if (!empty($error)): ?>
				<p class="error">* 恐れ入りますが、画像を改めて指定して下さい。</p>
				<?php endif; ?>
			</dd>
		</dl>

		<div><input type="submit" value="入力内容を確認する"></div>
	</form>

</body>
</html>
