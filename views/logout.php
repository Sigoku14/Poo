<?php require_once "../views/templates/header.php"; ?>
<link rel="stylesheet" type="text/css" href="../css/logout.css">

</head>

<body>
    <div class="title">
        <h1 id="logout_title">Logout</h1>
    </div>
    <div id="logout_cont">
        <p class="logout_p">
          <h3>ログアウト</h3>
          <br>
            ログアウトします。
            <br>
            よろしいですか?
        </p>
        <br>
        <a href="?page=logout&logout=yes">ログアウト</a>
        <br>
        <br>
        <a href="../controllers/mypage.php">戻る</a>
    </div>
</body>

</html>
