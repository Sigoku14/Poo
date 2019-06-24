<?php
namespace hew;

class Login
{
    // プロパティ
    private $pass = '';
    private $mail = '';
    private $errLogin = '';
    private $data = '';
    private $userId = '';
    private $userName = '';

    // セッター
    public function setPass($pass)
    {
        $this->pass = $pass;
    }
    public function setMail($mail)
    {
        $this->mail = $mail;
    }

    // ゲッター
    public function getPass()
    {
        return $this->pass;
    }
    public function getMail()
    {
        return $this->mail;
    }
    public function getUserId()
    {
        return $this->userId;
    }
    public function getUserName()
    {
        return $this->userName;
    }
    // エラー用
    public function getErrLogin()
    {
        return $this->errLogin;
    }
    public function getStmt()
    {
        return $this->getStmt;
    }

    // メゾット
    // エラーチェック
    // PASS、MAILプロパティに間違いがないか確認
    // Boolean返す
    // エラープロパティにエラー文を保存
    // STMTかユーザー情報をプロパティに保存
    public function loginCheck()
    {
        // test_var($this);
        $flg = true;
        if (empty($this->pass)) {
            $this->errPass = 'パスワードが未入力です。';
            $flg = false;
        } else {
            $this->errPass = '';
        }
        if (empty($this->mail)) {
            $this->errMail = 'メールアドレスが未入力です。';
            $flg = false;
        } else {
            $this->errMail = '';
        }
        if ($flg) {
            //ログイン用SQL
            //データベース接続
            // use \PDO;
            $dbh = new \PDO('mysql:dbname=' . DB . ';host=' . DB_HOST . ';charset=utf8', DB_USER, DB_PASS, array());
            $stmt = $dbh->prepare('SELECT * FROM user WHERE user_mail = :mail AND user_pass = :pass AND status = 1 limit 0,1');
            //プレースホルダに代入
            $stmt->bindValue(':mail', $this->mail);
            $stmt->bindValue(':pass', $this->pass);
            //クエリー実行
            $stmt->execute();
            if (!empty($data = $stmt->fetchAll())) {
                $this->userId = $data[0]['user_id'];
                $this->userName = $data[0]['user_name'];
            } else {
                $flg = false;
            }
            // echo '<pre>';
            // var_dump($data);
            // echo '</pre>';
        }
        // return $row['id'];
        return $flg;
    }
}
