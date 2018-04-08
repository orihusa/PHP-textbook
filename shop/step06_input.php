<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3c.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<title>P1.step06</title>
</head>

<body>
	<h3>フォームからの情報を保存するSQL</h3>

	<h3>商品登録</h3>
	<p>登録する商品の情報を記入してください。</p>
	<form id="frmInput" name="frmInput" method="post" action="step06_input_do.php">
	<dl>
		<dt><label for="maker_id">メーカーID</label></dt>
		<dd>
			<input type="text" name="maker_id" id="maker_id" size="10" maxlength="10">
		</dd>

		<dt><label for="item_name">商品名</label></dt>
		<dd>
			<input type="text" name="item_name" id="item_name" size="35" maxlength="255">
		</dd>

		<dt><label for="price">価格</label></dt>
		<dd>
			<input type="text" name="price" id="price" size="10" maxlength="10">円
		</dd>

		<dt><label for="keyword">キーワード</label></dt>
		<dd>
			<input type="text" name="keyword" id="keyword" size="50" maxlength="255">
		</dd>
	</dl>
	<input type="submit" value="登録する">
	</form>
</body>
</html>
