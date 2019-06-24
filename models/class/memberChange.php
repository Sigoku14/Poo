<?php
namespace hew;

class MemberChange extends Login
{
    // プロパティ
    
    private $login = '';
    private $changeMail = '';
    private $changeMail2 = '';
    private $changePass = '';
    private $changePass2 = '';
    private $changeName = '';
    private $msg = '';
    private $errMsg = array(
        'mail' => '',
        'pass' => '',
        'name' => ''
    );

    // コンストラクト
    
    public function __construct($login)
    {
        $this->login = $login;
    }

    // セッター
    
    public function setChangeMail($mail)
    {
        $this->changeMail = $mail;
    }
    public function setChangeMail2($mail2)
    {
        $this->changeMail2 = $mail2;
    }
    public function setChangePass($pass)
    {
        $this->changePass = $pass;
    }
    public function setChangePass2($pass2)
    {
        $this->changePass2 = $pass2;
    }
    public function setChangeName($name)
    {
        $this->changeName = $name;
    }

    // ゲッター
    
    public function getMsg()
    {
        return $this->msg;
    }
    public function getErrMsg()
    {
        return $this->errMsg;
    }


    // メゾット

    public function memberCheck()
    {
        // echo $this->userId;
        // test_var($this);
        // test_var(parent::getPass());
        // test_var(self::getPass());
        // test_var(foo::getPass());
        // test_var($this->login);
        $dbh = new \PDO('mysql:dbname=' . DB . ';host=' . DB_HOST . ';charset=utf8', DB_USER, DB_PASS, array());
        $stmt = $dbh->query('SELECT * FROM user WHERE user_id = ' . $this->login->getUserId());
        $data = $stmt->fetchAll();
        // test_var($data);
        if (empty($this->changeMail) || empty($this->changeMail2)) {
            $this->errMsg['mail'] = '変更するメールアドレスが未入力です';
        } elseif ($this->changeMail !== $this->login->getMail()) {
            $this->errMsg['mail'] = '変更するメールアドレスが間違えています';
        } else {
            $stmt = $dbh->prepare('UPDATE user SET user_mail = "' . $this->changeMail2 . '" WHERE user_id = ' . $this->login->getUserId());
            //プレースホルダに代入
            // $stmt->bindValue(':mail', $this->mail);
            //クエリー実行
            $stmt->execute();
            $this->msg .= '<p>メールアドレスを変更しました</p>';
            // if (!empty($data = $stmt->fetchAll())) {
            //     $this->userId = $data[0]['user_id'];
            //     $this->userName = $data[0]['user_name'];
            // } else {
            //     $flg = false;
            // }
        }
        if (empty($this->changePass) || empty($this->changePass2)) {
            $this->errMsg['pass'] = '変更するパスワードが未入力です';
        } elseif ($this->changePass !== $this->login->getPass()) {
            $this->errMsg['pass'] = '変更するパスワードが間違えています';
        } else {
            $stmt = $dbh->prepare('UPDATE user SET user_pass = "' . $this->changePass2 . '" WHERE user_id = ' . $this->login->getUserId());
            $stmt->execute();
            $this->msg .= '<p>パスワードを変更しました</p>';
        }
        if (empty($this->changeName)) {
            $this->errMsg['name'] = '変更する名前が未入力です';
        } else {
            $stmt = $dbh->prepare('UPDATE user SET user_name = "' . $this->changeName . '" WHERE user_id = ' . $this->login->getUserId());
            $stmt->execute();
            $this->msg .= '<p>ユーザーネームを変更しました</p>';
        }
        // return false;
    }
    
    // public function loginCheck()
    // {
    //     $flg = true;
    //     if (empty($this->pass)) {
    //         $this->errPass = 'パスワードが未入力です。';
    //         $flg = false;
    //     } else {
    //         $this->errPass = '';
    //     }
    //     if (empty($this->mail)) {
    //         $this->errMail = 'メールアドレスが未入力です。';
    //         $flg = false;
    //     } else {
    //         $this->errMail = '';
    //     }
    //     if ($flg) {
    //         //ログイン用SQL
    //         //データベース接続
    //         // use \PDO;
    //         $dbh = new \PDO('mysql:dbname=' . DB . ';host=' . DB_HOST . ';charset=utf8', DB_USER, DB_PASS, array());
    //         $stmt = $dbh->prepare('SELECT * FROM user WHERE user_mail = :mail AND user_pass = :pass AND status = 1 limit 0,1');
    //         //プレースホルダに代入
    //         $stmt->bindValue(':mail', $this->mail);
    //         $stmt->bindValue(':pass', $this->pass);
    //         //クエリー実行
    //         $stmt->execute();
    //         $data = $stmt->fetchAll();
    //         // echo '<pre>';
    //         // var_dump($data);
    //         // echo '</pre>';
    //         $this->userId = $data[0]['user_id'];
    //         $this->userName = $data[0]['user_name'];
    //     }
    //     // return $row['id'];
    //     return $flg;
    // }
}
