
<style>



.mSideBar{
	
}

.mSideBar ul{
	
}
.mSideBar ul li{
	
    border-bottom: 1px solid #ccc; line-height: 50px; cursor:pointer;
}

.mSideBar ul li a{
	    font-size: 16px;
    color: #000;
    font-weight: 500;
}



.button00{
	background: #FF404C;
    border: none;
    /* font-size: 35px; */
    width: 30px;
    color: #fff;
    font-weight: bold;
    height: 30px;
    /* margin-left: -2px; */
    border-radius: 4px; font-family: system-ui;
}
.inputDesign{
	width: 45px; height: 30px; font-weight:bold; font-family: system-ui;
    border-radius: 0px;
    border: 1px solid #B5B5B5;     border-radius: 4px;
}

.removeCartBtn{
	   background:#CD1047;
    color: #fff !important;
    font-family: system-ui;
    padding: 5px;
    font-size: 13px;
    font-weight: 600;
    padding-left: 10px;
    padding-right: 10px;
    border-radius: 4px; margin-left: 3px;
}
.addToCartBtn{
	    background:#46C756;
    color: #fff !important;
    font-family: system-ui;
    padding: 5px;
    font-size: 13px;
    font-weight: 600;
    padding-left: 10px;
    padding-right: 10px;
    border-radius: 4px; margin-left: 3px;
}
.mCartAdd{
		float:right;					 width:22%;
}

.lastCart{
	float:right;
}
.mdSec{
	float:left; width:60%;
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
.outerMenuSec{
	border-left: 1px solid #ccc;
	padding-left:15px;
}
.outerMenuSec h5{
	margin-bottom: 15px;
    color: #333;
    font-weight: 600;
}

.noClr{
	color:#FF404C;
}

.pimgsec{
	float:left; margin-right:10px; width:15%;
}

.pimgsec img{
	width:100%; border-radius:8px;
}

.activeLargeSec{
	display:block;
}

.inActiveLargeSec{
	display:none;
}


.ProfileSection{
	text-align:center; margin-bottom:30px;
}

.ProfileSection img{
	border-radius:50%; box-shadow: 0 10px 15px 0 rgb(3 35 68 / 10%);
}

.ProfileSection h4{
	font-weight: 600;
    font-size: 16px;
    border: 1px solid #ccc;
    border-radius: 50px;
    line-height: 35px;
    margin-top: 25px;
    color: #000;
}

.control-label{
	font-family: system-ui;
    color: #333;
}	
.border-form-control{
	    color: #000;
    border-radius: 0px;
}	


</style>
<div class="mSideBar">
				<div class="ProfileSection">
					<div class="pImGsec"><img src="images/defaut img.jpg"></div>
					<div class="pNameSec"><h4>Prateek Chandrakar</h4></div>
					<div style="clear:both;"></div>
				</div>
				
				
					<ul>
					
						<li class="menuClsName profileActive">
							<a href="my_profile_page.php">My Profile</a>
						</li>
						<li  class="menuClsName accSetActive">
							<a href="account_setting_page.php">Account Setting</a>
						</li>
						<li  class="menuClsName ordrHisActive">
							<a href="order_list_page.php">Order History</a>
						</li>
						<li  class="menuClsName ordrHisActive">
							<a href="view_cart_page.php">My Cart</a>
						</li>
						<li  class="menuClsName">
							<a href="javascript:void(0);">Log Out</a>
						</li>
						
					</ul>
					<br><br>
				</div>