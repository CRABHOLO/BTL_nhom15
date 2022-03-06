<?php session_start()?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN""http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link href="public/css/cssindex.css" rel="stylesheet" type="text/css"/>
    <link href="public/css/header.css" rel="stylesheet" type="text/css"/>
    <link href="public/css/log.css" rel="stylesheet" type="text/css"/>
    <title>Cậu Vàng Shop</title>
</head>

<body bgcolor="#F7F7F7">
<div id="container">
    <button onclick="topFunction()" id="goHome" title="Về đầu trang"><img src="images/icon/arrow-up.png"/></button>
    <div id="header">
        <?php include("header.php") ?>
        <div style="clear: both"></div>
    </div>
    <!-------Phần menu-->
    <?php include("menu.php") ?>
    <!-----------content----------------->
    <div class="page-gt">
        <p><span style="font-family: Tahoma, Geneva, sans-serif;color: #FFFFFF">&nbsp;&nbsp;GIỚI THIỆU</span></p>
        <hr/>

        <div align="center"><img src="images/icon/cauvang.png" alt="logo"/></div>
        <h2 class="chamngon">Ta thà bán cả thiên hạ chứ không thể để thiên hạ bán ta</h2>
        <style>
            h2.chamngon {
                font-size: 32px;
                margin-left: 100px;
                color: yellow;
            }
            }
        </style>
        <div class="khung-gt"><img src="Hình/logogioithieu.jpg" width="350" height="250" style="float:left"/>
            <div class="conten-gt">Chào mừng bạn đã đến với Cậu Vàng Shop!<br/>
                Khi cậu Vàng Bị ông Giáo bán, cuộc đời cậu vàng đã đổi sang một chương mới.
                Để cho mỗi con vật đều có thể có một mái nhà, Cậu Vàng đã làm nên trang Web
                nơi các thú cưng có thể tìm được mái nhà riêng của mình.
                <br>
                Hãy liên hệ với Cậu Vàng shop để có sản phẩm ưng ý và hài lòng !
            </div>
        </div>
    </div>
    <div style="clear:both"></div>

    <!--Đây là phần cuối-->
    <div class="Footer">
        <?php include("footer.php")?>
    </div>

</div>
<script type="text/javascript" src="public/js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="public/js/events.js"></script>
</body>
</html>
