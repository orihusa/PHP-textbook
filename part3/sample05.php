<?php
	// 入力内容を画面に表示する。
	print('性別：' . htmlspecialchars($_POST['gender'], ENT_QUOTES));

/**

チェックボックスやラジオボタンの受信であっても、安全の為に htmlspecialchars() を使用する。

**/

?>
