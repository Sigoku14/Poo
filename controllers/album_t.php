<?php
require_once '../config.php';
require_once '../models/function/function.php';
require_once '../models/class/login.php';
session_start();
// ログインされていなければログインページに飛ばす
$login = loginCheck();
if (!empty($_SESSION['pic_id'])) {
    $img_id = $_SESSION['pic_id'];
    $dbh = new \PDO('mysql:dbname=' . DB . ';host=' . DB_HOST . ';charset=utf8', DB_USER, DB_PASS, array());
    $stmt = $dbh->prepare('SELECT * FROM picture WHERE user_id = ' . $login->getUserId().' AND pic_id = ' . $img_id);
    //クエリー実行
    $stmt->execute();
    $data = $stmt->fetchAll();
    $stmt = $dbh->prepare('SELECT * FROM detail');
    $stmt->execute();
    $detail = $stmt->fetchAll();
    // if (empty($_SESSION['detail'][$img_id])) {
    //     $_SESSION['detail'][$img_id] = rand(0, count($detail)-1);
    // }

    // $detail[$_SESSION['detail']][[$img_id]];
    // test_var($detail[$_SESSION['detail'][$img_id]]);
    // test_var($_SESSION['detail'][$img_id]);
    // test_var($data);
    // test_var($detail);
} else {
    header("Location:album_k.php");
    exit;
}
// test_var($data);

require_once '../views/album_t.php';
