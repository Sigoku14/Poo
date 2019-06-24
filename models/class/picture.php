<?php
namespace hew;

class Picture
{

    // プロパティ
    private $id = '';

    // セッター
    public function setPass($id)
    {
        $this->id = $id;
    }

    public function pictureInsert()
    {
        //データベース接続。＊定数化
        $dsn = 'mysql:dbname=' . DB . ';host=' . DB_HOST . ';charset=utf8';
        $user = DB_USER;
        $password = DB_PASS;

        $dbh = new PDO($dsn, $user, $password);
        $stmt = $dbh->prepare('INSERT INTO user (user_name,user_pass,user_mail) VALUES (:name,:pass,:mail)');
        //プレースホルダに代入
        $stmt->bindValue(':name', $this->name);
        $stmt->bindValue(':pass', $this->pass);
        $stmt->bindValue(':mail', $this->mail);
        //クエリー実行
        $stmt->execute();
    }

    public function pictureSelect()
    {
        $flg = false;
        if (empty($this->id)) {
            header('location:./login.php');
        }

        if ($flg == false) {
            //ログイン用SQL
            //データベース接続
            $dsn = 'mysql:dbname=' . DB . ';host=' . DB_HOST . ';charset=utf8';
            $user = DB_USER;
            $password = DB_PASS;

            $dbh = new PDO($dsn, $user, $password);
            $stmt = $dbh->prepare('SELECT * FROM picture WHERE user_id = :id');
            //プレースホルダに代入
            $stmt->bindValue(':id', $this->id);
            //クエリー実行
            $stmt->execute();
        }
        return $stmt;
    }
}
