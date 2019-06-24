<?php
function db_query($sql)
{
    $dbh = new \PDO('mysql:dbname=' . DB . ';host=' . DB_HOST . ';charset=utf8', DB_USER, DB_PASS, array());
    $stmt=$dbh->query($sql);
    $dbh=null;
    return $stmt->fetchAll();
}
function test_var($val)
{
    echo '<pre>';
    var_dump($val);
    echo '</pre>';
}
//特殊文字変換用関数
//引数：文字列
//戻値：文字列
function h($chars)
{
    return htmlspecialchars($chars, ENT_QUOTES);
}

//MySQLへ繋ぐ関数
//引数：データベース名、ホスト名、ユーザ名、パスワード
//戻値：クラス
function sql_link($db_name, $db_host, $user, $pass)
{
    //データベース接続
    // $dsn =;

    //PDO接続
    $dbh = new PDO(
        'mysql:dbname=' . $db_name . ';host=' . $db_host . ';charset=utf8',
        $user,
        $pass,
        array()
    );
    return $dbh;
}

//MySQLへのINSERT
//引数：クラス、
//戻値：なし？
// function sql_insert()
// { }

//session_delete
//すべてのsessionを削除する
function sessionDelete()
{
    $_SESSION = array();
    if (isset($_COOKIE[SESSION_name()])) {
        setcookie(session_name(), '', time() - 42000);
    }
    session_destroy();
}

//ログインID、PASS検証あっていればTRUE
// function login($id, $pass, $dbLink)
// {
//     $sql = "select count(*) from login where login_id = '" . $_GET['id'] . "' and pass = '" . $_GET['pass'] . "'";
//     $result = mysqli_query($link, $sql);
//     if ($result) {
//         if (mysqli_fetch_assoc($result)['count(*)'] == 1) {
//             return true;
//         }
//     }
//     return false;
//     mysqli_close($link);
// }

//ファイルアップロード
// function filePath($path)
// {
//     move_uploaded_file($_FILES['up_file']['tmp_name'], $path);
// }

// ログインチェック
function loginCheck()
{
    // var_dump($_SESSION);
    if (!empty($_SESSION['login'])) {
        // あれば
        $login = $_SESSION['login'];
    } else {
        // なければ
        $login = new hew\Login;
    }
    // var_dump($login);
    if (!$login->loginCheck()) {
        // エラーがあれば
        header("Location:login.php");
        exit;
    }
    return $login;
    // || !empty($_SESSION['login']) && !$_SESSION['login']->loginCheck()
}
