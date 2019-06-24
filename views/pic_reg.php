<?php require_once "../views/templates/header.php"; ?>
<link rel="stylesheet" type="text/css" href="../css/pic_reg.css">
</head>

<body>
    <div class="title">
        <h1 id="reg_title">調べたいところを選ぼ！</h1>
    </div>

    <div id="canvas">
        <img id="img_test" src="<?php echo $unko_image; ?>" style="display:none;">
        <canvas id="MyCanvas"></canvas>
    </div>
    <h2 id="tyusyutu">抽出された色群</h2>
    <div id="show_color"></div>
    <form action="" method="post" class="color_form" enctype="multipart/form-data">
        <span class="color red">Red　 :<input type="text" name="red" class="text" readonly value="0">/255</span>
        <br>
        <span class="color green">Green :<input type="text" name="green" class="text" readonly value="0">/255</span>
        <br>
        <span class="color blue">Blue　:<input type="text" name="blue" class="text" readonly value="0">/255</span>

        <br>
        <button type="submit" name="send_color" value="send" class="up">登録する</button>
    </form>
    <script>
        // RGBから#ffffff形式へ変換する
        function RGB2bgColor(r, g, b) {
            r = r.toString(16);
            if (r.length == 1) r = "0" + r;

            g = g.toString(16);
            if (g.length == 1) g = "0" + g;

            b = b.toString(16);
            if (b.length == 1) b = "0" + b;

            return '#' + r + g + b;
        }

        var canvas = document.getElementById("MyCanvas");
        if (canvas.getContext) {
            // コンテキストの取得
            var ctx = canvas.getContext("2d");
            var image = document.getElementById("img_test");

            image.onload = function() {
                // キャンバスをクリア
                ctx.clearRect(0, 0, canvas.width, canvas.height);

                // キャンバスの中心に画像を描画
                var x = (canvas.width - image.width) / 2;
                var y = (canvas.height - image.height) / 2;
                ctx.drawImage(image, x, y);
            };
        }

        canvas.onclick = function(evt) {

            //  マウス座標の取得
            var x = parseInt(evt.offsetX);
            var y = parseInt(evt.offsetY);

            //  指定座標のImageDataオブジェクトの取得
            var imagedata = ctx.getImageData(x, y, 1, 1);

            //  RGBAの取得
            var r = imagedata.data[0];
            var g = imagedata.data[1];
            var b = imagedata.data[2];
            var a = imagedata.data[3];

            canvas.style.backgroundColor = RGB2bgColor(r, g, b);
            document.forms[0].elements[0].value = r;
            document.forms[0].elements[1].value = g;
            document.forms[0].elements[2].value = b;
            // console.log(r);
            // console.log(g);
            // console.log(b);
            //send.phpにおくりたいデータをjSON形式で書く
            var $rgb = {
                "r": r,
                "g": g,
                "b": b
            };

            //ajaxで読み出し
            $.ajax({
                type: 'POST',
                url: './pic_reg.php',
                data: $rgb
            })
            // .done(function(data) {
            //     // ここに処理が完了したときのアクションを書く
            //     // alert("送信完了！\nレスポンスデータ：" + data);
            // });


            var input = document.getElementById('show_color');
            input.style.backgroundColor = 'rgb(' + r + ',' + g + ',' + b + ')';
        }
    </script>

    <?php require_once "../views/templates/fixed.php"; ?>
</body>

</html>
