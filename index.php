<?php
	session_start();
	include_once('db/connect.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='shortcut icon' href='./img/9.png' />
    <title>MT Rubik</title>
    <link href="//fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i&amp;subset=latin-ext" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese"
	rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <link rel="stylesheet" href="./assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="./assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="./assets/js/owl.carousel.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="./assets/css/sp.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/responsive.css">
    <script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 0);
		}
	</script>
    <script src="./assets/js/qc.js" type=text/javascript></script>
</head>
<body>
    <?php
        include('include/header.php');
        include('include/navbar.php');
        if(isset($_GET['quanly'])){
            $tam = $_GET['quanly'];
        }else{
            $tam = '';
        }
        if($tam=='tatcasp'){
            include('include/tatcasp.php');
        }elseif ($tam=='baiviet'){
            include('include/baiviet.php');
        }else {
            include('include/container.php');
        }
        include('include/section.php');
        include('include/footer.php');
        include('qc.php');
        ?>  
</body>
<div id="mess-body">
    <img src="./img/Facebook_Messenger_logo.webp" alt="" width="40">
</div>
<div class="mess-body-animation">
    <div class="circle one"></div>
    <div class="circle two"></div>
    <div class="circle three"></div>
</div>
<div title="Về đầu trang" id="top-up"><i class="fas fa-chevron-circle-up"></i></div>
<script>
    var offset = 500;
    var duration = 100;
    $(function(){
    $(window).scroll(function () {
    if ($(this).scrollTop() > offset)
    $('#top-up').fadeIn(duration);else
    $('#top-up').fadeOut(duration);
    });
    $('#top-up').click(function () {
    $('body,html').animate({scrollTop: 0}, duration);
    });
    });
</script>
<script>
    $('a[href*="#"]')
    .not('[href="#"]')
    .not('[href="#*"]')
    .click(function(e) {
        var data_id = $(this).attr('href');
        $('html, body').animate({
        scrollTop: $(data_id).offset().top
        }, '0');
    });
</script>
<!-- <script type="text/javascript">
function hide_float_left() {
    var content = document.getElementById('float_content_left');
    var hide = document.getElementById('hide_float_left');
    if (content.style.display == "none")
    {content.style.display = "block"; hide.innerHTML = '<a href="javascript:hide_float_left()">Tắt quảng cáo [X]</a>'; }
        else { content.style.display = "none"; hide.innerHTML = '<a href="javascript:hide_float_left()">Xem quảng cáo...</a>';
    }
    }
</script>
<style>
.float-ck { position: fixed;bottom:0; z-index: 9000}
* html .float-ck {position:absolute;bottom:auto;top:expression(eval (document.documentElement.scrollTop+document.docum entElement.clientHeight-this.offsetHeight-(parseInt(this.currentStyle.marginTop,10)||0)-(parseInt(this.currentStyle.marginBottom,10)||0))) ;}
#float_content_left {border: 1px solid #01AEF0;}
#hide_float_left {text-align:left; font-size: 11px;}
#hide_float_left a {background: #01AEF0; padding: 2px 4px; color: #FFF;}
</style>
<div class="float-ck" style="left: 0px" >
    <div id="hide_float_left">
<a href="javascript:hide_float_left()&index.php">Tắt Quảng Cáo [X]</a></div>
<div id="float_content_left">
<img src="./img/qc.png" alt="">
</div>
</div> -->

