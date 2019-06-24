<?php require_once "../views/templates/header.php"; ?>
<link rel="stylesheet" type="text/css" href="../css/memberConfirm.css" media="all">

</head>

<body>
    <div class="registr">
        <h1 id="regist_title">ユーザー登録</h1>
    </div>
    <br>
    <form action="" method="post">
        <div id="box1">
            <table>
                <tr>
                    <th colspan="2">内容をお確認ください</th>
                </tr>
                <tr>
                    <td>名前:</td>
                  </tr>
                  <tr>
                    <td>
                        <?php echo $memberRegistration->getName() ?>
                    </td>
                </tr>
                <tr>
                    <td>パスワード:</td>
                </tr>
                <tr>
                    <td>
                        <?php echo str_repeat('*', strlen($memberRegistration->getPass())) ?>
                    </td>
                </tr>
                <tr>
                    <td>メールアドレス:</td>
                </tr>
                <tr>
                    <td>
                        <?php echo $memberRegistration->getMail() ?>
                    </td>
                </tr>
        </div>
        <!-- <div id="box2">
                <tr>
                    <td>生年月日</td>

                <td>
                    <select id="year"><option value="0">----</option></select>年
                    <select id="month"><option value="0">--</option></select>月
                    <select id="day"><option value="0">--</option></select>日​
                </td>
            </tr>
                <tr>
                    <td>身長<br>体重</td>
                    <td>
                        <input type="number" name="height" placeholder="身長">cm
                        <br>
                        <input type="number" name="weight" placeholder="体重">kg
                    </td>
                </tr> -->
        </table>

                <button type="submit" name="send" value="back" class="square_btn">戻る</button>
                <button type="submit" name="send" value="register" class="square_btn">登録</button>

        <!-- </div> -->
    </form>
    <!-- <script>
    //現在の年数オブジェクトを4桁で生成
    var time = new Date();
    var year = time.getFullYear();
    //1900年まで表示
    for (var i = year; i >= 1930; i--) {
      createOptionElements(i,'year');
    }
    //1～12の数字を生成
    for (var i = 1; i <= 12; i++) {
      createOptionElements(i,'month');
    }
    //1～31の数字を生成
    for (var i = 1; i <= 31; i++) {
      createOptionElements(i,'day');
    }

    function createOptionElements(num,parentId){
        var doc = document.createElement('option');
        doc.value = doc.innerHTML = num;
        document.getElementById(parentId).appendChild(doc);
    }
    </script>
     -->
</body>

</html>
