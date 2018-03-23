<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3c.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<title>sample 1-1.1</title>
</head>

<body>
	<h3>画面に文章を表示する</h3>

<pre>
<?php
	// 文字列をシングルクォーテーションで囲った例
	print('PHPを勉強中です！');

	// 改行
	print("\n");	// ダブルクォーテーションで囲う必要がある

	// 文字列をダブルクォーテーションで囲った例
	print("PHPを勉強中です！！");
?>
</pre>

<!-- PHPのタグで囲めば、どの箇所に記述してもよい -->
<p><?php print('PHPを勉強中です！'); ?></p>
<a href="<?php print('http://h2o-space.com'); ?>">タグ属性にPHPを埋め込みました</a>

</body>
</html>
