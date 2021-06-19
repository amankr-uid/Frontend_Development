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
                <h1>Account Setting</h1>
                <p>Home / Dashboard / Account Setting</p>
            </div>
        </div>  
    </div>
    <!--SLIDER END-->
</header>

<style>
.addLayout{
	border: 1px solid #ccc;
    border-radius: 4px;
    padding: 10px;
    font-family: system-ui;
}
.addType{
	    margin-bottom: 6px;
}
.addType span{
	background: #333;
    padding: 3px;
    padding-left: 10px;
    padding-right: 10px;
    color: #fff;
    border-radius: 4px;
    font-size: 13px;
}
.fullAdd{
	color: #333;
    font-weight: 600;
    margin-bottom: 5px;
    border-bottom: 1px solid #ccc;
    padding-bottom: 7px;
}
.zipPin{
	color:#333;
}
.edBtn{
	margin-top: 15px;
	
}
.editBtnCls{
	background:#46C756; color:#fff !important; text-decoration:none; padding:4px;  padding-left:10px; padding-right:10px;
	border-radius:4px; margin-right:8px; 
    font-size: 14px;

}
.deleteBtnCls{
	background:#FF404C; color:#fff !important; text-decoration:none; padding:4px;  padding-left:10px; padding-right:10px;
	border-radius:4px; 
    font-size: 14px;

}

.addNewAddCls a{
	
}

.addNewAddCls{
	border: 1px solid #ccc;
    border-radius: 4px;
    padding: 10px; cursor:pointer;
    font-family: system-ui; font-weight:600;
    /* line-height: 53px; */
    background: #F1F3F4;
}
.addNewAddCls h4{
	    line-height: 149px;
    text-align: center;
}

.outerMenuSec{
	font-weight:600;
}

.accSetActive{
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
				<div class="outerMenuSec activeLargeSec" id="structid_1">
					<h3>Account Setting</h3> <!--heading--->
					<hr>
			
					<form>
<div class="row">
<div class="col-sm-6">
<div class="form-group">
<label class="control-label">Email Address <span class="required">*</span></label>
<input class="form-control border-form-control" id="cus_name" placeholder="Enter Email ID" type="text">
</div>
</div>
<div class="col-sm-6">
<div class="form-group">
<label class="control-label">Old Password <span class="required">*</span></label>
<input class="form-control border-form-control" id="cus_mobile"  placeholder="******" type="password">
</div>
</div>
</div>
<div class="row">
<div class="col-sm-6">
<div class="form-group">
<label class="control-label">New Password <span class="required">*</span></label>
<input class="form-control border-form-control " id="cus_email"  placeholder="*******" type="password" >
</div>
</div>
<div class="col-sm-6">
<div class="form-group">
<label class="control-label">Confirm Password <span class="required">*</span></label>
<input id="cus_zip" class="form-control border-form-control"  placeholder="*****" type="password">
</div>
</div>
</div>



<div class="row">
<div class="col-sm-12 text-right"><br>
<button type="button" class="btn btn-outline-danger"> Cancel </button>
<button type="button" class="update_btn btn btn-primary"> Save Changes </button>
<div class="msg" style="color:green;font-weight:bold;"></div><br>
</div>
</div>
</form>
					
					
					
					
				</div>
				
				
				
			</div>
		</div>
	</div>
<section>
 

<!--popup--->
<style>
.modalFrmBody{
	font-weight: 600;
    font-family: system-ui;
    color: #000;
}
.modalFrmBody label{
		margin-bottom:5px;
}

.mbTxt{
	margin-bottom:15px;
}
</style>


<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        
        <h4 class="modal-title">Add Delivery Address</h4>
      </div>
      <div class="modal-body modalFrmBody">
        <form>
			<label>Zipcode/ Pincode</label>
			<input type="text" class="form-control mbTxt" placeholder="Enter Zipcode/ Pincode">
			<label>Complete Address</label>
			<input type="text" class="form-control mbTxt" placeholder="Enter Zipcode/ Pincode">
			<label>Select Address Type</label>
			<select class="form-control mbTxt">
				<option value="">Work</option>
				<option value="">Home</option>
				<option value="">Other</option>
			</select>
			<button type="button" class="btn btn-sm btn-success">Submit</button>
		</form>
      </div>
     
    </div>

  </div>
</div>
<!--popup---> 

    <!-- CONTENT END -->

   <?php include("footer_section.php");  ?>

    <!-- JAVASCRIPTS -->
    <script src="js/lib/jquery-3.5.1.min.js"></script>
    <script src="js/lib/bootstrap.min.js"></script>
    <script src="js/lib/plugins.js"></script>
    <script src="js/lib/nav.fixed.top.js"></script>
    <script src="js/main.js"></script>
    <!-- JAVASCRIPTS END -->

<script>
$(".addNewAddCls").on("click",function(e){
		$("#myModal").modal("show");
});

$(".editBtnCls").on("click",function(e){
		$("#myModal").modal("show");
});


</script>
</body>


</html>