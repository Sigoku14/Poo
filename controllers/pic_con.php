<?php
require_once '../config.php';
require_once '../models/function/function.php';
require_once '../models/class/login.php';
session_start();
// ログインされていなければログインページに飛ばす
$login = loginCheck();
// $login->getUserId();
// var_dump($login->getUserId());
date_default_timezone_set('Asia/Tokyo');
if (!empty($_POST['upload']) && is_uploaded_file($_FILES['upfile']['tmp_name'])) {
    // var_dump($login);
    // var_dump($login->getUserId());
    if (!file_exists('./../img/user/' . $login->getUserId())) {
        mkdir('./../img/user/' . $login->getUserId());
    }
    // $new_name = $login->getUserId();
    // $new_name .= '_';
    $old_name = $_FILES['upfile']['tmp_name'];
    //ベースとなるファイル名を変換
    $new_name = date('ymdHis');
    $_SESSION['img_date'] = $new_name;
    //ファイルの型
    $new_name .= '.jpg';
    //画像を画像フォルダに追加
    $up = move_uploaded_file($old_name, './../img/user/' . $login->getUserId() . '/' . $new_name);
    $_SESSION['img'] = './../img/user/' . $login->getUserId() . '/' . $new_name;
    header('location:../controllers/pic_reg.php');
    exit;
    //$pathData = pathinfo('./../img/user/'.$login->getUserId().'/'.$new_name);
}

require_once '../views/pic_con.php';
