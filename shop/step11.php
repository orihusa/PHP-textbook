<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3c.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<title>P1.step11</title>
</head>

<body>

<?php
// 共通部分を外部ファイルに抜き出す
require('dbconnect.php');

// URLパラメータの受取り
// パラメータ未入力の場合の初期値設定
if (empty($_REQUEST['page'])) {
	$page = 1;
} else {
	$page = $_REQUEST['page'];
	if ($page == '') {
		$page = 1;
	}
}
$page = max($page, 1);	// これで$pageの値は0以下にはならない

// レコード数を参照し、最終ページ番号を取得する
$sql = 'SELECT COUNT(*) AS cnt FROM my_items';
$recordSet = mysqli_query($db, $sql);
$table = mysqli_fetch_assoc($recordSet);
$maxPage = ceil($table['cnt'] / 5);
$page = min($page, $maxPage);

// データ抽出
$start = ($page - 1) * 5;
$recordSet = mysqli_query($db,
				'SELECT m.name, i.* FROM makers m, my_items i 
				WHERE m.id = i.maker_id ORDER BY id DESC LIMIT ' . $start . ',5'
			);

?>

	<h3>間違えたデータを編集する</h3>

	<table border=1 width="100%">
		<tr>
			<th scope="col">ID</th>
			<th scope="col">メーカー</th>
			<th scope="col">商品名</th>
			<th scope="col">価格</th>
			<th scope="col">編集・削除</th>
		</tr>
<?php
	while ($table = mysqli_fetch_assoc($recordSet)) {
?>
		<tr>
			<td><?php print(htmlspecialchars($table['id']));?></td>
			<td><?php print(htmlspecialchars($table['name']));?></td>
			<td><?php print(htmlspecialchars($table['item_name']));?></td>
			<td><?php print(htmlspecialchars($table['price']));?></td>
			<td><a href="step11_update.php?id=<?php print(htmlspecialchars($table['id']));?>">編集</a></td>
		</tr>
<?php
	}
?>
	</table>

	<ul class="paging">
<?php
	if ($page > 1) {
?>
		<li><a href="step11.php?page=<?php print($page - 1); ?>">前のページへ</a></li>
<?php
	} else {
?>
		<li>前のページへ</li>
<?php
	}
?>

<?php
	if ($page < $maxPage) {
?>
		<li><a href="step11.php?page=<?php print($page + 1); ?>">次のページへ</a></li>
<?php
	} else {
?>
		<li>次のページへ</li>
<?php
	}
?>
	</ul>

</body>
</html>
