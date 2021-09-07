<?php 
require_once "dbconnect.php";

define("IMG", "https://helens-art.epizy.com/img/");
define('URLBASE', 'https://helens-art.epizy.com/');



      
               ?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
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

				<h1 class="brand-heading">Helen's World of Art</h1> <?php echo "<br>"?>
				<a href="#helenPoetry" class="btn btn-circle page-scroll">
				<i class="fa fa-angle-double-down animated"></i>
				</a>
			</div>
		</div>
	</div>
</div>
</div>
</header>

<?php
$id = $_GET['id'];

$sql = "SELECT poetry.* FROM poetry WHERE poetry.ID = $id";

         $result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
while($row = mysqli_fetch_assoc($result)) {

?>
<div id="poetry-back" style="background-image: url('../img/13.png');">
<section id="page-sample">
<div style="margin-bottom: 20px;">
<div id="poetryID" style="margin:0 auto; width:50%; background-image: url('../img/14.png');">
<div id="helenPoetry" style="white-space:pre-wrap">
<h1 class="poetryTitle fHeadings" style="font-size:26px;padding-top:25px; text-align:center;"><?php echo $row['Title']; ?></h1>
<div id="poetryInfo"style="justify-content:center;">
<p class="poetryContent" style="word-wrap: break-word;font-size:26px;padding-top:25px; text-align:center;overflow:hidden;"><?php echo $row['Content'] ?></p> <?php }}?>
</div> 
<p id='btns' style="text-align:center;white-space:normal;">
				<a href="/contact.php#contact" class="btnghost2"><i class="fa fa-envelope"></i>Свържи се с нас</a> 
				<i id="or" style="font-size:12px;margin-right:3px;"> или </i> 
				<a id="secButtn" href="/poetry.php#helenFirst" class="btnghost2"><i class="fa fa-pencil-square-o"></i>Върни се назад</a>
			</p>

</div></div></div>







<!-- jQuery -->
<footer>
<div class="container text-center" id="footerCont">
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
    loop:false,
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
@media only screen and (min-width: 768px) {
  #poetryID {
    border-top: 1.5px solid black;
  }
}

@media only screen and (max-width: 850px) {
  #or {
    display: block;
  }
   .btnghost2 {
    margin-top: 0 !important;
  }
}

</style>