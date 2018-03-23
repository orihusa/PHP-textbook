<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3c.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<title>sample 1-2.3</title>
</head>

<body>
<h3>都道府県の一覧をドロップダウンに表示する</h3>


<select name="pref" id="pref">
<?php

// 配列に都道府県名を設定（ネットからコピペ、置換）
	$prefs = array(
'北海道',
'青森県',
'岩手県',
'宮城県',
'秋田県',
'山形県',
'福島県',
'茨城県',
'栃木県',
'群馬県',
'埼玉県',
'千葉県',
'東京都',
'神奈川県',
'新潟県',
'富山県',
'石川県',
'福井県',
'山梨県',
'長野県',
'岐阜県',
'静岡県',
'愛知県',
'三重県',
'滋賀県',
'京都府',
'大阪府',
'兵庫県',
'奈良県',
'和歌山県',
'鳥取県',
'島根県',
'岡山県',
'広島県',
'山口県',
'徳島県',
'香川県',
'愛媛県',
'高知県',
'福岡県',
'佐賀県',
'長崎県',
'熊本県',
'大分県',
'宮崎県',
'鹿児島県',
'沖縄県');

//	for ($i = 0; $i < count($prefs); $i++) {
//		print('<option value="' . $prefs[$i] . '">' . $prefs[$i] . '</option>');

	foreach ($prefs as $pref) {
		print('<option value="' . $pref . '">' . $pref . '</option>');
	}


/*
// 配列への値の追加
	$alphabets = array('a', 'b', 'c');
	$alphabets[] = 'd';		//配列の末尾に追加される。

	array_push($alphabets, 'e');	//ファンクションを使う場合の例。配列の末尾に追加される。
	var_dump($alphabets);
	array_pop($alphabets);		//配列の末尾から値を削除する。
*/
?>
</select>

</body>
</html>
