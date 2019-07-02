<!DOCTYPE html>
<html>
<head>
	<title>Dashboard </title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="https://cdn.materialdesignicons.com/3.5.95/css/materialdesignicons.min.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/style.css?ver=1.5">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<style type="text/css">
		header {
			position: fixed;
			z-index: 99;
		    top: 0;
		}
	</style>
</head>
<body>
	<header>
		<div class="container-fluid" id="header">
			<div class="d-flex">
				<div>
					<img src="../assets/img/logo-white.png" height="50">
				</div>
				<div class="ml-auto">
					<ul class="nav navbar-nav">

					      <!-- user -->
					      <li class="dropdown user user-menu open">
					        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
					        	<img src="../assets/avatar/company.png" class="user-image" alt="Super Admin">
				                <span class="hidden-xs">Company</span>
					        </a>
					        <ul class="dropdown-menu">
					          <li class="user-options">
					            <div class="pull-left">
					              <a href="#" class="btn btn-default btn-flat">Profile</a>
					            </div>
					            <div class="pull-right">
					              <a href="/logout" class="btn btn-default btn-flat" onclick="event.preventDefault();">Logout</a>
					            </div>
					          </li>
					        </ul>
					      </li>
					      <!-- /.user -->

					    </ul>
				</div>
			</div>
		</div>
	</header>

	<div class="modal fade" id="login">
	    <div class="modal-dialog modal-dialog-centered">
	      <div class="modal-content">
	        
	        <!-- Modal body -->
	        <div class="modal-body">
	        	<button type="button" class="close" data-dismiss="modal">×</button>
	          <div class="text-center">
	          	<h4>Log in</h4>
	          	<div class="button">
	          		<a href="freelancer-login.php">
		          		<button type="button" class="btn">I'AM A FREELANCER</button>
	          		</a>
	          		<a href="company-login.php">
	          			<button type="button" class="btn">I'AM A BRAND</button>
	          		</a>
	          	</div>
	          </div>
	        </div>
	        
	      </div>
	    </div>
	</div>