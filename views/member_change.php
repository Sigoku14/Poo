<?php require_once "../views/templates/header.php"; ?>
<link rel="stylesheet" type="text/css" href="../css/member_change.css">
</head>

<body>
    <div class="title">
        <h1 id="login_title">会員情報変更</h1>
        <br>
        <h3>変更したい項目を入力してください</h3>
        <?php echo $memberChange->getMsg() ?>
    </div>
    <br>
    <br>
    <form action="" method="post">
        <div class="change">
            <label>現在のメールアドレス：<br>
                <input type="email" name="mail" placeholder="メールアドレス"></label>
            <br>
            <label>新しいメールアドレス：<br>
                <input type="email" name="mail2" placeholder="メールアドレス(再)"></label>
            <br>
            <p><?php echo $memberChange->getErrMsg()['mail'] ?>
            </p>
            <br>
            <br>
            <label>現在のパスワード：<br>
                <input type="password" name="pass" placeholder="パスワード"></label>
            <br>
            <label>新しいパスワード(再)：<br>
                <input type="password" name="pass2" placeholder="パスワード(再)"></label>
            <br>
            <p><?php echo $memberChange->getErrMsg()['pass'] ?>
            </p>
            <br>
            <br>
            <label>新しい名前：<br>
                <input type="name" name="name" placeholder="名前"></label>
            <br>
            <p><?php echo $memberChange->getErrMsg()['name'] ?>
            </p>
            <!-- <br>
            <br>
            <label>生年月日<br>
                <select id="year">
                    <option value="0">----</option>
                </select>年
                <select name="month" id="month">
                    <option value="0">--</option>
                </select>月
                <select name="day" id="day">
                    <option value="0">--</option>
                </select>日​</label>
            <br>
            <br>
            <label>身長<br>
                <input type="number" name="height" placeholder="身長">cm</label>
            <br>
            <label>体重<br>
                <input type="number" name="weight" placeholder="体重">kg</label> -->
        </div>
        <div class="sq_btn">
            <button class="square_btn" type="submit" name="entry" value="情報変更">情報変更</button>
            <br>
            <a href="mypage.php">戻る</a>
        </div>
    </form>
</body>

</html>
