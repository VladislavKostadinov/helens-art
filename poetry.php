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
				<a href="#helenFirst" style="border:2px solid white !important;" class="btn btn-circle page-scroll">
				<i class="fa fa-angle-double-down animated" style="padding-top:10.5px;font-size:20px;"></i>
				</a>
			</div>
		</div>
	</div>
</div>
</div>
</header>
<!-- Page Sample Section -->
<div id="ggb">
<section id="page-sample">

<div id="bookD" style="margin:0 auto;">
<div id="helenFirst">
<div id="bookInfo">
<img class="book-img" style="width:259px; height:400px; margin-left:90px;" src="<?php echo IMG . 'IMG-a1ad8d8ef097e101ea8093ebb090e8f5-V.jpg'; ?>" />
<div id="poetryMain">
<h1 class="book fHeadings" style="font-size:26px;padding-top:25px; text-align:center;"><?php echo "Нелюбов"; ?></h1>
<p class="bookDescript" style="word-wrap: break-word;margin-right:90px; margin-bottom:15px; margin-left:35px;font-size:22px;padding-top:25px; padding-bottom:25px; border:1px solid black; text-align:center;overflow:hidden; 	background-image: url(../img/14.png);"><?php echo "Любовта е уют за душата. Вглъбение, покой и хармония на чувствата. Любовта е една от магиите, които се случват в живота ни. Любовта не е просто чувство, а собствен начин на съществуване, избор за начин
на живот. Любовта е аромат с нотка на екзистенциалност, защото е избор, страст, начин на съществуване. Всеки човек е изправен пред правото и отговорността да избира сам, като по този начин формира същността си. Нима любовта не е правилен избор?"; ?></p>
<div class="button_cont" style="margin-bottom:10px;" align="center">
<a href="#poetries" id="poetryShow">Съдържание</a>
							</div>
</div> </div>


						</div>
<!-- <div id="helenSecond">					
<div id="bookInfo">
<img class="book-img" style="width:259px; height:400px; margin-left:90px;" src="<?php echo IMG . 'IMG-a1ad8d8ef097e101ea8093ebb090e8f5-V.jpg'; ?>" />
<div id="poetryMain">
<h1 class="book fHeadings" style="font-size:26px;padding-top:25px; text-align:center;"><?php echo "Стихосбирки"; ?></h1>
<p class="bookDescript" style="word-wrap: break-word;margin-right:90px;margin-left:35px;font-size:26px;padding-top:25px; text-align:center;overflow:hidden;"><?php echo "Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem Lorem"; ?></p>
</div>
</div> </div> -->


<div  id="poetry1">

<div id="poetries" class="container content-section text-left">
	<div style="margin-bottom:50px;"></div>
<table class="table table-bordered caption-top">
		<caption class="fHeadings" style="font-size:24px; color:white;">Стихосбирка</caption>
		<thead>
		  <tr>
		  <th scope="col" style="vertical-align: middle; width:13%; color:ghost;">№</th>
			<th scope="col" style="vertical-align: middle; width:74%;color:ghost;">Заглавиe</th>
			<th scope="col" style="vertical-align: middle; width:13%;color:ghost;">Действие</th>
		  </tr>
		</thead>
		<tbody>
		
		  <tr>
			  <?php $sql = "SELECT poetry.* FROM poetry";

         $result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
while($row = mysqli_fetch_assoc($result)) {


?>	
		  <td scope="row"><?php echo $row['ID']; ?></td>
			<td scope="row"><?php echo $row['Title']; ?></td>
			<td>
			<a id="hoverPrev" href="<?php echo URLBASE; ?>/read-poetry.php?id=<?php echo $row['ID']; ?>#helenPoetry" class="btn btn-sm">Прочети</a>
			</td>
			
		  </tr>
		  <?php }}?>
		</tbody>

	  </table> 
	  <div  id="poetry2">
<div class="button_cont2" align="center">
<a href="#helenFirst" id="poetryHide">Затвори</a>
</div>
</div> 
	 </div></div>

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
    
    loop:true,
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

$(document).ready(function(){
    $("#poetries").hide();
    $("#poetryShow").on("click",function(){
        $("#poetries").show();
        $("#helenFirst").hide();
		$("#helenSecond").hide();

    });
    $("#poetryHide").on("click",function(){
        $("#helenFirst").show();
		$("#helenSecond").show();
        $("#poetries").hide();
    });
});


</script>
</body>
</html>
<style>
#bookInfo {
	padding-top:77px;
	padding-bottom:77px;
    display:flex;
}
#hoverPrev:hover {
color: black !important; 
}
@media only screen and (max-width: 1000px) {
  #bookInfo {
    display:flex !important;
    flex-wrap: wrap;
    justify-content: center;  }

    .bookDescript {
        margin: 0 auto !important;
        text-align: center;
    }
    #poetryMain {
        margin-right: 0 !important;
    }
    .book-img {
        margin-left: 0 !important;
    }
}
	
#bookDescript {
    background-image: url(../img/13.png) !important;
}

#poetry1 {
	padding: 0;
}

#helenSecond {
	margin-top:90px;
}

tr:hover {
    background-color: slateblue !important;
}

#bookD {
	padding-bottom:35px;
}
#poetries {
	clear:both;
	width: 33%;
}
#poetryShow, #poetryHide {
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

	#poetryShow:hover, #poetryHide:hover {
	color: white !important;
	letter-spacing: 1px;
	-webkit-box-shadow: 0px 5px 40px -10px rgba(0,0,0,0.57);
	-moz-box-shadow: 0px 5px 40px -10px rgba(0,0,0,0.57);
	box-shadow: 5px 40px -10px rgba(0,0,0,0.57);
	transition: all 0.4s ease 0s;
}
div#poetry1 div#poetries{display:none;}
div#poetry1 div#poetries:target {display:block;}

@media only screen and (max-width: 510px) {
  #poetries {
  width: 50% !important;
  }
}

</style>