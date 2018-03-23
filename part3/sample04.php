<?php
	// 入力内容を画面に表示する。
	print('お名前：' . htmlspecialchars($_REQUEST['my_name'], ENT_QUOTES));


/*
タグ入力でも安全に受信する
htmlspecialchars();
パラメータ：ENT_QUOTES	シングルクォーテーションも安全に受信する


<form>タグのmethod属性について
・get	URLパラメータ。URLの後ろに?を付けて値を送信する。
・post	上記と異なり、値を表示しない。





*/

?>
