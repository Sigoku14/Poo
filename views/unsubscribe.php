<?php require_once "../views/templates/header.php"; ?>
<link rel="stylesheet" type="text/css" href="../css/unsubscribe.css" media="all">
</head>

<body>
    <div class="title">
        <h1 id="unsubscribe_title">退会画面</h1>
    </div>

    <div id="unsub_cont">
      <h3 class="unsub">退会</h3>
        <br>
        <p class="unsub_p">
            本ページ下記のボタンをクリックいたしますと、

            本サイトに当アカウントでのログインができなくなり,
            ユーザー情報が削除されます。
            <br>
            本当によろしいですか？
        </p>
        <br>
        <br>
        <a href="?unsubscribe=yes">退会する　</a>
        <a href="../controllers/mypage.php">戻る</a>
    </div>

</body>

</html>
