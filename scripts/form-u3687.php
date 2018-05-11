<?php 
/* 	
If you see this text in your browser, PHP is not configured correctly on this hosting provider. 
Contact your hosting provider regarding PHP configuration for your site.

PHP file generated by Adobe Muse CC 2015.0.2.310
*/

require_once('form_process.php');

$form = array(
	'subject' => 'ENTRY_O フォーム の送信',
	'heading' => '新規フォームの送信',
	'success_redirect' => '../phone/finish_o.html',
	'resources' => array(
		'checkbox_checked' => 'チェック済み',
		'checkbox_unchecked' => '未チェック',
		'submitted_from' => 'Web サイトから送信されたフォーム : %s',
		'submitted_by' => '訪問者の IP アドレス : %s',
		'too_many_submissions' => '最近、この IP からの送信回数が多すぎます',
		'failed_to_send_email' => '電子メールの送信に失敗しました',
		'invalid_reCAPTCHA_private_key' => '無効な reCAPTCHA プライベートキーです。',
		'invalid_field_type' => '不明なフィールドの種類「%s」です。',
		'invalid_form_config' => 'フィールド「%s」には無効な設定が含まれています。',
		'unknown_method' => '不明なサーバー要求メソッド'
	),
	'email' => array(
		'from' => 'mb-ogikubo@blueearth.co.jp',
		'to' => 'mb-ogikubo@blueearth.co.jp'
	),
	'fields' => array(
		'custom_U3689' => array(
			'order' => 1,
			'type' => 'string',
			'label' => '名前',
			'required' => true,
			'errors' => array(
				'required' => 'フィールド「名前」が必要です。'
			)
		),
		'Email' => array(
			'order' => 6,
			'type' => 'email',
			'label' => '電子メールアドレス',
			'required' => true,
			'errors' => array(
				'required' => 'フィールド「電子メールアドレス」が必要です。',
				'format' => 'フィールド「電子メールアドレス」には無効な電子メールが含まれています。'
			)
		),
		'custom_U3727' => array(
			'order' => 17,
			'type' => 'string',
			'label' => 'ご質問',
			'required' => false,
			'errors' => array(
			)
		),
		'custom_U3693' => array(
			'order' => 13,
			'type' => 'string',
			'label' => '自宅電話番号 :
※記載例：03-3456-7890',
			'required' => true,
			'errors' => array(
				'required' => 'フィールド「自宅電話番号 :
※記載例：03-3456-7890」が必要です。'
			)
		),
		'custom_U3743' => array(
			'order' => 14,
			'type' => 'string',
			'label' => '携帯電話番号 :
※記載例：012-3456-7890',
			'required' => true,
			'errors' => array(
				'required' => 'フィールド「携帯電話番号 :
※記載例：012-3456-7890」が必要です。'
			)
		),
		'custom_U3719' => array(
			'order' => 11,
			'type' => 'string',
			'label' => '町番地 :
※記載例：高円寺北2-19-6',
			'required' => true,
			'errors' => array(
				'required' => 'フィールド「町番地 :
※記載例：高円寺北2-19-6」が必要です。'
			)
		),
		'custom_U3711' => array(
			'order' => 10,
			'type' => 'string',
			'label' => '市区町村',
			'required' => true,
			'errors' => array(
				'required' => 'フィールド「市区町村」が必要です。'
			)
		),
		'custom_U3715' => array(
			'order' => 9,
			'type' => 'string',
			'label' => '都道府県',
			'required' => true,
			'errors' => array(
				'required' => 'フィールド「都道府県」が必要です。'
			)
		),
		'custom_U3731' => array(
			'order' => 8,
			'type' => 'string',
			'label' => '郵便番号 :　※記載例：166-0002',
			'required' => true,
			'errors' => array(
				'required' => 'フィールド「郵便番号 :　※記載例：166-0002」が必要です。'
			)
		),
		'custom_U3735' => array(
			'order' => 2,
			'type' => 'string',
			'label' => 'フリガナ',
			'required' => true,
			'errors' => array(
				'required' => 'フィールド「フリガナ」が必要です。'
			)
		),
		'custom_U3756' => array(
			'order' => 3,
			'type' => 'checkbox',
			'label' => '男性',
			'required' => false,
			'errors' => array(
			)
		),
		'custom_U3752' => array(
			'order' => 4,
			'type' => 'checkbox',
			'label' => '女性',
			'required' => false,
			'errors' => array(
			)
		),
		'custom_U3697' => array(
			'order' => 5,
			'type' => 'string',
			'label' => '生年月日 :　※記載例：20160201',
			'required' => true,
			'errors' => array(
				'required' => 'フィールド「生年月日 :　※記載例：20160201」が必要です。'
			)
		),
		'custom_U3701' => array(
			'order' => 12,
			'type' => 'string',
			'label' => 'それ以降の住所 :
※マンション名等も記載ください。',
			'required' => false,
			'errors' => array(
			)
		),
		'custom_U3723' => array(
			'order' => 15,
			'type' => 'string',
			'label' => '来店予定日 :
記載例：20150406',
			'required' => true,
			'errors' => array(
				'required' => 'フィールド「来店予定日 :
記載例：20150406」が必要です。'
			)
		),
		'custom_U3705' => array(
			'order' => 16,
			'type' => 'string',
			'label' => 'ペア入会されるご友人＆ご家族のお名前 :　氏名を記載ください。',
			'required' => true,
			'errors' => array(
				'required' => 'フィールド「ペア入会されるご友人＆ご家族のお名前 :　氏名を記載ください。」が必要です。'
			)
		),
		'custom_U3748' => array(
			'order' => 7,
			'type' => 'string',
			'label' => '確認用電子メールアドレス :
※上記電子メールアドレスと同じ',
			'required' => true,
			'errors' => array(
				'required' => 'フィールド「確認用電子メールアドレス :
※上記電子メールアドレスと同じ」が必要です。'
			)
		)
	)
);

process_form($form);
?>
