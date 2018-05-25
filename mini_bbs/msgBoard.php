<?php
session_start();
require('./dbconnect.php');

// idがセッションに記録されており、且つ1時間以内はログイン状態と判断する
if (isset($_SESSION['id']) && $_SESSION['time'] + 3600 > time()) {
	// ログイン状態にある
	$_SESSION['time'] = time();

	$sql = sprintf('SELECT * FROM members WHERE id=%d',
		mysqli_real_escape_string($db, $_SESSION['id'])
	);
	$record = mysqli_query($db, $sql) or die(mysqli_error($db));
	$member = mysqli_fetch_assoc($record);
} else {
	// ログインしていない
	header('Location: ./join/login.php');
	exit();
}

// 投稿を記録する
if (!empty($_POST)) {
	if ($_POST['message'] != '') {
		$sql = sprintf('INSERT INTO posts SET member_id=%d, message="%s", created=NOW()',
			mysqli_real_escape_string($db, $member['id']),
			mysqli_real_escape_string($db, $_POST['message'])
		);
		mysqli_query($db, $sql) or die(mysqli_error($db));

		header('Location: msgBoard.php');	//再送信による重複登録防止対策
		exit();
	}
}

// 投稿を取得する
$sql = sprintf('SELECT m.name, m.picture, p.* FROM members m, posts p WHERE m.id=p.member_id ORDER BY p.created DESC');
$posts = mysqli_query($db, $sql) or die(mysqli_error($db));

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3c.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<title>ひとこと掲示板</title>
	<link rel="stylesheet" type="text/css" href="./mini_bbs_style.css">
</head>

<body>
<div id="wrap">
	<div id="head">
		<h2>ひとこと掲示板</h2>
	</div>
	<div id="content">
		<form action="" method="post">
			<dl>
				<dt><?php
					if (isset($member['name'])) {
						echo htmlspecialchars($member['name']);
					}
					?>さん、メッセージをどうぞ</dt>
				<dd>
					<textarea name="message" cols="50" rows="5"></textarea>
				</dd>
			</dl>
			<div>
				<input type="submit" value="投稿する">
			</div>
		</form>
<?php
while($post = mysqli_fetch_assoc($posts)):
?>
		<div class="msg">
			<img src="member_picture/<?php echo htmlspecialchars($post['picture'], ENT_QUOTES, 'UTF-8'); ?>" width="48" height="48" alt="<?php echo htmlspecialchars($post['name'], ENT_QUOTES, 'UTF-8'); ?>">
		<p><?php echo htmlspecialchars($post['message'], ENT_QUOTES, 'UTF-8'); ?><span class="name">（<?php echo htmlspecialchars($post['name'], ENT_QUOTES, 'UTF-8'); ?>）</span>
		[<a href="msgBoard.php?res=<?php echo htmlspecialchars($post['id'], ENT_QUOTES, 'UTF-8'); ?>">Re</a>]
		</p>
		<p class="day"><?php echo htmlspecialchars($post['created'], ENT_QUOTES, 'UTF-8'); ?></p>
		</div>
<?php
endwhile;
?>
	</div>
	<div id="foot">
		<p>
			<img src="image/txt_copyright.png" width="136" height="15" alt="(C) Orihusa">
		</p>
	</div>
</div>
</body>
</html>
