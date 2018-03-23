<?php
	$file = $_FILES['my_img']; // 連想配列として格納する。

// 画像ファイルの情報表示をする

	print('ファイル名（name）：' . $file['name'] . '<br>');
	print('ファイルタイプ（type）：' . $file['type'] . '<br>');
//	print('アップロードファイルの一時保存先：' . ini_get('upload_tmp_dir') . '<br>');
	print('アップロードしたファイル（tmp_name）：' . $file['tmp_name'] . '<br>');

	print('エラー内容（error）：' . $file['error'] . '<br>');
	print('サイズ（size）：' . $file['size'] . '<br>');

// ファイルアップロードの処理をする

	$ext = substr($file['name'] , -4);	// ファイル名から拡張子を取得。（ここでは拡張子は３文字とする）

	if ($ext == '.gif' || $ext == '.jpg' || $ext == '.png') {
		$filePath = './user_img/' . $file['name'];		// ※受け側のディレクトリは予め作成しておく。（その他ユーザに書き込み権限を与える）
		move_uploaded_file($file['tmp_name'], $filePath);

		print('<img  src="' . $filePath . '">');
	} else {
		print('※拡張子が .gif、 .jpg、 .png のいづれかのファイルをアップロードして下さい。');
	}
?>
