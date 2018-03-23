<?php
session_start();

// セッションの終了
session_unset();

// 個別にセッション変数を削除する方法
// $_SESSION['my_id'] = '';
// 或いは
// unset($_SESSION['my_id']);

header('Location: sample18_input.html');
exit();
?>
