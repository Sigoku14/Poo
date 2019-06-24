<?php
require_once '../config.php';
require_once '../models/function/function.php';
require_once '../models/class/memberRegistration.php';
require_once '../models/class/login.php';
session_start();
// セッションの中に会員登録クラスがあるか？
if (!empty($_SESSION['memberRegistration'])) {
    // あれば取得
    $memberRegistration = $_SESSION['memberRegistration'];
} else {
    // なければ作成
    $memberRegistration = new hew\MemberRegistration;
}
sessionDelete();
// 会員登録クラス
// 存在チェック
if (!empty($_POST)) {
    if (!empty($_POST['name'])) {
        // あった場合
        $memberRegistration->setName(h($_POST['name']));
    }
    if (!empty($_POST['pass'])) {
        // あった場合
        $memberRegistration->setPass($_POST['pass']);
    }
    if (!empty($_POST['pass2'])) {
        // あった場合
        $memberRegistration->setPass2($_POST['pass2']);
    }
    if (!empty($_POST['mail'])) {
        // あった場合
        $memberRegistration->setMail(h($_POST['mail']));
    }
    if (!empty($_POST['mail2'])) {
        // あった場合
        $memberRegistration->setMail2(h($_POST['mail2']));
    }
    // エラーチェック
    if ($memberRegistration->errCheck()) {
        // エラーがない場合
        session_start();
        $_SESSION['memberRegistration'] = $memberRegistration;
        header("Location:memberConfirm.php");
        exit;
    }
}
// echo '<pre>';
// var_dump($memberRegistration);
// var_dump($memberRegistration->errCheck());
// echo '</pre>';
require_once '../views/memberRegistration.php';
