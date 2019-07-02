<?php 
include "header.php";
include "sidebar.php";
?>

<div class="container area">
	<div class="row area1">
		<div class="col-lg-4">
			<h3>Welcome Admin!</h3>
			<div class="para" >
				<p>Some info!</p>
			</div>	
		</div>
		<div class="col-lg-8">
			<b>Check out all the companies that added to SalesBeat in the last 15 days! Start applying if highlights  your interest!</b>
			<p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
		</div>
	</div>
	<div  class="col-lg-12 col-md-6 div-line">
	<h3>Customers List</h3>
	</div>
	<div class="container air">
		<div class="row air1">
			<div class="col-lg-6 air2 " data-toggle="modal" data-target="#customer-details">
				<div class="row">
					<div class="col-lg-5 air3">
						<div class="avatar " id="avatar">
						</div>
						<div class="rating" id="rating">
							<img src="../assets/img/Rating stars.svg">
						</div>
						<div class="air-name">
							<h5> ICA A.B.</h5>
						</div>
					</div>
					<div class="col-lg-7 air4">
						<div class="air-name1">
							<h5>Name</h5>
							<p>ICA Supermarktets</p>
						</div>
						<div class="air-name1">
							<h5>Market</h5>
							<p>USA, Mexico, Colombia, Spain, Germany + 2 more</p>
						</div>
						<div class="air-name1">
							<h5>Buyer</h5>
							<p>Bjorn Karlsson</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-6 air-right" data-toggle="modal" data-target="#customer-details">
				<div class="row">
					<div class="col-lg-5 air3">
						<div class="avatar " id="avatar">
						</div>
						<div class="rating" id="rating">
							<img src="../assets/img/Rating stars.svg">
						</div>
						<div class="air-name">
							<h5> ICA A.B.</h5>
						</div>
					</div>
					<div class="col-lg-7 air4">
						<div class="air-name1">
							<h5>Name</h5>
							<p>ICA Supermarktets</p>
						</div>
						<div class="air-name1">
							<h5>Market</h5>
							<p>USA, Mexico, Colombia, Spain, Germany + 2 more</p>
						</div>
						<div class="air-name1">
							<h5>Buyer</h5>
							<p>Bjorn Karlsson</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-6 air-right" data-toggle="modal" data-target="#customer-details">
				<div class="row">
					<div class="col-lg-5 air3">
						<div class="avatar " id="avatar">
						</div>
						<div class="rating" id="rating">
							<img src="../assets/img/Rating stars.svg">
						</div>
						<div class="air-name">
							<h5> ICA A.B.</h5>
						</div>
					</div>
					<div class="col-lg-7 air4">
						<div class="air-name1">
							<h5>Name</h5>
							<p>ICA Supermarktets</p>
						</div>
						<div class="air-name1">
							<h5>Market</h5>
							<p>USA, Mexico, Colombia, Spain, Germany + 2 more</p>
						</div>
						<div class="air-name1">
							<h5>Buyer</h5>
							<p>Bjorn Karlsson</p>
						</div>
					</div>
				</div>
			</div>

			<div class="brands-comp">
				<p>Add a Customer</p>
			</div>
		</div>
	</div>

	<!-- modal -->
	<div class="modal fade" id="customer-details">
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
							<div class="col-md-4">
								<div class="field-name">
									<h5>Market:</h5>
									<p>USA, Mexico, Colombia, Spain, Germany + 2 more</p>
								</div>
								<div class="field-name">
									<h5>Segment:</h5>
									<p>Non Alcoholic</p>
								</div>
								<div class="field-name">
									<h5>Channel(s):</h5>
									<p>Distributer</p>
								</div>
								<div class="field-name">
									<h5>Industry(s):</h5>
									<p>Food & Beverage</p>
								</div>
								<div class="field-name">
									<h5>Contact Person</h5>
									<p>Bjorn Karlsson</p>
								</div>
								<div class="field-name">
									<h5>Address</h5>
									<p>Street:<br>
										City:<br>
										Post Code:<br>
										Country:</p>
								</div>
							</div>
							<div class="col-md-4">
								<div class="field-name">
									<h5>Revenue:</h5>
									<p>50+</p>
								</div>
								<div class="field-name">
									<h5>Employees:</h5>
									<p>1000+</p>
								</div>
								<div class="field-name">
									<h5>Listed</h5>
									<p>Yes</p>
								</div>
								<div class="field-name">
									<h5>Mission</h5>
									<p>Type your mission here</p>
								</div>
								<div class="field-name">
									<h5>Description</h5>
									<p>Company Description</p>
								</div>
								<div class="field-name">
									<h5>Registration</h5>
									<p>2000/1/1</p>
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
