<?php
//	if (empty($_REQUEST['my_name']) == true) {
	if (empty($_REQUEST['my_name'])) {		// == true は省略できる
		print('名前を記入してください。<br>');
	} else {
		print('正しく記入されています。<br>');
		$name = htmlspecialchars($_REQUEST['my_name'], ENT_QUOTES);
		print('名前：' . $name);
	}
?>
