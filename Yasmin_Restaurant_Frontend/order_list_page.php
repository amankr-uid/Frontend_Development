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
                <h1>Order List</h1>
                <p>Home / Dashboard / Order List</p>
            </div>
        </div>  
    </div>
    <!--SLIDER END-->
</header>


<style>
.oDetSec{
		
	}
	.oDetSec h4{
		font-size: 16px;
    font-weight: 600;
    color: #000; text-transform: capitalize;
	}
	.oDetSec p{
		margin-bottom: 0px;
    font-size: 13px;
    color: #333;
	}
	.removeOrdr{
		background: #FF404C;
    color: #fff;
    padding: 4px;
    font-size: 14px;
    border-radius: 50px;
    padding-left: 15px;
    padding-right: 15px;
    color: #fff !important;
	}
	
.table{
	    font-family: system-ui;
		font-weight: 600;
}	


.ordrHisActive{
border-right: 3px solid rgb(237, 90, 107) !important;
    background: linear-gradient(
90deg
, rgb(255, 255, 255), rgb(247, 235, 236)) !important;
}


</style>

<section style="padding-top:50px;">
	<div class="container">
		<div class="row">
			<div class="col-lg-3">
				<?php include("dashboard_side_bar_section.php"); ?>
			</div>
			<div class="col-lg-9 mainCountOuter">
				<div class="outerMenuSec">
					<h3>My Order</h3> <!--heading--->
					<hr>
			<div class="table-responsive">
<table class="table table-bordered">
	<thead style="background:#333; color:#fff; font-weight:bold;">
		<tr>
			<th>S No</th>
			<th>Order Detail</th>
			<th>Order Status</th>
			<th>Action</th>
		</tr>
	</thead>
	
	<tbody>
	<?php for($i=1; $i<=5; $i++){ ?>
		<tr>
			<td><?php echo $i; ?></td>
			<td>
				<div class="oDetSec">
					<h4>product title goes here</h4>
					<p><u>Price</u> : £17.95 &nbsp; &nbsp; | &nbsp; &nbsp; <u>Qty</u> : 3</p>
					<p><u>Total Amount</u> : £53.85</p>
				</div>
			</td>
			<td>
				Pending
			</td>
			<td>
				<a href="" class="removeOrdr">Remove</a>
			</td>
		</tr>
	<?php } ?>
	</tbody>
</table>		
					
			</div>			
					
				</div>
				
				
				
			</div>
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