
<!--book table--->

<style>
.form_Section {
	background:#212739; border-radius:10px; border:2px solid #fff;
	
	   
    z-index: 0;
    bottom: 30px;
    /* margin: 0 5%; */
  
    text-align: center;
    /* margin: auto; */
    margin: 0 3.5%;
	
	    box-shadow: 0 10px 15px 0 rgb(3 35 68 / 10%);
}

.form_Section ul {
}

.form_Section ul li{
float:left; width:50%; margin-bottom:5px; padding:3px;
}

.frmCls{
	border-radius:0px; border:none
}

.subBtnFinal{
background: #fff;
    color: #000;
    padding: 10px;
    border: none;
    padding-left: 40px;
    padding-right: 40px;
    border-radius: 20px;
    font-size: 17px;
    font-family: system-ui;
    font-weight: 600;
    margin-top: 15px;
    text-align: center; 
	}
	
	

</style>

<section style="margin-top: 50px;">
	<div class="container">
		<div class="row">
			
			<div class="col-lg-12">
			
				<div>
					<div><img src="images/reservation.jpg" style="border-radius: 10px;" class="bookTabImg"></div>
					<div class="form_Section">
					
					<h4 class="batab">Book a Table</h4>
					
						<ul>
							<li>
								<input type="text" class="form-control frmCls" placeholder="Enter Name">
							</li>
							<li>
								<input type="text" class="form-control frmCls" placeholder="Email Address">
							</li>
							<li>
								<input type="text" class="form-control frmCls" placeholder="Mobile Number">
							</li>
							<li>
								<select class="form-control frmCls" >
									<option value="">Number of Guests</option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
									<option value="6">6</option>
									<option value="7">7</option>
									<option value="8">8</option>
									<option value="8">9</option>
									<option value="10">10</option>
									<option value="more">More than 10</option>
								</select>
							</li>
							<li>
								<input type="date" class="form-control frmCls">
							</li>
							<li>
								<select class="form-control frmCls">
                                                    <option value="">Time</option>
                                                    <option value="1">Breakfast</option>
                                                    <option value="2">Lunch</option>
                                                    <option value="3">Dinner</option>
                                                </select>
							</li>
							
							<div style="clear:both;"></div>
							
						</ul>
						
						
			
			<div align="center">
				<button class="subBtnFinal">Booking Submit</button>
			</div>
              
			  
			  
					</div>
					 
				</div>
			
			
			
			</div>			
			
		</div>
	</div>
</section>

<!--book table--->	
