<!DOCTYPE html>
<html lang="en">
<head>
 <title>GeekPro-Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- Custom CSS -->
   <link href="css/style.css" rel="stylesheet">
    <link href="css/modern-business.css" rel="stylesheet">
	 <link href="css/registration.css" rel="stylesheet">
  <script src="http://maps.googleapis.com/maps/api/js?sensor=false&amp;libraries=places"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
	  <script src="./js/jquery.geocomplete.js"></script>
	
  </head>
  <body style="background-color:black;font-family:cambria;color:black;">
  
  
  <?php 
  		if(isset($_GET['success'])){
  			echo "<div> <h6>";
  		}else if(isset($_GET['fail'])){
  			echo "<script>alert('sorry something has gone wrong');</script>";
  		}
  
  ?>

  <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
        
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <h2 style="color:#F1C40F; text-transform: none;margin-left: 40px;">GeekPro</h2>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" style="background-color: black;">
                <ul class="nav navbar-nav navbar-right">
                     <li class="active"><a href="index.php" style="margin-right: 30px;">Home</a></li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        
        <!-- /.container-fluid -->
    </nav>
	
    
    <!-- sign in -->
    
    
	<div id="breadcrumb" style="margin-top: -110px;">
		<div class="container">	
			<div class="breadcrumb">							
				<li><a href="index.html">Home</a></li>			
			</div>		
		</div>	
	</div>
	<section id="signin-page">
		<div class="container" style="margin-top:50px;">
        <div class="row">
    		<div class="col-md-6 col-md-offset-3">
				<div class="panel panel-login">
					<div class="panel-heading">
						<div class="row" style="margin-top: 24px;">
							<div class="col-xs-6">
								<a href="#" class="active" id="login-form-link">Login</a>
							</div>
							<div class="col-xs-6">
								<a href="#" id="register-form-link">Register</a>
							</div>
						</div>
						<hr>
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-lg-12">
								<form id="login-form" action="loginUser.php" method="post" role="form" style="display: block;">
									<div class="form-group">
										<input type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="Email" value="">
									</div>
									<div class="form-group">
										<input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3">
												<input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Log In">
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-lg-12">
												<div class="text-center">
													<a href="http://phpoll.com/recover" tabindex="5" class="forgot-password">Forgot Password?</a>
												</div>
											</div>
										</div>
									</div>
								</form>
                                
                            <!--  sign in form -->
								<form id="register-form" action="createAccount.php" method="post" role="form" style="display: none;">
									<div class="form-group">
										<input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="">
									</div>
									<div class="form-group">
										<input type="email" name="email1" id="email1" tabindex="1" class="form-control" placeholder="Email Address" value="">
									</div>
									<div class="form-group">
										<input type="password" name="password1" id="password" tabindex="2" class="form-control" placeholder="Password">
									</div>
									<div class="form-group">
										<input type="password" name="password2" id="confirm-password" tabindex="2" class="form-control" placeholder="Confirm Password">
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3">
												<input type="submit" name="register-submit" id="register-submit" tabindex="4" class="form-control btn btn-register" value="Register Now">
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!--  
	 		* not using this method
	 
	<script type="text/javascript">
			// if register is clicked this function would be called
			function post(){
				var username = $('#username').val();
				var number = $('#number').val();
				var email = $('#email1').val();
				var password1 = $('#password1').val();
				var password2 = $('#password2').val();
				
				$.post("email2.php",{username:username, number:number, email:email, password1:password1, password2:password2},
						function(data){
						alert(data);
				});
				
			}	
	
	</script>
	
	
	 		-->
		
    </section><!--/#contact-page-->
	       <!-- Footer -->
        <footer>
			<div class="container" style="margin-top:100px">
				<div class="row">
					<div class="col-md-6" style="text-align:left;">
					   <a href="#" style="text-align:left;">About us</a>&nbsp;&nbsp;&nbsp; 
						<a href="#" style="text-align:left;">Privacy Policy</a>&nbsp;&nbsp;&nbsp; 
						 <a href="#" style="text-align:left;">Terms of Use </a>
					</div>
					<div class="col-md-6" style="text-align:right;">
					   <a href="#" style="text-align:right;">Copyright 2015 &copy; Yodhaa Business Solutions Pvt Ltd</a>
					</div>
				</div>
			</div>
        </footer>
	
	
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="js/jquery-2.1.1.min.js"></script>	
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>  
	<script src="js/wow.min.js"></script>
	<script src="js/functions.js"></script>
	<script>
	$(function() {

    $('#login-form-link').click(function(e) {
    	$("#login-form").delay(100).fadeIn(100);
 		$("#register-form").fadeOut(100);
		$('#register-form-link').removeClass('active');
		$(this).addClass('active');
		e.preventDefault();
	});
	$('#register-form-link').click(function(e) {
		$("#register-form").delay(100).fadeIn(100);
 		$("#login-form").fadeOut(100);
		$('#login-form-link').removeClass('active');
		$(this).addClass('active');
		e.preventDefault();
	});

});

	</script>
	
  </body>
</html>