<?php
// セッションを使うページは全てこのsession_startファンクションを使用する。
（或いは、php.iniに設定を行うか）
session_start();
?>

<p><?php echo $_SESSION['my_id']; ?>さんの情報はまだ残っています</p>
<p><a href="./sample18_logout.php">ログアウトする</a></p>
