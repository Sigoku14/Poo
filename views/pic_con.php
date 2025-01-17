<?php require_once "../views/templates/header.php"; ?>
<link rel="stylesheet" type="text/css" href="../css/pic_con.css">
</head>

<body>
    <div class="title">
        <h1 id="pic_title">PHOTO BIG BEN</h1>
    </div>
    <form action="" method="post" enctype="multipart/form-data" id="picform">
        <span>・抽出箇所が画像中心になるよう撮影してください。</span>
        <div class="file_button">
            画像を選ぶ
            <input type="file" name="upfile" accept="image/*" class="file_input">
        </div>
        <br>
        <div class="preview"></div>
        <br>
        <input type="submit" name="upload" value="アップロード" class="sub">
    </form>

    <script>
        // documentと毎回書くのがだるいので$に置き換え
        var $ = document;
        var $form = $.querySelector('form'); // jQueryの $("form")相当

        //jQueryの$(function() { 相当(ただし厳密には違う)
        $.addEventListener('DOMContentLoaded', function() {
            //画像ファイルプレビュー表示
            //  jQueryの $('input[type="file"]')相当
            // addEventListenerは on("change", function(e){}) 相当
            $.querySelector('input[type="file"]').addEventListener('change', function(e) {
                var file = e.target.files[0],
                    reader = new FileReader(),
                    $preview = $.querySelector(".preview"), // jQueryの $(".preview")相当
                    t = this;

                // 画像ファイル以外の場合は何もしない
                if (file.type.indexOf("image") < 0) {
                    return false;
                }

                reader.onload = (function(file) {
                    return function(e) {
                        //jQueryの$preview.empty(); 相当
                        while ($preview.firstChild) $preview.removeChild($preview.firstChild);

                        // imgタグを作成
                        var img = document.createElement('img');
                        img.setAttribute('src', e.target.result);
                        img.setAttribute('class', 'prev');
                        img.setAttribute('title', file.name);
                        // imgタグを$previeの中に追加
                        $preview.appendChild(img);
                    };
                })(file);

                reader.readAsDataURL(file);
            });
        });
    </script>

    <?php require_once "../views/templates/fixed.php"; ?>
</body>

</html>
