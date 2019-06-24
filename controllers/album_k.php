<?php
require_once '../config.php';
require_once '../models/function/function.php';
require_once '../models/class/login.php';
session_start();
// ログインされていなければログインページに飛ばす
$login = loginCheck();

$dbh = new \PDO('mysql:dbname=' . DB . ';host=' . DB_HOST . ';charset=utf8', DB_USER, DB_PASS, array());
$stmt = $dbh->prepare('SELECT * FROM picture WHERE user_id = ' . $login->getUserId() . ' ORDER BY save_datetime DESC');
//プレースホルダに代入
// $stmt->bindValue(':mail', $this->mail);
// $stmt->bindValue(':pass', $this->pass);
//クエリー実行
$stmt->execute();
$data = $stmt->fetchAll();
if (!empty($_GET['pic_id'])) {
    $_SESSION['pic_id'] = $_GET['pic_id'];
    header("Location:album_t.php");
    exit;
}
// test_var($data);
// $this->userId = $data[0]['user_id'];
// $this->userName = $data[0]['user_name'];

require_once '../views/album_k.php';
