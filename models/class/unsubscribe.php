<?php
namespace hew;

class UnSubscribe
{

    // プロパティ
    private $id = '';
    private $status = 9;

    private $errLogin = '';

    // セッター
    public function setId($id)
    {
        $this->id = $id;
    }

    // ゲッター
    public function get()
    {
        return $this->a;
    }

    // エラーチェック
    public function unSubscribe()
    {
        //ログイン用SQL
        //データベース接続
        $dsn = 'mysql:dbname=' . DB . ';host=' . DB_HOST . ';charset=utf8';
        $user = DB_USER;
        $password = DB_PASS;

        $dbh = new PDO($dsn, $user, $password);
        $stmt = $dbh->prepare('UPDATE user SET status = :status WHERE id = :id');
        //プレースホルダに代入
        $stmt->bindValue(':id', $this->id);
        $stmt->bindValue(':status', $this->status);
        //クエリー実行
        $stmt->execute();
    }
}
