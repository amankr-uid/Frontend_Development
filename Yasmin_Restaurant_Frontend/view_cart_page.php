<!DOCTYPE html>
<html lang="en-US" class="no-js">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <link rel="shortcut icon" href="">
    <link rel="stylesheet" href="fonts/css/all.min.css">
    <link rel="stylesheet" href="css/lib/bootstrap.min.css">
    <link rel='stylesheet' href="css/lib/flickity.min.css">
    <link rel='stylesheet' href="css/lib/magnific-popup.min.css">
    <link rel="stylesheet" href="css/lib/owl.carousel.min.css">
    <link rel="stylesheet" href="css/lib/slick.min.css">
    <link rel="stylesheet" href="css/lib/aos.min.css">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/stylesheet.css">
    <link rel="stylesheet" href="css/responsive.css">
    <script src="js/modernizr-custom.js"></script>    
</head>

<body>

     <?php include("header_section.php"); ?>

    <!--SLIDER START-->
    <div class="pages-hero">
        <div class="container">
            <div class="pages-title">
                <h1>View Cart</h1>
                <p>Home / View Cart</p>
            </div>
        </div>  
    </div>
    <!--SLIDER END-->
</header>

<style>
.mainmSec{
	//background: #F1F3F4;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-shadow: 0 10px 15px 0 rgb(3 35 68 / 10%); margin-bottom: 10px;
	
}
.mdSec h6{
	font-weight:500; margin-bottom:10px;
}

.mdSec p{
	margin-bottom:5px;
}

.pimgsec{
	float:left; margin-right:10px; width:15%;
}

.pimgsec img{
	width:100%; border-radius:8px;
}

.RemoveCart{
	float:right;
}

.RemoveCart a{
	background: #FF404C;
    color: #fff !important; text-decoration:none;
    padding: 4px;
    border-radius: 5px;
    padding-left: 15px;
    padding-right: 10px;
    font-family: system-ui;
    font-size: 14px;
}

.mdSec{
	float:left; 
}
.mainmSec{
	//background: #F1F3F4;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-shadow: 0 8px 8px 0 rgb(0 17 33 / 3%); margin-bottom: 10px;
	
}
.mdSec h6{
	font-weight:500; margin-bottom:10px;
}

.mdSec p{
	margin-bottom:5px;
}

.txtQty{
	border: 1px solid #ccc;
    border-radius: 0px;
    width: 50px;
    height: 26px;
    padding: 3px;
    margin-right: 5px;
}

.totalAmntSec{
		    float: right;	
margin-top: 15px;
    margin-bottom: 15px;			
}
.totalAmntSec h5{
	font-size:18px;
}
.cnShopSec{
	margin-bottom: 30px;
}
.cnShopSec ul {
	    margin: 0px;
    padding: 0px;
}
.cnShopSec ul li{
	list-style: none;
    width: 50%;
    float: left;
    text-align: center;
    line-height: 50px;
    background: #333;
    
}
.cnShopSec ul li a{
	color: #fff;
    font-weight: 600;
    
}


</style>


<section style="padding-top:50px;">
	<div class="container">
		<div class="row">
			<div class="col-lg-2"></div>
			<div class="col-lg-8">
				
				<?php for($i=0; $i<=2; $i++){ ?>				
				<div class="viewCartSec">
					<div class="mainmSec">
					
						
						
						<div class="mdSec">
							<h6>Sauvignon Blanc Wonder Creek (Chile)</h6>
							<p>
								<input type="number" value="1" class="txtQty"> Amount : £17.95
							</p>
						</div>
						
						<div class="RemoveCart">
							<a href="">Remove</a>
						</div>
						<div style="clear:both;"></div>
					</div>
				</div>
				<?php } ?>
				
				<div class="totalAmntSec">
					<h5>Total Amount : £178.95</h5>
				</div>
				<div style="clear:both;"></div>
				<div class="cnShopSec">
					<ul>
						<li style="background:#46C756; border-right:5px solid #fff;">
							<a href="menu_online.php">Order More Item</a>
						</li>
						<li style="background:#FF404C;">
							<a href="checkout_page.php">Proceed to Checkout</a>
						</li>
						<div style="clear:both;"></div>
					</ul>
				</div>
				
			</div>
			<div class="col-lg-2"></div>
		</div>
	</div>	
<section>
 



    <!-- CONTENT END -->

   <?php include("footer_section.php");  ?>

    <!-- JAVASCRIPTS -->
    <script src="js/lib/jquery-3.5.1.min.js"></script>
    <script src="js/lib/bootstrap.min.js"></script>
    <script src="js/lib/plugins.js"></script>
    <script src="js/lib/nav.fixed.top.js"></script>
    <script src="js/main.js"></script>
    <!-- JAVASCRIPTS END -->


</body>


</html>