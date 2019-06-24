<?php require_once "../views/templates/header.php"; ?>
<link rel="stylesheet" type="text/css" href="../css/album_t.css" media="all">
<style>
    #tap h2 {
        color: rgb(<?php echo $data[0]['red']; ?>, <?php echo $data[0]['green']; ?>, <?php echo $data[0]['blue']; ?>);
    }
    #img img{
        display: block;
        margin: auto;
        margin-top: 30px;
        max-height: 200px;
        max-width: 95%;
        box-shadow: 1px 1px 5px black;
    }
</style>
<script type="text/javascript">
    $(function() {
        //クリックイベント
        $('#tap').click(function() {
            $('#tap').css('display', 'none');
            $("#img").css('display', 'block');
            $("#img").append(
                '<img src="<?php echo $data[0]['file_path']; ?>" class="">'
            );
        })
        $('#img').click(function() {
            $('#img img').remove();
            $('#tap').css('display', 'block');
        })
    });
</script>
</head>

<body>
    <div class="title">
        <h1 id="alb_title">体調詳細</h1>
    </div>

    <div id="tap">
        <h2 id="msg_shw">
            Tap to
            <br>
            look Poo
        </h2>
    </div>
    <div id="img"></div>

    <div id="unko">
        <h3><?php echo !empty($detail[$data[0]['detail_id'] - 1]['name']) ? $detail[$data[0]['detail_id'] - 1]['name'] : $detail[0]['name'] ?>の可能性。</h3>
        <p><?php echo !empty($detail[$data[0]['detail_id'] - 1]['detail']) ? $detail[$data[0]['detail_id'] - 1]['detail'] : $detail[0]['detail'] ?></p>
    </div>



    <?php require_once "../views/templates/fixed.php"; ?>

</body>

</html>
