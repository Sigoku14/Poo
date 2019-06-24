<?php require_once "../views/templates/header.php"; ?>
<link rel="stylesheet" type="text/css" href="../css/Information_disclosure.css">
</head>

<body>
    <h1 id="infomation_title">主要な現病状</h1>

    <br>
    <div class="customer_infomation">
        <h3 id="infomation">便症状チェック</h3>
    </div>

    <br>

    <form action="" method="post">
        <p>宛先メールアドレス</p>
        <input type="email" name="mail">
        <p>送信情報日付</p>
        <input type="date" value="<?php echo date('Y-m-d', mktime(0, 0, 0, date('n') - 1, date('j'), date('Y'))) ?>">〜<input
            type="date" value="<?php echo date('Y-m-d') ?>">
        <br>
        <div class="nav">
            <input class="square_btn" type="submit" value="送信する">
        </div>
    </form>
    <?php require_once "../views/templates/fixed.php"; ?>
</body>
</html>
