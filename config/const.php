<?php
return [
    'version' => 'version_1.0',
    'max_facility' => '15',
    'err_001' => '入力内容が正しくありません',
    'title'=> 'RSTモニタシステム',
    'page_title'=>array(
        'facility' => '(施設登録)',
        'facility_mng' => '(施設管理者登録)',
        'viewer' => '(閲覧者登録)',
        'patient' => '(患者登録)',
    ),
    'btn'=>array(
        'facility' => '施設登録',
        'facility_mng' => '施設管理者登録',
        'viewer' => '閲覧者登録',
        'patient' => '患者登録',
        'regist' => '登録',
        'edit' => '編集',
        'cancel' => 'キャンセル',
        'update' => '更新',
        'delete' => '削除',
        'logout' => 'ログアウト',
    ),
    'label'=>array(
        'facility_name' => '施設名',
        'facility_id' => '施設ID',
        'facility_manager' => '施設管理者',
        'patient_count' => '患者数',
        'regist_status' => '登録済み',
        'setting_status' => '設置済み',
        'monitor_status' => 'モニタ中',
        'treatment_status' => '治療済み',
        'facility_manager_name' => '施設管理者名',
        'facility_manager_id' => '施設管理者ID',
        'password' => 'パスワード',
        'contact' => '連絡担当',
        'mail_address' => 'eメールアドレス',
        'facility_name_id' => '施設名/施設ID  ',
        'viewer_name' => '閲覧者名',
        'viewer_id' => '閲覧者ID',
        'patient_name' => '患者名',
        'patient_id' => '患者ID',
        'regist_date' => '登録年月日',
        'doctor' => '担当医',
    ),
    'text'=>array(
        'circle' => '〇',
        'input' => 'を入力してください。',
        'delete' => 'を削除しますか。',
    ),
    'msg'=>array(
        'input' => '入力してください。',
        'symbol' => '※記号入力不可',
        'facility_regist' => '施設を登録してください',
        'err_001' => 'ID、パスワードが正しくありません。',
        'err_002' => 'パスワードが正しくありません。',
        'err_003' => 'は全角カナで入力してください',
        'err_004' => 'は半角英数4文字以上で入力してください',
        'err_005' => '件以上登録できません。',
        'err_006' => '失敗：施設管理者へ問い合わせください。',
        'err_007' => 'は英語大文字を含む半角英数8文字以上で入力',
        'err_008' => 'を正しく入力してください。',
    ),
    'result'=>array(
        'OK' => 'しました。',
        'NG' => 'に失敗しました。',
        'DB_NG' => '失敗しました。',
        'NAME_NG' => '施設名が不明です。',
        'ACCESS_NG' => '通信に失敗しました。',
        'DUPE_ID' => 'が既に使用されています。',
        'NG＿PASS' => 'パスワードを変更してください',
        'NOT_REGIST' => '登録できない日付です。',
    ),
    'operation'=>array(
        'SUCCESS' => 'success',
        'DUPE_ID' => 'fail dupe id',
        'NG_PASS' => 'ng pass',
        'FAIL' => 'fail',
    ),
    'ngpass'=>array(
        '123456',
        'password',
        '12345',
        '12345678',
        'qwerty',
        '123456789',
        '1234',
        'baseball',
        'dragon',
        'football',
        '1234567',
        'monkey',
        'letmein',
        'abc123',
        '111111',
        'mustang',
        'access',
        'shadow',
        'master',
        'michael',
        'superman',
        '696969',
        '123123',
        'batman',
        'trustno1',
    ),
    //トークンミスマッチ
    'tkn_missmuch' => "セッションが切れました。<br>再度ログインしてください。",
];