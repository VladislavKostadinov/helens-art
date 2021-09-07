<?php 
require_once "dbconnect.php";

define("IMG", "https://helens-art.epizy.com/img/");
define('URLBASE', 'https://helens-art.epizy.com/');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
if(isset($_POST['submit'])) {
  

require_once "Composer/vendor/autoload.php";

$mail = new PHPMailer();
$mail->CharSet = "utf-8";


$mail->addAddress('vladicius@gmail.com', 'Vladislav Kostadinov');
$mail->addAddress("bgoutlaw_@abv.bg", "Vladislav Kostadinov");
$mail->addAddress("elis.k@abv.bg", "Elena Beleva");

$mail->IsSMTP();
$mail->SMTPAuth = true;
$mail->SMTPSecure = "tls";
$mail->Host = "smtp.gmail.com";
$mail->Port = 587;
$mail->Username = 'vladicius@gmail.com';
$mail->Password = '088470701hateE';
$mail->From = $_POST['email'];
$mail->Subject  = utf8_decode($_POST['subject']);
$mail->FromName = "Vladislav";
$mail->isHTML(true);
$mail->setFrom('bgoutlaw_@abv.bg', 'vladicius@gmail.com');
$mail->Body = $_POST['message'];
$mail->AltBody = "This is the plain text version of the email content";


try {
    $mail->send();  

   
} catch (Exception $e) {
    
}

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<title>Helen's Art</title>
<link rel="stylesheet" href="olwcarousel/owl.carousel.min.css">
<link rel="stylesheet" href="olwcarousel/owl.theme.default.min.css">
<script src="js/jquery.js"></script>

<script src="olwcarousel/owl.carousel.min.js"></script>
<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<!-- Custom CSS -->
<link href="css/theme.css" rel="stylesheet">
<!-- Custom Fonts -->
<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700,400italic,700italic" rel="stylesheet" type="text/css">
<link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Courgette&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=PT+Sans&family=Parisienne&family=Source+Sans+Pro&family=Tangerine:wght@700&display=swap" rel="stylesheet">

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
<!-- Navigation -->
<div id="ggb">
<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
<div class="container">
	<div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
		<i class="fa fa-bars"></i>
		</button>
		<a class="logo navbar-brand page-scroll" href="index.php">
		Картини и Лирика</a>
	</div>

	<!-- Collect the nav links, forms, and other content for toggling -->
	<div class="collapse navbar-collapse navbar-right navbar-main-collapse">
		<ul class="nav navbar-nav">
			<li>
			<a class="link-1" href="index.php">Начална страница</a>
			</li>
			<li>
			<a class="link-1" href="poetry.php">Лирика</a>
			</li>
			<li>
			<a class="link-1" href="contact.php">Контакти и поръчки</a>
			</li>
		</ul>

	</div>
	<!-- /.navbar-collapse -->
</div>
<!-- /.container -->
</nav>
<!-- Intro Header -->


<header class="intro">
<div class="intro-body">

	<div class="container">
		
		<div class="row" style="margin-top:50px;">
			<div class="owl-carousel" style="margin-top:35px">
				<div> <img src="<?php echo IMG . 'IMG-0af727d2b3e8f74c683db8866e28679d-V.jpg'; ?>" style="width:166px;height:249px;" class="img-responsive sim" /> </div>
            	<div> <img src="<?php echo IMG . 'IMG-3b36a7e4c0e1aa8030d4d1f12cf0d8db-V.jpg'; ?>" style="width:166px;height:249px;" class="img-responsive sim" /> </div>
				<div> <img src="<?php echo IMG . 'IMG-653ee9458d31eaf78de37edacd681fb4-V.jpg'; ?>" style="width:166px;height:249px;" class="img-responsive sim" /> </div>
				<div> <img src="<?php echo IMG . 'IMG-8001fc2f06baf3cd61e831eac62ba86c-V.jpg'; ?>" style="width:166px;height:249px;" class="img-responsive sim" /> </div>
				<div> <img src="<?php echo IMG . 'IMG-165969a84f93378a9349f9815b8630a8-V.jpg'; ?>" style="width:166px;height:249px;" class="img-responsive sim" /> </div>
				<div> <img src="<?php echo IMG . 'IMG-366668d484d78c553bd04935bab0df62-V.jpg'; ?>" style="width:166px;height:249px;" class="img-responsive sim" /> </div>
				<div> <img src="<?php echo IMG . 'IMG-8246800e3988a4634865b85d14421025-V.jpg'; ?>" style="width:166px;height:249px;" class="img-responsive sim" /> </div>
				<div> <img src="<?php echo IMG . 'IMG-a3b494f86ff11060062ac8d2a4c87903-V.jpg'; ?>" style="width:166px;height:249px;" class="img-responsive sim" /> </div>
				<div> <img src="<?php echo IMG . 'IMG-a325c5434e5747a4b728d3aeaf5a3dae-V.jpg'; ?>" style="width:166px;height:249px;" class="img-responsive sim" /> </div>
				<div> <img src="<?php echo IMG . 'IMG-a62591e0379f9f121f3ba8287147ee98-V.jpg'; ?>" style="width:166px;height:249px;" class="img-responsive sim" /> </div>
				<div> <img src="<?php echo IMG . 'IMG-aa6c7ff82ee95dd6df3ee4a6bb068c5e-V.jpg'; ?>" style="width:166px;height:249px;" class="img-responsive sim" /> </div>
				<div> <img src="<?php echo IMG . 'IMG-acdb63b2457641581312a1b80bfac882-V.jpg'; ?>" style="width:166px;height:249px;" class="img-responsive sim" /> </div>
				<div> <img src="<?php echo IMG . 'IMG-c0e416a7657a7253a32e7e63749ce97a-V.jpg'; ?>" style="width:166px;height:249px;" class="img-responsive sim" /> </div>
				<div> <img src="<?php echo IMG . 'IMG-c7f6eb3482a76f539e8b5916530dc856-V.jpg'; ?>" style="width:166px;height:249px;" class="img-responsive sim" /> </div>
				<div> <img src="<?php echo IMG . 'IMG-0f49d02c539831430197a1dc7fdfe2f3-V.jpg'; ?>" style="width:166px;height:249px;" class="img-responsive sim" /> </div>
				<div> <img src="<?php echo IMG . 'IMG-1c9a3fe09bfd4976cdf53bcf858eb620-V.jpg'; ?>" style="width:166px;height:249px;" class="img-responsive sim" /> </div>
				<div> <img src="<?php echo IMG . 'IMG-0c2ea915fda488932bb46a051e11d90d-V.jpg'; ?>" style="width:166px;height:249px;" class="img-responsive sim" /> </div>
				<div> <img src="<?php echo IMG . 'IMG-2eeabe17b6882486fe83dc8b57550622-V.jpg'; ?>" style="width:166px;height:249px;" class="img-responsive sim" /> </div>
				<div> <img src="<?php echo IMG . 'IMG-2fbe0b278047ce5ec6401bda7e22e9bc-V.jpg'; ?>" style="width:166px;height:249px;" class="img-responsive sim" /> </div>
				<div> <img src="<?php echo IMG . 'IMG-3f157ea3e6544916db792d57fe733402-V.jpg'; ?>" style="width:166px;height:249px;" class="img-responsive sim" /> </div>
				<div> <img src="<?php echo IMG . 'IMG-4bf40dd1f985de200c9fee876fc78759-V.jpg'; ?>" style="width:166px;height:249px;" class="img-responsive sim" /> </div>
				<div> <img src="<?php echo IMG . 'IMG-5e9b452494823e5b7193710e7894924b-V.jpg'; ?>" style="width:166px;height:249px;" class="img-responsive sim" /> </div>
				<div> <img src="<?php echo IMG . 'IMG-7c1fdc5876db739952650350d72fd8f9-V.jpg'; ?>" style="width:166px;height:249px;" class="img-responsive sim" /> </div>
				<div> <img src="<?php echo IMG . 'IMG-7d834692f58d1aadc6d55237a0adb073-V.jpg'; ?>" style="width:166px;height:249px;" class="img-responsive sim" /> </div>
				<div> <img src="<?php echo IMG . 'IMG-7f05e00ca15cc44c514256f18dcdd9c4-V.jpg'; ?>" style="width:166px;height:249px;" class="img-responsive sim" /> </div>
				<div> <img src="<?php echo IMG . 'IMG-7f58da15a8ec84038e152f6d15ccf3e9-V.jpg'; ?>" style="width:166px;height:249px;" class="img-responsive sim" /> </div>
				<div> <img src="<?php echo IMG . 'IMG-8e6aa25e84d398e5206ca54f1d9a1555-V.jpg'; ?>" style="width:166px;height:249px;" class="img-responsive sim" /> </div>
				<div> <img src="<?php echo IMG . 'IMG-8e38bab8ad39a2e1e1e5440429faaf76-V.jpg'; ?>" style="width:166px;height:249px;" class="img-responsive sim" /> </div>
				<div> <img src="<?php echo IMG . 'IMG-19fc08bacd6cfd1fbb1b299b6f1b78bf-V.jpg'; ?>" style="width:166px;height:249px;" class="img-responsive sim" /> </div>
				<div> <img src="<?php echo IMG . 'IMG-38daf3b9c1986e1fec648a62dc47100d-V.jpg'; ?>" style="width:166px;height:249px;" class="img-responsive sim" /> </div>
				<div> <img src="<?php echo IMG . 'IMG-52a7df3a4c873fc9304103b426eb41e0-V.jpg'; ?>" style="width:166px;height:249px;" class="img-responsive sim" /> </div>
				<div> <img src="<?php echo IMG . 'IMG-96ce8601723a9a851419804ea8655ced-V.jpg'; ?>" style="width:166px;height:249px;" class="img-responsive sim" /> </div>
				<div> <img src="<?php echo IMG . 'IMG-516c3fdcb079d66499aa15682e05927a-V.jpg'; ?>" style="width:166px;height:249px;" class="img-responsive sim" /> </div>
				<div> <img src="<?php echo IMG . 'IMG-545d64cb9d514d3c6eb88ff8e7504950-V.jpg'; ?>" style="width:166px;height:249px;" class="img-responsive sim" /> </div>
				<div> <img src="<?php echo IMG . 'IMG-667c62940c7df1d7523051d84cfa1533-V.jpg'; ?>" style="width:166px;height:249px;" class="img-responsive sim" /> </div>
				<div> <img src="<?php echo IMG . 'IMG-774c8fe64560a65d99241ec8cde122cf-V.jpg'; ?>" style="width:166px;height:249px;" class="img-responsive sim" /> </div>
				<div> <img src="<?php echo IMG . 'IMG-5808a5dffa29940090a1f58641f59ec0-V.jpg'; ?>" style="width:166px;height:249px;" class="img-responsive sim" /> </div>
				<div> <img src="<?php echo IMG . 'IMG-7981f078facab35b1db1bc4e45061f1c-V.jpg'; ?>" style="width:166px;height:249px;" class="img-responsive sim" /> </div>
				<div> <img src="<?php echo IMG . 'IMG-30938ea058f170b22c256d90d61b447f-V.jpg'; ?>" style="width:166px;height:249px;" class="img-responsive sim" /> </div>
				<div> <img src="<?php echo IMG . 'IMG-41230bd091ed9905480a95ad9cd7f462-V.jpg'; ?>" style="width:166px;height:249px;" class="img-responsive sim" /> </div>
				<div> <img src="<?php echo IMG . 'IMG-835373b5eaf3a040adc42e20bd0c74aa-V.jpg'; ?>" style="width:166px;height:249px;" class="img-responsive sim" /> </div>
				<div> <img src="<?php echo IMG . 'IMG-6641480ff12c0344173f630702296b78-V.jpg'; ?>" style="width:166px;height:249px;" class="img-responsive sim" /> </div>
				<div> <img src="<?php echo IMG . 'IMG-a2c389947566366f332d81309a6853cf-V.jpg'; ?>" style="width:166px;height:249px;" class="img-responsive sim" /> </div>
				<div> <img src="<?php echo IMG . 'IMG-ad67507668198f57c66ea7a33ca411ed-V.jpg'; ?>" style="width:166px;height:249px;" class="img-responsive sim" /> </div>
				<div> <img src="<?php echo IMG . 'IMG-b2a29372114dedb13117d6741444c6b1-V.jpg'; ?>" style="width:166px;height:249px;" class="img-responsive sim" /> </div>
				<div> <img src="<?php echo IMG . 'IMG-c70196f86034510dc4b25fbb09410230-V.jpg'; ?>" style="width:166px;height:249px;" class="img-responsive sim" /> </div>
				<div> <img src="<?php echo IMG . 'IMG-cfeefd0774cd0e45ab656baafd03343f-V.jpg'; ?>" style="width:166px;height:249px;" class="img-responsive sim" /> </div>
				<div> <img src="<?php echo IMG . 'IMG-d2bc22bab5cf9abd01aa7a91cc78b9c4-V.jpg'; ?>" style="width:166px;height:249px;" class="img-responsive sim" /> </div>
				<div> <img src="<?php echo IMG . 'IMG-d6c3d1257d8f9d6065c6d592210b0aaa-V.jpg'; ?>" style="width:166px;height:249px;" class="img-responsive sim" /> </div>
				<div> <img src="<?php echo IMG . 'IMG-df73d3295e0c71fd4546b0aa567f31e6-V.jpg'; ?>" style="width:166px;height:249px;" class="img-responsive sim" /> </div>
				<div> <img src="<?php echo IMG . 'IMG-e551e5db99d49d3d761c911f702386be-V.jpg'; ?>" style="width:166px;height:249px;" class="img-responsive sim" /> </div>
				<div> <img src="<?php echo IMG . 'IMG-f877da9d55344178ba69fa92b7fcafc2-V.jpg'; ?>" style="width:166px;height:249px;" class="img-responsive sim" /> </div>
				<div> <img src="<?php echo IMG . 'IMG-f5817423cc70da684359900503b3bf33-V.jpg'; ?>" style="width:166px;height:249px;" class="img-responsive sim" /> </div>
			</div>
			<div style="padding-bottom:30px;" class="col-md-8 col-md-offset-2">

				<h1 class="brand-heading">Helen's World of Art</h1><?php echo "<br>" ?>
				<a href="#contact" class="btn btn-circle page-scroll">
				<i class="fa fa-angle-double-down animated"></i>
				</a>
			</div>
		</div>
	</div>
</div>
</div>
</header>
<!-- Contact Section --><div id="bck">
<section id="contact">
            <div class="container content-section">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="section-title">
                            <h2 class="fHeadings" style="margin-top:35px;">Контакти</h2>
                            <p style="margin-bottom:20px;"><b>Свържете се с нас</b> като ни изпратите <b>e-mail</b>.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-7 col-lg-offset-2" >
                        <form method="post" id="reused_form" name="contact_form" action="subscriberform.php" class="mb-4 mb-lg-0">
                            <div class="form-row">
                                <div class=" form-group">
                                    <input type="text" style="color: black;" name="name" class="form-control" id="name" placeholder="Вашето име" required/>
                                </div>
                                <div class="form-group">
                                    <input type="email" style=" color: black;" class="form-control" name="email" id="email" placeholder="Вашият e-mail" required/>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" style=" color: black;" name="subject" id="subject" placeholder="Тема"/>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" name="message" style=" color:black;" id="message" placeholder="Напишете съобщение" required></textarea>
                            </div>
							<div class="button_cont" align="center">
                            <button type="submit" style="color:black;" id="submits" class="btn btn-light">Изпрати</button>
							</div>
                        </form>
 
                    </div>

                  
                </div>
            </div>
        </section></div>
<!-- Footer -->
<footer>
<div class="container text-center">
<p class="credits">
		Copyright &copy; All rights reserved<br/>
		Helen's World of Art 2021
	</p>
</div>
</footer>
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
<!-- Plugin JavaScript -->
<script src="js/jquery.easing.min.js"></script>
<!-- Custom Theme JavaScript -->
<script src="js/theme.js"></script>
<script>
	$(document).ready(function(){
  $(".owl-carousel").owlCarousel();
});

var owl = $('.owl-carousel');
owl.owlCarousel({
    loop: true,
    margin:65,
    autoplay:true,
    autoplayTimeout:2000,
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
            nav:false,
            center: true
        },
        400:{
            items:2,
            nav:false,
            margin: 60
        },
        600:{
            items:3,
            nav:false
        },
        1000:{
            items:5,
            nav:false

        }
    }
})

$('.play').on('click',function(){
    owl.trigger('play.owl.autoplay',[1000])
})
$('.stop').on('click',function(){
    owl.trigger('stop.owl.autoplay')
})



</script>
<style>
  .simi {
    margin-left: 0;
    padding: 5px 10px;
    text-align: center;
    border: 2.4px double brown;
    background-color: burlywood;
  }
	

	
	#submits {
		color: black !important;
	text-transform: uppercase;
	text-decoration: none;
	background: slateblue;
	padding: 15px;
	border-radius: 5px;
	display: inline-block;
	border: none;
	transition: all 0.4s ease 0s;
	}

	#submits:hover {
	color: white !important;
	letter-spacing: 1px;
	-webkit-box-shadow: 0px 5px 40px -10px rgba(0,0,0,0.57);
	-moz-box-shadow: 0px 5px 40px -10px rgba(0,0,0,0.57);
	box-shadow: 5px 40px -10px rgba(0,0,0,0.57);
	transition: all 0.4s ease 0s;
}
	</style>
</body>
</html>
<style>

::placeholder {
	color:black !important;
} </style>
