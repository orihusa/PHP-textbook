<?php
session_start();
require('./dbconnect.php');

// ログイン状態のチェック
if (isset($_SESSION['id'])) {
	// ログイン状態にある
	$id = $_REQUEST['id'];

	// これから削除しようとする投稿を検査する
	$sql = sprintf('SELECT * FROM posts WHERE id=%d',
		mysqli_real_escape_string($db, $id)
	);
	$record = mysqli_query($db, $sql) or die(mysqli_error($db));
	$table = mysqli_fetch_assoc($record);

	if ($table['member_id'] == $_SESSION['id']) {
		// 削除実行
		$sql = sprintf('DELETE FROM posts WHERE id=%d',
			mysqli_real_escape_string($db, $id)
		);
		mysqli_query($db, $sql) or die(mysqli_error($db));
	}
}

header('Location: msgBoard.php');
exit();
?>
