<?php require_once "../views/templates/header.php"; ?>
<link rel="stylesheet" type="text/css" href="../css/memberRegistration.css">
</head>

<body>
    <div class="title">
        <h1 id="regist_title">ユーザー登録</h1>
    </div>
    <form action="" method="post">
        <div class ="regist">
            <table>
                <tr>
                    <th>
                        <?php echo $memberRegistration->getErrName() ?>
                    </th>
                </tr>
                <tr>
              </table>
                    <label>名前:<br>
                        <input type="text" name="name" placeholder="名前" value="<?php echo $memberRegistration->getName() ?>" required></label>
                        <br>
                        <br>
                        <?php echo $memberRegistration->getErrName() ?>
                        <?php echo $memberRegistration->getErrPass() ?>

                      <label>メールアドレス:<br>
                        <input type="email" name="mail" placeholder="メールアドレス" value="<?php echo $memberRegistration->getMail() ?>" required></label>
                        <br>
                        <br>
                        <?php echo $memberRegistration->getErrMail() ?>

                        <?php echo $memberRegistration->getErrMail2() ?>

                    <label>メールアドレス(再):<br>
                        <input type="email" name="mail2" placeholder="メールアドレス(再)" value="<?php echo $memberRegistration->getMail2() ?>" required></label>
                        <br>
                        <br>
                        <?php echo $memberRegistration->getErrMail2() ?>

                    <label>パスワード:<br>
                        <input type="password" name="pass" placeholder="パスワード" value="<?php echo $memberRegistration->getPass() ?>" maxlength="100" minlength="7" required></label>
                        <br>
                        <br>
                        <?php echo $memberRegistration->getErrPass() ?>
                        <?php echo $memberRegistration->getErrPass2() ?>

                    <label>パスワード(再):<br>
                        <input type="password" name="pass2" placeholder="パスワード(再)" value="<?php echo $memberRegistration->getPass2() ?>"></label>
                        <br>
                        <br>
                        <?php echo $memberRegistration->getErrPass2() ?>
                        <?php echo $memberRegistration->getErrMail() ?>
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
                    <td>Height&Weight</td>
                    <td>身長<br>体重</td>
                    <td>
                        <input type="number" name="height" placeholder="身長">cm
                        <br>
                        <input type="number" name="weight" placeholder="体重">kg
                    </td>
                </tr> -->
        <tr>
            <td colspan="2">
                <div class="sq_btn">
                    <button type="submit" name="send" value="確認" class="square_btn">確認</button>
                </div>
            </td>
        </tr>
        </table>
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
    </script> -->
</body>

</html>
