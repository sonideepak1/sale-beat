<?php include "header.php"
?>
<style>
 
</style>
<div class="modal fade" id="freelancer">
    <div class="modal-dialog modal-sm modal-dialog-centered">
      <div class="modal-content">
        
        <!-- Modal body -->
        <div class="modal-body">
        	<button type="button" class="close" data-dismiss="modal">×</button>
          <div class="signup text-center">
          	<!-- <form> -->
          		<h1>Freelancer Sign Up</h1>
          		<a href=""><button>LinkedIn</button></a>
          		<p>Or</p>
              <input type="text" name="" placeholder="Email">
          		<input type="text" name="" placeholder="Password"><br>	
          		<a href="freelancer-signup-form">
          			<button class="submit">SUBMIT</button>
          		</a>
          		<p>Already a user? Log in <a href="#">here</a></p>
          	<!-- </form> -->
          </div>
        </div>
      </div>
    </div>
    <div class="checkbox">
      <label><input type="checkbox">By signing in, I agree to SalesBeat<a href="#"> terms of service</a> and <a href="#">privacy policy</a></label>
    </div>
</div>

<div class="modal fade" id="brand">
    <div class="modal-dialog modal-sm modal-dialog-centered">
      <div class="modal-content">
      
        <!-- Modal body -->
        <div class="modal-body">
        	<button type="button" class="close" data-dismiss="modal">&times;</button>
          <div class="signup text-center">
          	<!-- <form> -->
          		<h1>Company Sign Up</h1>
          		<a href=""><button>LinkedIn</button></a>
          		<p>Or</p>
          		<input type="text" name="" placeholder="Email">
          		<input type="text" name="" placeholder="Password"><br>	
          		<a href="company-signup-form">
          			<button class="submit">SUBMIT</button>
          		</a>
          		<p>Already a user? Log in <a href="#">here</a></p>
        
          	<!-- </form> -->
          </div>
        </div>
      </div>
    </div>
    <div class="checkbox">
      <label><input type="checkbox">By signing in, I agree to SalesBeat<a href="#"> terms of service</a> and <a href="#">privacy policy</a></label>
    </div>
</div>

<div class="homepage">
	<div class="banner">
		<p>Route to market doesn't<br> have to be expansive<br> anymore</p>
  </div>
<!-- <div class="agent-profiles">
	<div class="agent1">
		<img src="assets/img/img1.jpeg">
		<h4>“With SalesBeat my career as an independent sales agent has increased my experience in my field and I started to work with clients all over the world, without travelling abroad.”</h4>
		<p>Delcy González <br> Former sales <br> agent at Unilever Colombia S.A. Joined SalesBeat in February 2019</p>
	</div>
	<div class="agent2">
	</div>
	<div class="agent3">
	</div> -->
	<div class="banner-bottom">
      <p>We connect FMCG brands with freelance sales people.</p>
    <div class="button d-flex justify-content-between">
        <button type="button" class="btn" data-toggle="modal" data-target="#freelancer">I'AM A BRAND</button>
        <button type="button" class="btn" data-toggle="modal" data-target="#brand">I'AM A FREELANCER</button>
    </div>
	</div>
  <div class="middle bg-white">
    <p>How it works</p>
    <ul class="timeline">
      <li>
        <div class="timeline-badge"><i class="fas fa-tag"></i><p>Brand</p></div>
        <div class="timeline-badge1"><i class="fas fa-long-arrow-alt-down"></i></div>
        <div class="timeline-panel">
          <p>Brands use the plateform to find the freelancer</p>
        </div>
      </li>
      <li class="timeline-inverted">
        <div class="timeline-badge"><i class="fas fa-desktop"></i><p>sales beat</p></div>
        <div class="timeline-badge1"><i class="fas fa-long-arrow-alt-down"></i></div>
        <div class="timeline-panel">
          <p>When a suitable freelancer is found a contract is made</p>
        </div>
      </li>
      <li>
        <div class="timeline-badge "><i class="fas fa-user-nurse"></i><p>Freelancer</p></div>
        <div class="timeline-badge1"><i class="fas fa-long-arrow-alt-down"></i></div>
        <div class="timeline-panel">
          <p>The freelancer sells products to the coustomer</p>
        </div>
      </li>
      <li class="timeline-inverted">
        <div class="timeline-badge"><i class="fas fa-shopping-basket"></i><p>Customer</p></div>
        <div class="timeline-badge1"><i class="fas fa-long-arrow-alt-down"></i></div>
        <div class="timeline-panel">
          <p>The customer places an order with the brand</p>
        </div>
      </li>
      <li>
        <div class="timeline-badge"><i class="fas fa-tag"></i><p>Brand</p></div>
        <div class="timeline-panel">
          <p>The brand fullfills the order</p>
        </div>
      </li>
    </ul>
  </div>
  <div class="banner-bottom">
    <p>Sign up now.</p>
    <div class="button d-flex justify-content-between">
      <button type="button" class="btn" data-toggle="modal" data-target="#freelancer">I'AM A BRAND</button>
      <button type="button" class="btn" data-toggle="modal" data-target="#brand">I'AM A FREELANCER</button>
    </div>
  </div>
  <div class="bottom pt-4 pb-5 bg-white">
    <p>Current market covered by our freelancer network</p>
    <div class="ntwrk-img">
      <img src="../salesbeat/assets/img/map.png">
    </div>
  </div>
</div>

<?php include "footer.php" ?>

