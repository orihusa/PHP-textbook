<?php
	print('送信処理中・・・' . "\n");

// 電子メールを送信するファンクションemailが存在するが、日本語が使えない。
// 代わりに、mb_send_mailファンクションを使うが、設定が面倒。
// 通常、設定はphp.iniで行うが、サーバによってはiniファイルの設定不可の場合もある。

	// プログラム内で設定の変更を行う。（ここではphp.iniで設定済みだが実習の為記述）
	mb_language("japanese");
	mb_internal_encoding("UTF-8");


	// emailが入力されていれば、処理を行う。
	if(!empty($_POST['email'])) {
		$to = $_POST['email'];
		$subject = $_POST['subject'];
		$body = $_POST['message'];
		// 差出人の名前を入れる為、MIMEヘッダの文字列をエンコードして、送信元メールアドレスを付加している。
		$from = mb_encode_mimeheader(mb_convert_encoding("わたなべ", "JIS", "UTF-8")) . "<support@orihusa.jp>";

		// メール送信
		$success = mb_send_mail($to, $subject, $body, "From:" . $from);

		if ($success) {
			print('送信しました。');
		} else {
			print('送信に失敗しました。');
		}

	} else {
		print('メールアドレスが未入力です。' . "\n");
	}
?>

