<?php
require_once '../config.php';
require_once '../models/function/function.php';
require_once '../models/class/login.php';
session_start();
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
// if (!empty($_SESSION['login'])) {
//     // あればlogoutへ
//     header("Location:logout.php");
//     exit;
// } else {
//     // なければ作成
//     $login = new hew\Login;
// }
// test_var($_POST);
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
        session_start();
        $_SESSION['login'] = $login;
        header("Location:index.php");
        exit;
    }
}
// $dbh = new PDO('mysql:dbname=' . DB . ';host=' . DB_HOST . ';charset=utf8', DB_USER, DB_PASS, array());
// $stmt = $dbh->prepare('SELECT * FROM user WHERE user_mail = :mail AND user_pass = :pass AND status = 1 limit 0,1');
// //プレースホルダに代入
// $stmt->bindValue(':mail', 'tasuku1215mhg@gmail.com');
// $stmt->bindValue(':pass', '１９９７１２１５');
// //クエリー実行
// $stmt->execute();
// $array = $stmt->fetchAll();
// echo '<pre>';
// // var_dump($stmt->fetch(PDO::FETCH_ASSOC));
// var_dump($stmt);
// var_dump($array);
// // var_dump('SELECT * FROM user WHERE user_mail = "tasuku1215mhg@gmail.com" AND user_pass = "１９９７１２１５"');
// echo '</pre>';
require_once '../views/login.php';
