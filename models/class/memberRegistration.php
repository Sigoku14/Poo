<?php
namespace hew;

class MemberRegistration
{
    // プロパティ
    private $name = '';
    private $pass = '';
    private $pass2 = '';
    private $mail = '';
    private $mail2 = '';

    private $errName = '';
    private $errPass = '';
    private $errPass2 = '';
    private $errMail = '';
    private $errMail2 = '';

    // メゾット

    // セッター
    public function setName($name)
    {
        $this->name = $name;
    }
    public function setPass($pass)
    {
        $this->pass = $pass;
    }
    public function setPass2($pass2)
    {
        $this->pass2 = $pass2;
    }
    public function setMail($mail)
    {
        $this->mail = $mail;
    }
    public function setMail2($mail2)
    {
        $this->mail2 = $mail2;
    }

    // ゲッター
    public function getName()
    {
        return $this->name;
    }
    public function getPass()
    {
        return $this->pass;
    }
    public function getPass2()
    {
        return $this->pass2;
    }
    public function getMail()
    {
        return $this->mail;
    }
    public function getMail2()
    {
        return $this->mail2;
    }

    // エラーチェック
    public function errCheck()
    {
        $flg = true;
        if ($this->name == '') {
            $this->errName = '名前が未入力です。';
            $flg = false;
        } else {
            $this->errName = '';
        }
        if ($this->pass == '') {
            $this->errPass = 'パスワードが未入力です。';
            $flg = false;
        } else {
            $this->errPass = '';
        }
        if ($this->pass2 == '') {
            $this->errPass2 = '確認用パスワードが未入力です。';
            $flg = false;
        } else {
            $this->errPass2 = '';
        }
        if ($this->mail == '') {
            $this->errMail = 'メールアドレスが未入力です。';
            $flg = false;
        } else {
            $this->errMail = '';
        }
        if ($this->mail2 == '') {
            $this->errMail2 = '確認用メールアドレスが未入力です。';
            $flg = false;
        } else {
            $this->errMail2 = '';
        }

        if (!$flg) {
            if ($this->pass !== $this->pass2) {
                $this->errPass = 'パスワードが一致しません。';
                $flg = false;
            } else {
                $this->errPass = '';
            }
            if ($this->mail !== $this->mail2) {
                $this->errMail = 'メールアドレスが一致しません。';
                $flg = false;
            } else {
                $this->errMail = '';
            }
        }
        return $flg;
    }

    // エラー用ゲッター
    public function getErrName()
    {
        return $this->errName;
    }
    public function getErrPass()
    {
        return $this->errPass;
    }
    public function getErrPass2()
    {
        return $this->errPass2;
    }
    public function getErrMail()
    {
        return $this->errMail;
    }
    public function getErrMail2()
    {
        return $this->errMail2;
    }

    public function membeRegister()
    {
        //データベース接続。＊定数化
        $dsn = 'mysql:dbname=' . DB . ';host=' . DB_HOST . ';charset=utf8';
        $user = DB_USER;
        $password = DB_PASS;

        $dbh = new \PDO($dsn, $user, $password);
        // $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt = $dbh->prepare(
            'INSERT INTO user(user_name,user_pass,user_mail,status) VALUES(:name,:pass,:mail,:status)'
        );
        // ,birth_day,height,weight　,:height,:weight
        //プレースホルダに代入
        $stmt->bindValue(':name', $this->name);
        $stmt->bindValue(':pass', $this->pass);
        $stmt->bindValue(':mail', $this->mail);
        $stmt->bindValue(':status', 1);
        // $stmt->bindValue(':birth', $this->birth);
        // $stmt->bindValue(':height', $this->height);
        // $stmt->bindValue(':weight', $this->weight);
        //クエリー実行
        $stmt->execute();
    }
}
