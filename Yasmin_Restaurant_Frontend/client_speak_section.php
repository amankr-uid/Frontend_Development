
<!---client speak--->

<style>

.carousel1 {
	
}
.carousel1 .carousel-item {
	color: #999;
	overflow: hidden;
    
	font-size: 13px;
}
.carousel1 .media {
	position: relative;
	padding: 0 0 0 20px;
	margin-left: 20px;
}
.carousel1 .media img {
	width: 75px;
	height: 75px;
	display: block;
	border-radius: 50%; margin-right:13px;
	box-shadow: 0 2px 4px rgba(0,0,0,0.2);
    border: 2px solid #fff;
}
.carousel1 .testimonial {
    color: #fff;
    position: relative;
    background: #fff;
    padding: 15px;
    margin: 0 0 20px 20px;
    border: 1px solid #727272;
    /* border-radius: 10px; */
    border-top-left-radius: 8px;
    border-top-right-radius: 8px;
	
	box-shadow: 0px 5px 5px -3px rgb(0 0 0 / 20%), 0px 8px 10px -3px rgb(0 0 0 / 14%), 0px 3px 10px -3px rgb(0 0 0 / 12%);
	
	
}
.carousel1 .testimonial::before, .carousel1 .testimonial::after {
	content: "";
	display: inline-block;
	position: absolute;
	left: -1px;
	bottom: -20px;
}
.carousel1 .testimonial::before {
    width: 20px;
    height: 20px;
	background: #9b9b9b;
	box-shadow: inset 12px 0 13px rgba(0,0,0,0.5);
}
.carousel1 .testimonial::after {
    width: 0;
    height: 0;
    border: 10px solid transparent;
    border-bottom-color: #fff;
    border-left-color: #fff;
}
.carousel1 .carousel-item .row > div:first-child .testimonial {
	margin: 0 20px 20px 0;
}
.carousel1 .carousel-item .row > div:first-child .media {
	margin-left: 0;
}
.carousel1 .testimonial p {
	text-indent: 40px;
    line-height: 24px;
    margin: 0;
    color: #000;
    text-align: left;
    
}
.carousel1 .testimonial p::before {
	content: "\201D";
  	font-family: Arial,sans-serif;
    color: #333;
    font-weight: bold;
    font-size: 68px;
    line-height: 70px;
    position: absolute;
    left: -25px;
    top: 0;
}
.carousel1 .overview {
	//padding: 3px 0 0 15px;
	    margin-top: 27px;
    font-size: 18px;
}
.carousel1 .overview .details {
	padding: 5px 0 8px;
}
.carousel1 .overview b {
	text-transform: capitalize;
	color: #000;
}
<!--.carousel-control-prev, .carousel-control-next {
	width: 30px;
	height: 30px;
    background: #666;
    text-shadow: none;
	top: 4px;
}
.carousel-control-prev i, .carousel-control-next i {
	font-size: 16px;
}
.carousel-control-prev {
	left: auto;
	right: 40px;
}
.carousel-control-next {
	left: auto;
}--->
.carousel-indicators1 {
	bottom: -80px;
}
.carousel-indicators1 li, .carousel-indicators1 li.active {
	width: 17px;
    height: 17px;
	border-radius: 0;
	margin: 1px 5px;
  	box-sizing: border-box;
}
.carousel-indicators1 li {	
    background: #e2e2e2;
    border: 4px solid #fff;
}
.carousel-indicators1 li.active {
	color: #fff;
    background: #ff5555;
    border: 5px double;    
}
.star-rating li {
	padding: 0 2px;
}
.star-rating i {
	font-size: 14px;
	color: #ffdc12;
}


.ourWorkBg{
	padding-top:35px;
	padding-bottom:50px;
}
</style>

<section class="ourWorkBg">
	<div class="container">
		<div class="row">
			<div class="col-lg-12" align="center">	
				
				<h5 class="subtitle">Testimonials</h5>
				<h2 class=""><b>What Our Client Says</u></b></h2><br>				
			</div>
			

			
<!---start--->
<div class="col-sm-12">			
			<div id="myCarousel" class="carousel1 slide" data-ride="carousel">
				
				<!-- Carousel indicators -->
				<!--<ol class="carousel-indicators1">
					<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
					<li data-target="#myCarousel" data-slide-to="1"></li>
					<li data-target="#myCarousel" data-slide-to="2"></li>
				</ol> --->  
				<!-- Wrapper for carousel items -->
				<div class="carousel-inner">
					<div class="carousel-item active">
						<div class="row">
							<div class="col-sm-6">
								<div class="testimonial">
									<p class="abP">A small interment restaurant, didn't booked but that wasn't a problem. Waiter was polite and efficient. Wanted starter and mains to arrive athe the same time. Food looked and smelt amazing. Tasted even better, my Lamb Dansack was awesome, melt in your mouth meat. Other dishes were great also. Not too expensive either.</p>
								</div>
								<div class="media">
									<img src="images/defaut img.jpg" alt="">
									<div class="media-body">
										<div class="overview">
											<div class="name"><b>Southampton, United Kingdom</b></div>											
										</div>										
									</div>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="testimonial">
									<p class="abP">Hadn't visited for the last year and somehow remembered this evening and most pleased that I did as the quality was top drawer</p>
								</div>
								<div class="media">
									<img src="images/defaut img.jpg" alt="">
									<div class="media-body">
										<div class="overview">
											<div class="name"><b>Danny917</b></div>
											
										</div>										
									</div>
								</div>
							</div>
						</div>			
					</div>
					<div class="carousel-item">
						<div class="row">
							<div class="col-sm-6">
								<div class="testimonial">
									<p class="abP">We ate here tonight. The food was exemplary, and the service outstanding. Lamb was very tender, samosas delicious and chicken tikka masala melts in the mouth. Thank you</p>
								</div>
								<div class="media">
									<img src="images/defaut img.jpg" alt="">
									<div class="media-body">
										<div class="overview">
											<div class="name"><b>Big Travellers</b></div>
											
										</div>										
									</div>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="testimonial">
									<p class="abP">So so delicious, the fish tikka especially was honestly the best meal we've had at an Indian restaurant, the naans were obviously freshly cooked and perfect, and the other dishes were amazing too. Very lucky to have such an amazing restaurant in this tiny village!</p>
								</div>
								<div class="media">
									<img src="images/defaut img.jpg" alt="">
									<div class="media-body">
										<div class="overview">
											<div class="name"><b>Emily</b></div>
											
										</div>										
									</div>
								</div>
							</div>
						</div>			
					</div>
					<div class="carousel-item">
						<div class="row">
							<div class="col-sm-6">
								<div class="testimonial">
									<p class="abP">We had our second delivery from Yasmin last night. Absolutely delicious food, not oily at all, beautifully cooked. We had mixed grill, dal makhani, aloo gobhi. This is definitely our go to for Indian food. Can’t wait to have dinner there when everything reopens.</p>
								</div>
								<div class="media">
									<img src="images/defaut img.jpg" alt="">
									<div class="media-body">
										<div class="overview">
											<div class="name"><b>Michelle</b></div>
											
										</div>										
									</div>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="testimonial">
									<p class="abP">We popped in to order a delivery for later in the evening. Food was incredible and service excellent - on time and friendly. All the family loved their meal - we have 11 & 13 yr old boys and the spice levels were perfect.</p>
								</div>
								<div class="media">
									<div class="media-left d-flex mr-3">
										<img src="images/defaut img.jpg" alt="">										
									</div>
									<div class="media-body">
										<div class="overview">
											<div class="name"><b>Anthony</b></div>
											
										</div>										
									</div>
								</div>
							</div>
						</div>			
					</div>
				</div>
				<!-- Carousel controls -->
				<!--<a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
					<i class="fa fa-chevron-left"></i>
				</a>
				<a class="carousel-control-next" href="#myCarousel" data-slide="next">
					<i class="fa fa-chevron-right"></i>
				</a>-->
			</div>
		</div>
<!---start--->			
			
		</div>
	</div>
</section>
<!---client speak--->  
