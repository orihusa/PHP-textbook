<?php
	// 入力内容を画面に表示する。
	print('お名前：' . htmlspecialchars($_GET['my_name'], ENT_QUOTES));
	print('<br>');
	print('メッセージ：' . htmlspecialchars($_GET['message'], ENT_QUOTES));
?>
