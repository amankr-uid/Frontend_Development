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
                <h1>Login/ SignIn</h1>
                <p>Home / Create New Account</p>
            </div>
        </div>  
    </div>
    <!--SLIDER END-->
	
	
</header>

    <!-- CONTENT START -->
<style>
.nav-tabs-login {
    right: 0px;
}


.nav-link-login.active, .nav-link-login:hover {
    background: #FF404C;
    color: #fff;
}
.nav-link-login {
    color: #FF404C;
    padding: 4px 9px;
    border: 1px solid #FF404C;
    font-size: 15px;
    margin: 4px -1px 0 0px;
    vertical-align: text-top;
}



.formOuterSec{
	
	background:#EDF1F4; border-radius:10px; border:1px solid #ccc;
	box-shadow: 0px 5px 5px -3px rgb(0 0 0 / 20%), 0px 8px 10px -3px rgb(0 0 0 / 14%), 0px 3px 10px -3px rgb(0 0 0 / 12%);
	
}

.backgroundClsTopBot{
	background: #fff;
    padding-top: 50px;
    padding-bottom: 50px;
}

.formOuterSec label{
	font-family: system-ui;
    color: #000;
    margin-bottom: 10px;
}
.formOuterSec input{
	border-radius:0px;
}

.btnlogsin{
	background:#000; color:#fff;
}
</style>
<section class="backgroundClsTopBot">
	<div class="container">
		<div class="row">
			<div class="col-lg-3"></div>
			<!--start-->
				<div class="col-lg-6">
                <div class="formOuterSec">
                    <form class="position-relative" action="my_profile_page.php">
                        <ul class="mt-4 mr-4 nav nav-tabs-login float-right position-absolute" role="tablist">
                            <li>
                                <a class="nav-link-login active" data-toggle="tab" href="#login-form" role="tab" aria-selected="true"><i class="icofont-ui-lock"></i> LOGIN</a>
                            </li>
                            <li>
                                <a class="nav-link-login" data-toggle="tab" href="#register" role="tab" aria-selected="false"><i class="icofont icofont-pencil"></i> REGISTER</a>
                            </li>
                        </ul>
                        <div class="login-modal-right p-4">
                            <div class="tab-content">
                                <div class="tab-pane active" id="login-form" role="tabpanel">
                                    <h5 class="heading-design-h5 text-dark">LOGIN</h5>
                                    <fieldset class="form-group mt-4">
                                        <label>Enter Email/Mobile number</label>
                                        <input type="text" class="form-control" placeholder="+91 123 456 7890" id="txt_l_email" name="txt_l_email">
                                    </fieldset>
                                    <fieldset class="form-group">
                                        <label>Enter Password</label>
                                        <input type="password" class="form-control" id="txt_l_pass" name="txt_l_pass" placeholder="********">
                                    </fieldset>
                                    <fieldset class="form-group">
                                        <button type="button" class="btn btn-lg  btn-block btnlogsin">Enter to your account</button>
                                    </fieldset>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                                        <label class="custom-control-label" for="customCheck1">Remember me</label>
                                    </div>
                                    
                                </div>
                                <div class="tab-pane" id="register" role="tabpanel">
                                    <h5 class="heading-design-h5 text-dark">REGISTER</h5>
                                    
									<fieldset class="form-group mt-4">
                                        <label>Full Name *</label>
                                        <input type="text" id="txt_fl_name" name="txt_fl_name" class="form-control" placeholder="Enter Full Name*">
                                    </fieldset>
									<fieldset class="form-group">
                                        <label>Email Address *</label>
                                        <input type="text" id="txt_email_add" name="txt_email_add" class="form-control" placeholder="Enter Email Address *">
                                    </fieldset>
									<fieldset class="form-group">
                                        <label>Mobile Number *</label>
                                        <input type="text" id="txt_mo_no" name="txt_mo_no" class="form-control" placeholder="Enter Mobile Number *">
                                    </fieldset>
                                    <fieldset class="form-group">
                                        <label>Enter Password</label>
                                        <input type="password" id="txt_pass" name="txt_pass" class="form-control" placeholder="********">
                                    </fieldset>
                                    
                                    <fieldset class="form-group">
                                        <button type="button" class="btn btn-lg btn-block btnlogsin">Create Your Account</button>
                                    </fieldset>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="termsCondiChk">
                                        <label class="custom-control-label" for="termsCondiChk">I Agree with <a href="#">Term and Conditions</a></label>
                                    </div>
									
									
									
                                    
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
			<!--end--->
			<div class="col-lg-3"></div>
		</div>
	</div>
	
</section>
	
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
	$(".btnlogsin").on("click",function(e){
		window.location.replace("my_profile_page.php");		
	})
	</script>
</body>


</html>