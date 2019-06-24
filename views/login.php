<?php require_once "../views/templates/header.php"; ?>
<link rel="stylesheet" type="text/css" href="../css/login.css">
</head>
<body>
    <div class="title">
        <h1 id="login_title">Login</h1>
    </div>
    <form action="" method="post">
        <div class="login">
            <label>メールアドレス:
                <br>
                <input type="text" name="mail" placeholder="メールアドレス">
            </label>
            <br>
            <br>
            <label>パスワード:
                <br>
                <input type="password" name="pass" placeholder="パスワード">
            </label>
            <br>
            <br>
        </div>
        <p>
            <?php echo $login->getErrLogin() ?>
        </p>
        <div class="sq_btn">
            <button type="submit" name="login"  value="ログイン" class="square_btn">ログイン</button>
            <br>
            <br>
            <a href='../controllers/memberRegistration.php' id="re_link">会員登録はこちら</a>
        </div>
    </form>
</body>
</html>
