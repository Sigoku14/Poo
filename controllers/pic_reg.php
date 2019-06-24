<?php
require_once '../config.php';
require_once '../models/function/function.php';
require_once '../models/class/login.php';
session_start();
// ログインされていなければログインページに飛ばす
$login = loginCheck();
$unko_image = '';
// echo '<pre>';
// var_dump($_POST);
// echo '</pre>';
if (empty($login->getUserId()) && empty($_SESSION['img'])) {
    header('location:index.php');
    exit;
} elseif (!empty($_POST['send_color']) && !empty($_POST['red']) && !empty($_POST['blue']) && !empty($_POST['green'])) {
    $dbh = new \PDO('mysql:dbname=' . DB . ';host=' . DB_HOST . ';charset=utf8', DB_USER, DB_PASS, array());

    $stmt = $dbh->prepare('SELECT * FROM detail');
    $stmt->execute();
    $detail = $stmt->fetchAll();
    $sum = 1000;
    $detail_id = 1;
    foreach ($detail as $val) {
        $_POST['red'] > $val['red'] ? $red = $_POST['red'] - $val['red'] : $red = $val['red'] - $_POST['red'];
        $_POST['green'] > $val['green'] ? $green = $_POST['green'] - $val['green'] : $green = $val['green'] - $_POST['green'];
        $_POST['blue'] > $val['blue'] ? $blue = $_POST['blue'] - $val['blue'] : $blue = $val['blue'] - $_POST['blue'];
        if ($sum > $red + $green + $blue) {
            $sum = $red + $green + $blue;
            $detail_id = $val['id'];
        }
    }
    // test_var($detail_id);
    // test_var($sum);
// test_var($detail);

    $stmt = $dbh->prepare('INSERT INTO picture(user_id,file_path,save_datetime,red,green,blue,detail_id)
    VALUES(:user_id,:file_path,:save_datetime,:red,:green,:blue,:detail)');
    //プレースホルダに代入
    $stmt->bindValue(':user_id', $login->getUserId());
    $stmt->bindValue(':file_path', $_SESSION['img']);
    $stmt->bindValue(':save_datetime', $_SESSION['img_date']);
    $stmt->bindValue(':red', $_POST['red']);
    $stmt->bindValue(':green', $_POST['green']);
    $stmt->bindValue(':blue', $_POST['blue']);
    $stmt->bindValue(':detail', $detail_id);
    //クエリー実行
    $stmt->execute();
    $_SESSION['img'] = '';
    $_SESSION['img_date'] = '';
    $_SESSION['pic_id'] = $dbh->lastInsertId();

    header('location:album_t.php');
    exit;
} else {
    $unko_image = $_SESSION['img'];
}

require_once '../views/pic_reg.php';
