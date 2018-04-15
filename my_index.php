<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3c.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<title>PHP入門</title>
</head>

<body>
<?php
	$homePath = "http://www.orihusa.jp/";
	$workPath = $homePath . "php-textbook/";
	$part3 = $workPath . "part3/";
	$part5 = $workPath . "shop/";
?>
	<h2>よくわかるPHPの教科書</h2>
	<hr width="96%">

	<h3>１章：プログラム入門</h3>
	<p>ざっと読んだ。</p>
	<br>

	<h3>２章：PHPの準備</h3>
	<p>
		Raspberry Pi3 をサーバとして環境を作る。<br>
		Apache2導入（<a href="<?php print($homePath); ?>index.html">Default Page</a>）<br>
		PHP7.0導入（<a href="<?php print($homePath); ?>info.php">Information</a>）<br>
	</p>
	<br>

	<h3>３章：PHPの基本</h3>
	<p>
		<h4>データの取得と表示</h4>
		<ul>
			<li>画面に文章を表示する		<a href="<?php print($part3); ?>sample01.php">sample01</a>
			<li>※画面テンプレート			<a href="<?php print($workPath); ?>template01.html">template01</a>
			<li>画面にHTMLを表示する		<a href="<?php print($part3); ?>sample02.php">sample02</a>
			<li>画面に現在の時刻を表示する	<a href="<?php print($part3); ?>sample03.php">sample03</a>
			<li>フォームに入力した内容を取得する	<a href="<?php print($part3); ?>sample04_input.html">sample04</a>
			<li>［練習問題 1-1.4］			<a href="<?php print($part3); ?>practice04_input.html">practice04</a>
			<li>ラジオボタンなどの値を取得する	<a href="<?php print($part3); ?>sample05_input.html">sample05</a>
			<li>変数を使って、同じプログラムが重なるのを防ぐ	<a href="<?php print($part3); ?>sample06_input.html">sample06</a>
			<li>［練習問題 1-1.6］			<a href="<?php print($part3); ?>practice06.php">practice06</a>
		</ul>
		<h4>制御</h4>
		<ul>
			<li>年齢を選択するドロップダウンボックスを表示する	<a href="<?php print($part3); ?>sample07.php">sample07</a>
			<li>今日の日にちをドロップダウンに表示する	<a href="<?php print($part3); ?>sample08.php">sample08</a>
			<li>都道府県の一覧をドロップダウンに表示する	<a href="<?php print($part3); ?>sample09.php">sample09</a>
			<li>商品の一覧をチェックボックスに表示する	<a href="<?php print($part3); ?>sample10.php">sample10</a>
			<li>フォームの内容が空の場合に警告を表示する	<a href="<?php print($part3); ?>sample11_input.html">sample11</a>
			<li>複数選択可能なチェックボックスの値を取得する	<a href="<?php print($part3); ?>sample12_input.html">sample12</a>
			<li>半角数字に直して数字であるかをチェックする	<a href="<?php print($part3); ?>sample13_input.html">sample13</a>
			<li>郵便番号を正規表現を使ってチェックする	<a href="<?php print($part3); ?>sample14_input.html">sample14</a>
		</ul>
		<h4>さまざまな処理</h4>
		<ul>
			<li>別のページにジャンプする	<a href="<?php print($part3); ?>sample15.php">sample15</a>
			<li>一行毎にテーブルセルの色を変える	<a href="<?php print($part3); ?>sample16.php">sample16</a>
			<li>入力されたIDを次回アクセス時まで覚える---Cookie	<a href="<?php print($part3); ?>sample17_input.php">sample17</a>
			<li>ログイン情報をログアウトするまで保持する---セッション	<a href="<?php print($part3); ?>sample18_input.html">sample18</a>
			<li>電子メールを送信する	<a href="<?php print($part3); ?>sample19_input.html">sample19</a>
			<li>２つのトップページにランダムで誘導する---rand	<a href="<?php print($part3); ?>sample20.php">sample20</a>
			<li>小数を整数に切り上げる・切り下げる	<a href="<?php print($part3); ?>sample21.php">sample21</a>
			<li>書式を整える---sprintf	<a href="<?php print($part3); ?>sample22.php">sample22</a>
		</ul>
		<h4>外部ファイルの扱い</h4>
		<ul>
			<li>ファイルアップロードを受信する	<a href="<?php print($part3); ?>sample23_input.html">sample23</a>
			<li>ファイルに内容を書き込む	<a href="<?php print($part3); ?>sample24.php">sample24</a>
			<li>ファイルの読み込み	<a href="<?php print($part3); ?>sample25.php">sample25</a>
			<li>RSSの情報を読み込む	<a href="<?php print($part3); ?>sample26.php">sample26</a>
		</ul>
	</p>
	<br>

	<h3>４章：データベースの基本</h3>
	<p>
		<h4>導入</h4>
		<ul>
			<li>データベースについて
			<li>MySQLを使ってみよう---ラズパイに導入する事で実現
			<li>データベースを使ってみよう---データベースを新規作成し、テーブルを作る
		</ul>
	</p>
		<h4>SQLの基本</h4>
		<ul><li>SELECT文などの基本構文</li></ul>
	</p>
	</p>
		<h4>SQLの応用</h4>
		<ul><li>WHERE句などの検索条件</li></ul>
	</p>
	<br>

	<h3>５章：実用的なプログラムの制作</h3>
	<p>
		<h4>PHP+DBで本格的なWebシステムを作る</h4>
		<ul>
			<li>プロジェクトの準備	（本とは異なり、A5:SQL Mk-2 を使用する）
			<li>MySQLに接続する	<a href="<?php print($part5); ?>step02.php">step02</a>
			<li>文字コードをセットする	<a href="<?php print($part5); ?>step03.php">step03</a>
			<li>SQLを実行する	<a href="<?php print($part5); ?>step04.php">step04</a>
			<li>レコードセットからデータを取得する	<a href="<?php print($part5); ?>step05.php">step05</a>
			<li>フォームからの情報を保存するSQL	<a href="<?php print($part5); ?>step06_input.php">step06</a>
			<li>SQLを安全に保つ	<a href="<?php print($part5); ?>step07.php">step07</a>
			<li>データの一覧画面を作る	<a href="<?php print($part5); ?>step08.php">step08</a>
			<li>接続プログラムを共通プログラムにする	<a href="<?php print($part5); ?>step09.php">step09</a>
			<li>件数の多いレコードを、ページを分ける	<a href="<?php print($part5); ?>step10.php">step10</a>
			<li>間違えたデータを編集する、編集画面	<a href="<?php print($part5); ?>step11.php">step11</a>
			<li>いらないデータを削除する、削除機能	<a href="<?php print($part5); ?>index.php">index(step12)</a>



		</ul>
	</p>
</body>
</html>
