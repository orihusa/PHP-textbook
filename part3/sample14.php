<?php
// 全角英数字を半角文字に変換する
// ※但し、使用する為にはマルチバイト関数が有効になっている必要がある
$zip = mb_convert_kana($_REQUEST['zip'], 'a', 'UTF-8');

if (preg_match("#\A\d{3}\-\d{4}\z#", $zip)) {
	print('郵便番号：〒' . $zip);
} else {
	print('※郵便番号は 123-4567 の形式でご記入ください');
}

?>
