<?php require_once "../views/templates/header.php"; ?>
<link rel="stylesheet" type="text/css" href="../css/mypage.css" media="all">
<!-- <link rel="stylesheet" type="text/css" href="../css/mypage.css" media="all"> -->
</head>

<body>
    <!-- <a href="../controllers/login.php" class="square_btn">とりあえずログインページボタン</a> -->
    <div class="title">
        <h1 id="mypage_title">マイページ</h1>
    </div>


    <div class="menu">
        <hr>
        <div class="nav">
            <a href="../controllers/member_change.php" class="square_btn">▸会員情報編集</a>
            <a href="../controllers/Information_disclosure.php" class="square_btn">▸病院情報提示</a>
            <a href="../controllers/logout.php" class="square_btn">▸ログアウト</a>
            <a href="../controllers/unsubscribe.php" class="square_btn">▸退会</a>
        </div>
    </div>



    <?php require_once "../views/templates/fixed.php"; ?>
</body>

</html>