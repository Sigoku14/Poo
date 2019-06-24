<?php require_once "../views/templates/header.php"; ?>
<link rel="stylesheet" type="text/css" href="../css/album.css" media="all">
<style>
</style>
</head>

<body>
    <div class="title">
        <h1 id="alb_title">Poo一覧</h1>
    </div>
    <div id="around_album">
        <ul>
            <?php foreach ($data as $key => $val) : ?>
            <li class="album">
                <a href="?pic_id=<?php echo $val['pic_id'] ?>">
                    <img src="./../img/for_site/unko.png" style="background-color:rgb(<?php echo $data[$key]['red']; ?>, <?php echo $data[$key]['green']; ?>, <?php echo $data[$key]['blue']; ?>)">
                    <span>
                        <?php echo $val['save_datetime'] ?>
                    </span>
                </a>
            </li>
            <?php endforeach; ?>
        </ul>
    </div>



    <?php require_once "../views/templates/fixed.php"; ?>
</body>

</html>
