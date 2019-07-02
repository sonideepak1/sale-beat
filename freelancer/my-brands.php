<?php 
include "header.php";
include "sidebar.php";
?>
<div class="container area">
	<div class="row area1">
		<div class="col-lg-4">
			<h3>Welcome Alexander!</h3>
			<div class="para" >
				<p>Your profile is getting attention!</p>
			</div>	
		</div>
		<div class="col-lg-8">
			<b>Check out all the companies that added to SalesBeat in the last 15 days! Start applying if highlights  your interest!</b>
			<p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
		</div>
	</div>
	<div  class="col-lg-12 col-md-6 div-line">
		<h3>My Brand List</h3>
	</div>
	<div class="container air">
		<div class="row air1">
			<div class="col-lg-6 air2 " data-toggle="modal" data-target="#req-rec-modal">
				<div class="trapezoid tp-color">
					<p class="m-0">Request Received</p>
				</div>
				<div class="row">
					<div class="col-lg-5 air3">
						<div class="avatar " id="avatar">
						</div>
						<div class="air-name">
							<h5> Brand A</h5>
						</div>
					</div>
					<div class="col-lg-7 air4">
						<div class="air-name1">
							<h5>Name</h5>
							<p>Sprite</p>
						</div>
						<div class="air-name1">
							<h5>Market</h5>
							<p>USA, Mexico, Colombia, Spain, Germany + 2 more</p>
						</div>
						<div class="air-name1">
							<h5>Segment:</h5>
							<p>Non-Alcoholic</p>
						</div>
						<div class="air-name1">
							<h5>Channel:</h5>
							<p>Retail & Grocery</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-6 air-right" data-toggle="modal" data-target="#req-match-modal">
				<div class="trapezoid tp-color2">
						<p class="m-0">Request Matched</p>
					</div>
					<div class="row">
						<div class="col-lg-5 air3">
							<div class="avatar " id="avatar">
							</div>
							<div class="air-name">
								<h5> Brand B</h5>
							</div>
							</div>
							<div class="col-lg-7 air4">
								<div class="air-name1">
									<h5>Name</h5>
									<p>Sprite</p>
								</div>
								<div class="air-name1">
									<h5>Market</h5>
									<p>USA, Mexico, Colombia, Spain, Germany + 2 more</p>
								</div>
								<div class="air-name1">
									<h5>Segment:</h5>
									<p>Non-Alcoholic</p>
								</div>
								<div class="air-name1">
									<h5>Channel:</h5>
									<p>Retail & Grocery</p>
								</div>
							</div>
						</div>
			</div>
			<div class="col-lg-6 air-right" data-toggle="modal" data-target="#req-sent-modal">
							<div class="trapezoid tp-color1">
								<p class="m-0">Request Sent</p>
							</div>
							<div class="row">
								<div class="col-lg-5 air3">
									<div class="avatar " id="avatar">
									</div>
									<div class="air-name">
										<h5> Brand C</h5>
									</div>
								</div>
								<div class="col-lg-7 air4">
									<div class="air-name1">
										<h5>Name</h5>
										<p>Sprite</p>
									</div>
									<div class="air-name1">
										<h5>Market</h5>
										<p>USA, Mexico, Colombia, Spain, Germany + 2 more</p>
									</div>
									<div class="air-name1">
										<h5>Segment:</h5>
										<p>Non-Alcoholic</p>
									</div>
									<div class="air-name1">
										<h5>Channel:</h5>
										<p>Retail & Grocery</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>


	<!-- modals -->
	<!-- Request Received Modal -->
		<div class="modal fade" id="req-rec-modal">
		    <div class="modal-dialog modal-lg modal-dialog-centered">
		      <div class="modal-content modal1">

				<div class="modal-body">
				    <button type="button" class="close" data-dismiss="modal">×</button>
				    <div class="container request-me">
				    	<div class="row request-me1">
							<div class="col-md-9 request-me2">
								<div class="row admin-index">
									<div class="col-md-5 request-me3">
										<div class="avatar-img " id="avatar-img">
										</div>
										<div class="air-name">
											<h5> Alexander Lorca</h5>
										</div>
									</div>
									<div class="col-md-7 company-req">
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
										<div class=" float-right">
											<button type="button" class="btn btn-primary">LinkedIn profile</button>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-3">
								<div class="coldrinks-img">
							        <img src="../assets/img/img3.jpg">
							        <p>Brand A</p>
							    </div>
								<div class="coldrinks-img">
						          <img src="../assets/img/img3.jpg">
						          <p>Brand B</p>
						        </div>
								<div class="coldrinks-img">
						          <img src="../assets/img/img3.jpg">
						          <p>Brand C</p>
						        </div>
							</div>
						</div>
						<div class="row rectangle">
						<div class="col-md-9 btn-success border">
						<P>Requested you on April the 3th, 2019</P>		
						</div>
						<div class="row col-md-3 pl-4 accept-reject">
							<button type="button" class="btn btn-success">Accept</button>
							&nbsp;
							<button type="button" class="btn btn-danger">Decline</button>	
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

	<!-- Request Sent Modal -->
	<div class="modal fade" id="req-sent-modal">
		<div class="modal-dialog modal-lg modal-dialog-centered">
			<div class="modal-content modal1">
				<div class="modal-body">
					<button type="button" class="close" data-dismiss="modal">×</button>
					<div class="container request-me">
					<div class="row request-me1">
						<div class="col-md-9 request-me2">
							<div class="row admin-index">
								<div class="col-md-5 request-me3">
									<div class="avatar-img " id="avatar-img">
									</div>
									<div class="air-name">
										<h5> Alexander Lorca</h5>
									</div>
								</div>
								<div class="col-md-7 company-req">
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
									<div class=" float-right">
										<button type="button" class="btn btn-primary">LinkedIn profile</button>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-3">
						<div class="coldrinks-img">
				        	<img src="../assets/img/img3.jpg">
				        	<p>Brand A</p>
				        </div>
						<div class="coldrinks-img">
				        	<img src="../assets/img/img3.jpg">
				           	<p>Brand B</p>
				        </div>
						<div class="coldrinks-img">
				          	<img src="../assets/img/img3.jpg">
				           	<p>Brand C</p>
				        </div>
						</div>
						</div>
					<div class="row text-center">
						<div class="col-md-9 rectangle btn-primary">
							<p class="m-0">Request sent on April the 3th, 2019</p>		
						</div>
						<div class="col-md-3">
							<p class="m-0 pt-3 see-more-color">See more...</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
	<!-- Request Match Modal -->
		<div class="modal fade" id="req-match-modal">
	    	<div class="modal-dialog modal-lg modal-dialog-centered">
	      		<div class="modal-content modal1">
	      			<div class="modal-body">
			    		<button type="button" class="close" data-dismiss="modal">×</button>    	
							<div class="container request-me">
								<div class="row request-me1">
									<div class="col-md-9 request-me2">
										<div class="row admin-index">
											<div class="col-md-5 request-me3">
												<div class="avatar-img " id="avatar-img">
												</div>
												<div class="air-name">
													<h5> Alexander Lorca</h5>
												</div>
											</div>
											<div class="col-md-7 company-req">
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
												<div class=" float-right">
													<button type="button" class="btn btn-primary">LinkedIn profile</button>
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-3">
										<div class="coldrinks-img">
											<img src="../assets/img/img3.jpg">
											<p>Brand A</p>
										</div>
								        <div class="coldrinks-img">
								        	<img src="../assets/img/img3.jpg">
								        	<p>Brand B</p>
								        </div>
										<div class="coldrinks-img">
								          	<img src="../assets/img/img3.jpg">
								           	<p>Brand C</p>
								        </div>
									</div>
								</div>
								<div class="row text-center">
									<div class="col-md-9 rectangle btn-success">
										<p class="m-0">Matched on April the 3th, 2019</p>		
									</div>
									<div class="col-md-3">
										<p class="m-0 pt-3 see-more-color">See more...</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
</div>
<?php include "footer.php";?>
