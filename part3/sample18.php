<?php
// セッションはWebブラウザを閉じるまで有効
session_start();

	if(isset($_POST['my_id'])) {
		$_SESSION['my_id'] = $_POST['my_id'];
	}
?>

<p>ようこそ<?php echo htmlspecialchars($_SESSION['my_id']); ?>さん</p>
<p><a href="./sample18_second.php">次のページへ</a></p>
