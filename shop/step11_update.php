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

$id = $_REQUEST['id'];
$sql = sprintf("SELECT * FROM my_items WHERE id = %d",
				mysqli_real_escape_string($db, $id)
			);
$recordSet = mysqli_query($db, $sql);
$data = mysqli_fetch_assoc($recordSet);
?>

	<h3>間違えたデータを編集する、編集画面</h3>

	<h3>商品情報変更</h3>
	<p>変更する内容を記入して下さい。</p>
	<form id="frmUpdate" name="frmUpdate" method="post" action="step11_update_do.php">
	<dl>
		<dt><label for="maker_id">メーカーID</label></dt>
		<dd>
			<input type="text" name="maker_id" id="maker_id" size="10" maxlength="10" value="<?php
										print(htmlspecialchars($data['maker_id'], ENT_QUOTES)); ?>">
		</dd>

		<dt><label for="item_name">商品名</label></dt>
		<dd>
			<input type="text" name="item_name" id="item_name" size="35" maxlength="255" value="<?php
										print(htmlspecialchars($data['item_name'], ENT_QUOTES)); ?>">
		</dd>

		<dt><label for="price">価格</label></dt>
		<dd>
			<input type="text" name="price" id="price" size="10" maxlength="10" value="<?php
										print(htmlspecialchars($data['price'], ENT_QUOTES)); ?>">円
		</dd>

		<dt><label for="keyword">キーワード</label></dt>
		<dd>
			<input type="text" name="keyword" id="keyword" size="50" maxlength="255" value="<?php
										print(htmlspecialchars($data['keyword'], ENT_QUOTES)); ?>">
		</dd>
	</dl>
	<input type="submit" value="変更する">
	<input type="hidden" name="id" value="<?php
										print(htmlspecialchars($data['id'], ENT_QUOTES)); ?>">
	</form>
</body>
</html>
