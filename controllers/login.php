<?php
require_once '../config.php';
require_once '../models/function/function.php';
require_once '../models/class/login.php';
// //session_start();
// セッションの中にloginクラスがあるか？
if (!empty($_SESSION['login'])) {
    // あれば
    $login = $_SESSION['login'];
} else {
    // なければ
    $login = new hew\Login;
}
if ($login->loginCheck()) {
    // エラーがなければ
    header("Location:logout.php");
    exit;
}
if (!empty($_POST)) {
    if (!empty($_POST['mail'])) {
        // あった場合
        $login->setMail($_POST['mail']);
    }
    if (!empty($_POST['pass'])) {
        // あった場合
        $login->setPass($_POST['pass']);
    }
    // test_var($login);
    // エラーチェック
    if ($login->loginCheck()) {
        // エラーがない場合
        //session_start();
        $_SESSION['login'] = $login;
        header("Location:index.php");
        exit;
    }
}
require_once '../views/login.php';
