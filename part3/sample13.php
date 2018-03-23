<?php
// 全角文字を半角文字に変換する
// ※但し、使用する為にはマルチバイト関数が有効になっている必要がある
$age = mb_convert_kana($_REQUEST['age'], 'n', 'UTF-8');

if (is_numeric($age)) {
	print($age . '歳');
} else {
	print('※年齢は数字でご記入ください');
}

// マルチバイト関数の有効化
// php.iniの、次の設定が有効であるか
// extension=php_mbstring.dll
// mbstringに関する設定の変更
// mbstring.language = Japanese
// mbstring.internal_encoding = UTF-8
// mbstring.http_input = pass
// mbstring.http_output = pass
// mbstring.encoding_translation = Off
// mbstring.detect_order = auto // 要確認
// mbstring.substitute_character = none
// mbstring.func_overload = 0

// 設定を変更後、再起動が必要

?>
