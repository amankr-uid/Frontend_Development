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
                <h1>Our Menu</h1>
                <p>Home / Our Menu</p>
            </div>
        </div>  
    </div>
    <!--SLIDER END-->
</header>


<style>
.menuActive{
	border-right: 3px solid rgb(237, 90, 107) !important;
    background: linear-gradient(
90deg
, rgb(255, 255, 255), rgb(247, 235, 236)) !important;
}


.mSideBar{
	margin-bottom:40px;
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
		float:right;
}

.lastCart{
	float:right;
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
	//float:left; margin-right:10px; width:15%;
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
</style>


<section style="padding-top:50px;">
	<div class="container">
		<div class="row">
			<div class="col-lg-3">
				<div class="mSideBar">
					<ul>
					
						<li id="smenuid_1" class="menuClsName menuActive">
							<a href="javascript:void(0);">Wine & Drinks Menu</a>
						</li>
						<li id="smenuid_2" class="menuClsName">
							<a href="javascript:void(0);">Sit In Menu</a>
						</li>
						<li id="smenuid_3" class="menuClsName">
							<a href="javascript:void(0);">Take Away Menu</a>
						</li>
						<li id="smenuid_4" class="menuClsName">
							<a href="javascript:void(0);">Dessert Menu</a>
						</li>
						
					</ul>
				</div>
			</div>
			<div class="col-lg-9 mainCountOuter">
				<div class="outerMenuSec activeLargeSec" id="structid_1">
					<h3>Wine & Drinks Menu</h3> <!--heading--->
					<hr>
					<h5><span class="noClr">01</span> White Wines</h5> <!--sub heading--->
					
					<div class="mainmSec">
					
						<!--<div class="pimgsec">
							<img src="images/productDefImg.png">
						</div>-->
						
						<div class="mdSec">
							<h6>Sauvignon Blanc Wonder Creek (Chile)</h6>
							<p>£17.95</p>
						</div>
						
						<div class="mCartAdd">
							<div class="lastCart">
								<button class="button00">+</button>
								<input type="number" class="input inputDesign" value="1" min="1" />
								<button class="button00">-</button>							
								<a href="#" class="addToCartBtn">Add</a>	
								<!--<a href="#" class="removeCartBtn">Remove</a>	-->
							</div>
						</div>
						<div style="clear:both;"></div>
					</div>
					
					
					<div class="mainmSec">
					
						
						
						<div class="mdSec">
							<h6>Pinot Grigio III Bandiera (Italy)</h6>
							<p>£19.95</p>
						</div>
						
						<div class="mCartAdd">
						<div class="lastCart">
							<button class="button00">+</button>
							<input type="number" class="input inputDesign" value="1" min="1" />
							<button class="button00">-</button>							
							<a href="#" class="addToCartBtn">Add</a>	
							<!--<a href="#" class="removeCartBtn">Remove</a>	-->
						</div>
						</div>
						<div style="clear:both;"></div>
					</div>
					
					
					
					<div class="mainmSec">
					
						
						
						<div class="mdSec">
							<h6>Chardonnay Flarestone (Australia)</h6>
							<p>£19.95</p>
						</div>
						
						<div class="mCartAdd">
						<div class="lastCart">
							<button class="button00">+</button>
							<input type="number" class="input inputDesign" value="1" min="1" />
							<button class="button00">-</button>							
							<a href="#" class="addToCartBtn">Add</a>	
							<!--<a href="#" class="removeCartBtn">Remove</a>	-->
						</div></div>
						<div style="clear:both;"></div>
					</div>
					
					
					<hr>
					<h5><span class="noClr">02</span> Rose Wines</h5> <!--sub heading--->
					
					<div class="mainmSec">
					
						
						
						<div class="mdSec">
							<h6>Vina Arroba Tempranillo Rosado (Spain)</h6>
							<p>£17.95</p>
						</div>
						
						<div class="mCartAdd">
						<div class="lastCart">
							<button class="button00">+</button>
							<input type="number" class="input inputDesign" value="1" min="1" />
							<button class="button00">-</button>							
							<a href="#" class="addToCartBtn">Add</a>	
							<!--<a href="#" class="removeCartBtn">Remove</a>	-->
						</div></div>
						<div style="clear:both;"></div>
					</div>
					
					
					<div class="mainmSec">
					
						
						
						
						<div class="mdSec">
							<h6>Pinot Grigio Rose III Caggio (Italy)</h6>
							<p>£19.95</p>
						</div>
						
						<div class="mCartAdd">
						<div class="lastCart">
							<button class="button00">+</button>
							<input type="number" class="input inputDesign" value="1" min="1" />
							<button class="button00">-</button>							
							<a href="#" class="addToCartBtn">Add</a>	
							<!--<a href="#" class="removeCartBtn">Remove</a>	-->
						</div></div>
						<div style="clear:both;"></div>
					</div>
					
					
					
					
					<hr>
					<h5><span class="noClr">03</span> Red Wines</h5> <!--sub heading--->
					
					<div class="mainmSec">
					
						
						
						<div class="mdSec">
							<h6>Merlot Wonder Creek (Chile)</h6>
							<p>£17.95</p>
						</div>
						
						<div class="mCartAdd">
						<div class="lastCart">
							<button class="button00">+</button>
							<input type="number" class="input inputDesign" value="1" min="1" />
							<button class="button00">-</button>							
							<a href="#" class="addToCartBtn">Add</a>	
							<!--<a href="#" class="removeCartBtn">Remove</a>	-->
						</div></div>
						<div style="clear:both;"></div>
					</div>
					
					
					<div class="mainmSec">
					
						
						<div class="mdSec">
							<h6>Shiraz Flarestone (Australia)</h6>
							<p>£19.95</p>
						</div>
						
						<div class="mCartAdd">
						<div class="lastCart">
							<button class="button00">+</button>
							<input type="number" class="input inputDesign" value="1" min="1" />
							<button class="button00">-</button>							
							<a href="#" class="addToCartBtn">Add</a>	
							<!--<a href="#" class="removeCartBtn">Remove</a>	-->
						</div></div>
						<div style="clear:both;"></div>
					</div>
					
					<div class="mainmSec">
						
						
						<div class="mdSec">
							<h6>Malbec Valle De Ciebo (Argentina)</h6>
							<p>£19.95</p>
						</div>
						
						<div class="mCartAdd">
						<div class="lastCart">
							<button class="button00">+</button>
							<input type="number" class="input inputDesign" value="1" min="1" />
							<button class="button00">-</button>							
							<a href="#" class="addToCartBtn">Add</a>	
							<!--<a href="#" class="removeCartBtn">Remove</a>	-->
						</div></div>
						<div style="clear:both;"></div>
					</div>
					
					
					
					<hr>
					<h5><span class="noClr">04</span>  Sparkling Wines & Champagnes</h5> <!--sub heading--->
					
					<div class="mainmSec">
					
						
						<div class="mdSec">
							<h6>Prosecco Terre Di Guilio (Italy)</h6>
							<p>£19.95</p>
						</div>
						
						<div class="mCartAdd">
						<div class="lastCart">
							<button class="button00">+</button>
							<input type="number" class="input inputDesign" value="1" min="1" />
							<button class="button00">-</button>							
							<a href="#" class="addToCartBtn">Add</a>	
							<!--<a href="#" class="removeCartBtn">Remove</a>	-->
						</div></div>
						<div style="clear:both;"></div>
					</div>
					
					
					<div class="mainmSec">
					
						
						
						<div class="mdSec">
							<h6>Charles Vercey Brut (France)</h6>
							<p>£29.95</p>
						</div>
						
						<div class="mCartAdd">
						<div class="lastCart">
							<button class="button00">+</button>
							<input type="number" class="input inputDesign" value="1" min="1" />
							<button class="button00">-</button>							
							<a href="#" class="addToCartBtn">Add</a>	
							<!--<a href="#" class="removeCartBtn">Remove</a>	-->
						</div></div>
						<div style="clear:both;"></div>
					</div>
					
					<div class="mainmSec">
						
						
						<div class="mdSec">
							<h6>Moet & Chandon Brut Imperial (France)</h6>
							<p>£49.95</p>
						</div>
						
						<div class="mCartAdd">
						<div class="lastCart">
							<button class="button00">+</button>
							<input type="number" class="input inputDesign" value="1" min="1" />
							<button class="button00">-</button>							
							<a href="#" class="addToCartBtn">Add</a>	
							<!--<a href="#" class="removeCartBtn">Remove</a>	-->
						</div></div>
						<div style="clear:both;"></div>
					</div>
					
					
					
					
					
				</div>
				
				
				<!--struct 2--->
				<div class="outerMenuSec inActiveLargeSec" id="structid_2">
					<h3>Sit In Menu</h3> <!--heading--->
					<hr>
					<h5>Starters<br>Non Vegetarian</h5> <!--sub heading--->
					
					<div class="mainmSec">
					
						<div class="mdSec">
							<h6>Chicken Tikka (M) (MU)</h6>
							<p>£4.25</p>
							<p>Chargrilled and succulent chicken breast pieces matured in a delicately spiced marinade.</p>
						</div>
						
						<div class="mCartAdd">
						<div class="lastCart">
							<button class="button00">+</button>
							<input type="number" class="input inputDesign" value="1" min="1" />
							<button class="button00">-</button>							
							<a href="#" class="addToCartBtn">Add</a>	
							<!--<a href="#" class="removeCartBtn">Remove</a>	-->
							</div>
						</div>
						<div style="clear:both;"></div>
					</div>
					
					
					<div class="mainmSec">
					
						
						
						<div class="mdSec">
							<h6>Lamb Seekh Kebab (E)</h6>
							<p>£4.50</p>
							<p>Ground lamb with aromatic herbs and spices, grilled in the tandoor.</p>
						</div>
						
						<div class="mCartAdd">
						<div class="lastCart">
							<button class="button00">+</button>
							<input type="number" class="input inputDesign" value="1" min="1" />
							<button class="button00">-</button>							
							<a href="#" class="addToCartBtn">Add</a>	
							<!--<a href="#" class="removeCartBtn">Remove</a>	-->
							</div>
						</div>
						<div style="clear:both;"></div>
					</div>
					
					
					<div class="mainmSec">
					
						
						
						<div class="mdSec">
							<h6>Curry Leaf Calamari (F) (MU)</h6>
							<p>£5.25</p>
							<p>Curls of Squid sautéed with crushed garlic, curry leaves and assorted pepper and onions</p>
						</div>
						
						<div class="mCartAdd">
						<div class="lastCart">
							<button class="button00">+</button>
							<input type="number" class="input inputDesign" value="1" min="1" />
							<button class="button00">-</button>							
							<a href="#" class="addToCartBtn">Add</a>	
							<!--<a href="#" class="removeCartBtn">Remove</a>	-->
							</div>
						</div>
						<div style="clear:both;"></div>
					</div>
					
					
					<div class="mainmSec">
					
						
						<div class="mdSec">
							<h6>Punjabi Lamb Samosa (G)</h6>
							<p>£4.75</p>
							<p>Crispy home made triangular pastry filled with lamb mince and peas.</p>
						</div>
						
						<div class="mCartAdd">
						<div class="lastCart">
							<button class="button00">+</button>
							<input type="number" class="input inputDesign" value="1" min="1" />
							<button class="button00">-</button>							
							<a href="#" class="addToCartBtn">Add</a>	
							<!--<a href="#" class="removeCartBtn">Remove</a>	-->
							</div>
						</div>
						<div style="clear:both;"></div>
					</div>
					
					
					<div class="mainmSec">
					
						
						<div class="mdSec">
							<h6>Murgh Kalimirch (MU)</h6>
							<p>£4.75</p>
							<p>Tender supreme of chicken marinated in yogurt, crushed black pepper, mustrad seeds and curry leaves.</p>
						</div>
						
						<div class="mCartAdd">
						<div class="lastCart">
							<button class="button00">+</button>
							<input type="number" class="input inputDesign" value="1" min="1" />
							<button class="button00">-</button>							
							<a href="#" class="addToCartBtn">Add</a>	
							<!--<a href="#" class="removeCartBtn">Remove</a>	-->
							</div>
						</div>
						<div style="clear:both;"></div>
					</div>
					
					
					
					<div class="mainmSec">
					
						
						
						<div class="mdSec">
							<h6>Fish Amritsari (Maccchi) (F) (G)</h6>
							<p>£5.25</p>
							<p>Crispy fish deep fried in Gran flour batter with blend of spices and ginger.</p>
						</div>
						
						<div class="mCartAdd">
						<div class="lastCart">
							<button class="button00">+</button>
							<input type="number" class="input inputDesign" value="1" min="1" />
							<button class="button00">-</button>							
							<a href="#" class="addToCartBtn">Add</a>	
							<!--<a href="#" class="removeCartBtn">Remove</a>	-->
							</div>
						</div>
						<div style="clear:both;"></div>
					</div>
					
					
					
					<div class="mainmSec">
					
						
						
						<div class="mdSec">
							<h6>Prawn Poori (CR) (G)</h6>
							<p>£4.95</p>
							<p>Spiced prawns in rich tangy sauce served on a poori.</p>
						</div>
						
						<div class="mCartAdd">
						<div class="lastCart">
							<button class="button00">+</button>
							<input type="number" class="input inputDesign" value="1" min="1" />
							<button class="button00">-</button>							
							<a href="#" class="addToCartBtn">Add</a>	
							<!--<a href="#" class="removeCartBtn">Remove</a>	-->
							</div>
						</div>
						<div style="clear:both;"></div>
					</div>
					
					
					
					
					
					
					
					
					
				</div>
				<!--struct 2--->
				
				
				<!--struct 3--->
				<div class="outerMenuSec inActiveLargeSec" id="structid_3">
					<h3>Take Away Menu</h3> <!--heading--->
					<hr>
					<h5><span class="noClr">01</span> White Wines</h5> <!--sub heading--->
					
					<div class="mainmSec">
					
						
						
						<div class="mdSec">
							<h6>Sauvignon Blanc Wonder Creek (Chile)</h6>
							<p>£17.95</p>
						</div>
						
						<div class="mCartAdd">
						<div class="lastCart">
							<button class="button00">+</button>
							<input type="number" class="input inputDesign" value="1" min="1" />
							<button class="button00">-</button>							
							<a href="#" class="addToCartBtn">Add</a>	
							<!--<a href="#" class="removeCartBtn">Remove</a>	-->
						</div></div>
						<div style="clear:both;"></div>
					</div>
					
					
				</div>
				<!--struct 3--->
				
				
				<!--struct 4--->
				<div class="outerMenuSec inActiveLargeSec" id="structid_4">
					<h3>Dessert Menu</h3> <!--heading--->
					<hr>
					<h5><span class="noClr">01</span> White Wines</h5> <!--sub heading--->
					
					<div class="mainmSec">
					
						
						<div class="mdSec">
							<h6>Sauvignon Blanc Wonder Creek (Chile)</h6>
							<p>£17.95</p>
						</div>
						
						<div class="mCartAdd">
						<div class="lastCart">
							<button class="button00">+</button>
							<input type="number" class="input inputDesign" value="1" min="1" />
							<button class="button00">-</button>							
							<a href="#" class="addToCartBtn">Add</a>	
							<!--<a href="#" class="removeCartBtn">Remove</a>	-->
						</div></div>
						<div style="clear:both;"></div>
					</div>
					
					
				</div>
				<!--struct 4--->
				
			</div>
		</div>
	</div>
<section>
  
<!---bottom section-->
<style>
.fixedCartSec{
	position: fixed; display:none;
    bottom: 0px; z-index:100;
    width: 100%;
    background: #46C756;
    color: #fff;
    /* line-height: 38px; */
    padding-top: 12px;
    padding-bottom: 12px;
}
.fixedCartSec h5{
	float: left;
    margin-bottom: 0px;
    color: #fff;
    font-size: 15px;
    margin-top: 0px;
}
.vCbtn{
	float: right;
    background: #fff;
    color: #000  !important;
    border: none;
    padding: 2px;
    font-family: system-ui;
    font-weight: 500;
    padding-left: 25px;
    padding-right: 25px;
    border-radius: 50px; margin-right:10px;
}
.vCCbtn{
	float: right;
    background: #000;
    color: #fff !important;
    border: none;
    padding: 2px;
    font-family: system-ui;
    font-weight: 500;
    padding-left: 25px;
    padding-right: 25px;
    border-radius: 50px;
}

.conViCr{
	float:right;
}

.sbCls{
	float:right; margin-right:20px;
}
</style>
<section class="fixedCartSec">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-xs-12">				
				<h5>Total No Of Item (10)</h5>
			</div>
			<div class="col-lg-6 col-xs-12">				
				
				<div class="conViCr"><a href="checkout_page.php" class="vCCbtn">Continue</a>
				<a href="view_cart_page.php" class="vCbtn">View Cart</a>
				</div>
				<div class="sbCls"><h5>Subtotal : £1000</h5></div>
				<div style="clear:both;"></div>
			</div>
		</div>
	</div>
</section>
<!---bottom section-->	


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
$(function() {
 $(".button00").on("click", function() {
   var $button = $(this);
   var $parent = $button.parent(); 
   var oldValue = $parent.find('.input').val();

   if ($button.text() == "+") {
      var newVal = parseFloat(oldValue) + 1;
    } else {
       // Don't allow decrementing below zero
      if (oldValue > 1) {
        var newVal = parseFloat(oldValue) - 1;
        } else {
        newVal = 1;
      }
      }
    $parent.find('a.add-to-cart').attr('data-quantity', newVal);
    $parent.find('.input').val(newVal);
 });
});


<!--menu coxde-->

$(".mSideBar li").on("click",function(e){
	//alert($(this).attr("id"));
	var mop=$(this).attr("id");
	var curMName=$(this).attr("id");
	
	
	
	//alert(curMName);
	curMName=curMName.split("_");
	curMName=curMName[1];
	
	var finalclickid="structid_"+curMName;
	
	$("#"+finalclickid).addClass("activeLargeSec");
	$("#"+finalclickid).removeClass("inActiveLargeSec");
	
	$("#"+mop).addClass("menuActive");
	
	
	for(i=0; i<$(".mainCountOuter .outerMenuSec").length; i++){
		//alert($(".mainCountOuter .outerMenuSec:eq('"+i+"')").attr("id"));
		var loopid=$(".mainCountOuter .outerMenuSec:eq('"+i+"')").attr("id");
		
		var loopid001=$(".mSideBar .menuClsName:eq('"+i+"')").attr("id");
		 
		 
		if(mop==loopid001){			
			
			//$("#smenuid_"+curMName).addClass("menuActive");
			
			$("#"+loopid001).addClass("menuActive");
			$("#"+loopid001).removeClass("menuInActive");
		}
		else{
			//$("#smenuid_"+curMName).removeClass("menuActive");
			$("#"+loopid001).removeClass("menuActive");
			$("#"+loopid001).addClass("menuInActive");
		}
		
		
		if(finalclickid==loopid){			
			
			//$("#smenuid_"+curMName).addClass("menuActive");
			
			$("#"+loopid).addClass("activeLargeSec");
			$("#"+loopid).removeClass("inActiveLargeSec");
		}
		else{
			//$("#smenuid_"+curMName).removeClass("menuActive");
			$("#"+loopid).removeClass("activeLargeSec");
			$("#"+loopid).addClass("inActiveLargeSec");
		}
	}
	
	
	//structid_1
	//$("#structid_"+curMName).addClass("activeLargeSec");	
});


$(".addToCartBtn").on("click",function(e){
	$(".fixedCartSec").css("display","block");
	
});

</script>	
	

</body>


</html>