<?php 
include "header.php";
include "sidebar.php";
?>

<div class="container area">
	<div class="row area1">
		<div class="col-lg-4">
		<h3>Welcome Company!</h3>
		<div class="para" >
			<p>Your profile is getting attention!</p>
		</div>	
	</div>
	<div class="col-lg-8">
		<b>There are so many freelancers very interested in working with your company’s products. Have a look to your newsfeed and see who fits with your organisation!</b>
		<br>
		<p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
	</div>
</div>
<div  class="col-lg-12 col-md-6 div-line">
	<h4>Brands</h4>
</div>
<div class="container air">
	<div class="row air1">
		<div class="col-lg-6 air2 " data-toggle="modal" data-target="#brand-details">
			<div class="row">
				<div class="col-lg-5 admin-brands">
					<div class="brands-avatar">
					</div>
					<!-- <div class="air-name">
						<h5> Alexander Lorca</h5>
					</div> -->
				</div>
				<div class="col-lg-7 air4">
					<div class="air-name1">
						<h5>Market</h5>
						<p>USA, Mexico, Colombia, Spain, Germany + 2 more</p>
					</div>
					<div class="air-name1">
						<h5>Segment:</h5>
						<p>BWS</p>
					</div>
					<div class="air-name1">
						<h5>Channel:</h5>
						<p>Retail & Grocery</p>
						<a href="#">See more…</a>
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-6 air-right" data-toggle="modal" data-target="#brand-details">
			<div class="row">
				<div class="col-lg-5 admin-brands">
					<div class="brands-avatar">
						
					</div>
					<!-- <div class="air-name">
						<h5> Alexander Lorca</h5>
					</div> -->
				</div>
				<div class="col-lg-7 air4">
					<div class="air-name1">
						<h5>Market</h5>
						<p>USA, Mexico, Colombia, Spain, Germany + 2 more</p>
					</div>
					<div class="air-name1">
						<h5>Segment:</h5>
						<p>BWS</p>
					</div>
					<div class="air-name1">
						<h5>Channel:</h5>
						<p>Retail & Grocery</p>
						<a href="#">See more…</a>
					</div>
				</div>
			</div>
		</div>
		<div class="brands-comp">
			<p>Add a Company</p>
		</div>
	</div>
</div>
</div>

	<!-- brand pending request Modal -->
	<div class="modal fade" id="brand-pending">
	    <div class="modal-dialog modal-lg modal-dialog-centered">
	      <div class="modal-content modal1">

			<div class="modal-body">
			    <button type="button" class="close" data-dismiss="modal">×</button>
			    <div class="container request-me">
			    	<div class="row rectangle">
						<div class="row col-md-6 accept-reject">
							<div class="pretty p-icon p-curve">
								<input type="checkbox">
								<div class="state">
									<i class="icon mdi mdi-check"></i> 
									<label>Approved</label>
								</div>
							</div>
						</div>
						<div class="row col-md-6 accept-reject">
							<div class="pretty p-icon p-curve">
								<input type="checkbox">
								<div class="state">
									<i class="icon mdi mdi-check"></i> 
									<label>Not Approved</label>
								</div>
							</div>
						</div>
					</div>
				</div>
			    	<div class="row brand-request-me1">
						<div class="col-md-9 request-me2">
							<div class="row">
								<div class="col-md-5 request-me3">
									<div class="brands-avatar" id="brands-avatar">
									</div>
									<!-- <div id="s-rating" class="text-center">
										<img src="../assets/img/Rating stars.svg">
									</div> -->
									<div class="air-name">
										<h5> Brand A</h5>
									</div>
									<!-- <div class="text-center pt-3">
										<button type="button" class="btn btn-primary">LinkedIn profile</button>
									</div> -->
								</div>
								 
							</div>
						</div>
						<div class="text-center modal-edit">
								<p class="btn btn-light m-0">Edit</p>		
							</div>
					</div>			
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade" id="brand-details">
		<div class="modal-dialog modal-lg modal-dialog-centered">
		    <div class="modal-content modal1">
		      	<div class="modal-body">
			    	<button type="button" class="close" data-dismiss="modal">×</button>
			    	<div class="container request-me">
			    		<div class="row rectangle">
							<div class="col-md-6 accept-reject text-center">
								<div class="pretty p-icon p-round">
					        		<input type="radio" name="icon">
					        		<div class="state p-primary-o">
						            <i class="icon mdi mdi-check"></i>
						            <label>Approved</label>
						        </div>
						    </div>
						</div>
						<div class="col-md-6 accept-reject">
							<div class="pretty p-icon p-round">
						        <input type="radio" name="icon" />
						         <div class="state p-primary-o">
						            <i class="icon mdi mdi-close"></i>
						            <label>Not Approved</label>
						        </div>
						    </div>	
						</div>
					</div>
				</div>
		    	<div class="row brand-request-me1">
					<div class="col-md-12 request-me2">
						<div class="row admin-index">
							<div class="col-md-4 modal-request-me3">
								<div class="company-madal-avatar" id="">
								</div>
								<!-- <div id="s-rating" class="text-center">
									<img src="../assets/img/Rating stars.svg">
								</div>
								<div class="air-name">
									<h5> Alexander Lorca</h5>
								</div> -->
								<!-- <div class="text-center pt-3">
									<button type="button" class="btn btn-primary">LinkedIn profile</button>
								</div> -->
							</div>
							<div class="col-md-7">
								<div class="field-name">
									<h5>Market:</h5>
									<p>USA, Mexico, Colombia, Spain, Germany + 2 more</p>
								</div>
								<div class="field-name">
									<h5>Segment:</h5>
									<p>BWS</p>
								</div>
								<div class="field-name">
									<h5>Channel(s):</h5>
									<p>Retail & Grocery</p>
								</div>
								<div class="field-name">
									<h5>Industry(s):</h5>
									<p>Food & Beverage</p>
								</div>
								<div class="field-name">
									<h5>Previous brands</h5>
									<p>Type here the brands you worked with</p>
								</div>
								<div class="field-name">
									<h5>Experience</h5>
									<p>A brief description about yourself and your experience</p>
								</div>
							</div>
						</div>
					</div>
					<div class="text-center modal-edit">
						<p class="btn btn-light m-0">Edit</p>		
					</div>
				</div>			
			</div>
		</div>
	</div>
</div>


