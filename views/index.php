<?php require_once "../views/templates/header.php"; ?>
<link rel="stylesheet" type="text/css" href="../css/index.css" media="all">
<script type="text/javascript" src="../js/Chart.bundle.js"></script>
<script>
    $(function() {
        var ctx = document.getElementById("myChart");
        var myChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: [
                    "<?php echo date("m/d", strtotime("-5 day")); ?>",
                    "<?php echo date("m/d", strtotime("-4 day")); ?>",
                    "<?php echo date("m/d", strtotime("-3 day")); ?>",
                    "<?php echo date("m/d", strtotime("-2 day")); ?>",
                    "<?php echo date("m/d", strtotime("-1 day")); ?>",
                    "<?php echo date("m/d"); ?>"
                ],
                datasets: [{
                    type: 'line',
                    label: '体調遷移',
                    //最新日だけPHPで入れる
                    data: [-100, 85, 60, 50, -20, 100],
                    borderColor: "rgba(255,0,0,1)",
                    backgroundColor: "rgba(0,0,0,0.1)",
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });
    })
</script>
</head>

<body>
    <div class="title">
        <h1 id="home_title">BIG BEN</h1>
    </div>

    <br>

    <div class="group">
        <div class="bg1"></div>
    </div>


    <div class="unko_cnt">
        <h3 id="cnt_title">排出カウンター</h3>
    </div>
    <div id="counter">
        <h3><?php echo $db_data[0][0] ?>
        </h3>
    </div>

    <br>
    <canvas id="myChart" width="400" height="400"></canvas>
    <br>

    <div class="notice_title">
        <h3 id="notice">お知らせ</h3>
    </div>
    <table class="notice_t">
        <tr>
            <td class="mini_title">
                世界うんこ協会がクラウドファンディングを開始しました。
            </td>
            <td class="date">
                2018/03/01
            </td>
        </tr>
        <tr>
            <td class="mini_title">
                日本でのウイルス性腸炎患者数が過去最低を記録しました！
            </td>
            <td class="date">
                2018/02/25
            </td>
        </tr>
        <tr>
            <td class="mini_title">
                ノロウイルスの感染が拡大しています。手洗いうがいを心がけましょう。
            </td>
            <td class="date">
                2018/02/20
            </td>
        </tr>
        <tr>
            <td class="mini_title">
                ビッグベンの改修工事が大詰めに差し掛かっております！(写真有り)
            </td>
            <td class="date">
                2018/02/16
            </td>
        </tr>
        <tr>
            <td class="mini_title">
                今月は全世界腸内改善月間です。規則正しい生活を目指しましょう！
            </td>
            <td class="date">
                2018/02/01
            </td>
        </tr>
    </table>

    <?php require_once "../views/templates/fixed.php"; ?>
</body>

</html>
<!--
<div id="main">
<a href="../controllers/album_k.php">album_k/アルバム記録</a><br>
<a href="../controllers/album_t.php">album_t/アルバム体調</a><br>
<a href="../controllers/index.php">index/ホーム</a><br>
<a href="../controllers/Information_disclosure.php">info/病院向けページ</a><br>
<a href="../controllers/login.php">login/ログイン</a><br>
<a href="../controllers/logout.php">ログアウト</a><br>
<a href="../controllers/member_change.php">change/会員情報編集</a><br>
<a href="../controllers/memberRegistration.php">ユーザー登録</a><br>
<a href="../controllers/mypage.php">マイページ</a><br>
<a href="../controllers/pic_con.php">pic_con/うんこ撮影</a><br>
<a href="../controllers/pic_reg.php">pic_reg/うんこ情報入力</a><br>
<a href="../controllers/unsubscribe.php">退会</a><br>
</div>
-->