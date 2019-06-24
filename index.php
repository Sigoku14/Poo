<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 5.01 Transitional//EN" "http://www.w3.org/TR/html5/loose.dtd">
<html lang="ja">

<head>
    <title>BIG BEN</title>
    <script type="text/javascript" src="js/jquery-3.3.1.js"></script>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" type="text/css" href="css/design.css" media="all">
    <link rel="stylesheet" type="text/css" href="css/menu.css" media="all">
    <link rel="stylesheet" type="text/css" href="./css/logo.css">
</head>
<script>
    $('head').append(
        '<style>body{display:none;}</style>'
    );
    $(window).on("load", function() {
        $.when(
            $('body').delay(600).fadeIn(2500)
        ).done(function() {
            $.when(
                $('body').delay(600).fadeOut(2500)
            ).done(function() {
                location.href = './controllers/index.php';
            });
        });
    });
</script>

<body>
    <a href="./controllers/index.php">
        <div class="img_box">
            <img src="./img/for_site/logo.png" id="image">
            <h3 id="logo_title">BIG BEN</h3>
        </div>

        <div class="tap">
            <!-- Tap to Start -->
        </div>
    </a>
</body>

</html>