<?php
require_once '../config.php';
require_once '../models/function/function.php';
require_once '../models/class/memberRegistration.php';
require_once '../models/class/login.php';
// 戻るボタンが押された場合
if (!empty($_POST) && $_POST['send'] == 'back') {
    header("Location:memberRegistration.php");
    exit;
}
session_start();
// セッションの中に会員登録クラスがあるか？
if (!empty($_SESSION['memberRegistration'])) {
    // あれば取得
    $memberRegistration = $_SESSION['memberRegistration'];
} else {
    // ない場合最初に戻す
    header("Location:memberRegistration.php");
    exit;
}
// 登録ボタンが押された場合
if (!empty($_POST) && $_POST['send'] == 'register') {
    // 会員情報DBにINSERT
    $memberRegistration->membeRegister();
    header("Location:index.php");
    sessionDelete();
    exit;
}
// session_start();
// sessionDelete();
// // 会員登録クラス
// $memberRegistration = new MemberRegistration;
// // 存在チェック
// if (isset($_POST['name'])) {
//     // あった場合
//     $memberRegistration->setName($_POST['name']);
// }
// if (isset($_POST['pass'])) {
//     // あった場合
//     $memberRegistration->setPass($_POST['pass']);
// }
// if (isset($_POST['pass2'])) {
//     // あった場合
//     $memberRegistration->setPass2($_POST['pass2']);
// }
// if (isset($_POST['mail'])) {
//     // あった場合
//     $memberRegistration->setMail($_POST['mail']);
// }
// if (isset($_POST['mail2'])) {
//     // あった場合
//     $memberRegistration->setMail2($_POST['mail2']);
// }
// // エラーチェック
// if (!$memberRegistration->errCheck()) {
//     // エラーがない場合
//     session_start();
//     $_SESSION['memberRegistration']=$memberRegistration;
//     // header( "Location:memberConfirm.php");
//     // exit;
// }
// echo '<pre>';
// var_dump($memberRegistration);
// echo '</pre>';
require_once '../views/memberConfirm.php';
