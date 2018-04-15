<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3c.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<title>P1.step08</title>
</head>

<body>

<?php
$db = mysqli_connect('localhost', 'phpMyAdmin', 'php@MyAdmin01', 'mydb') or die(mysqli_connect_error());
mysqli_set_charset($db, 'utf8');

$recordSet = mysqli_query($db,
				'SELECT m.name, i.* FROM makers m, my_items i 
				WHERE m.id = i.maker_id ORDER BY id DESC'
			);

?>

	<h3>データの一覧画面を作る</h3>

	<table border=1 width="100%">
		<tr>
			<th scope="col">ID</th>
			<th scope="col">メーカー</th>
			<th scope="col">商品名</th>
			<th scope="col">価格</th>
		</tr>
<?php
	while ($table = mysqli_fetch_assoc($recordSet)) {
?>
		<tr>
			<td><?php print(htmlspecialchars($table['id']));?></td>
			<td><?php print(htmlspecialchars($table['name']));?></td>
			<td><?php print(htmlspecialchars($table['item_name']));?></td>
			<td><?php print(htmlspecialchars($table['price']));?></td>
		</tr>
<?php
	}
?>
	</table>
</body>
</html>
