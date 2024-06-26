<!doctype html>
<html lang="en">
<?php 
include 'constants/settings.php'; 
include 'constants/check-login.php';
?>

//rethca script
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>IITP Login</title>
	
	<meta name="description" content="Online Job Management / Job Portal" />
	<meta name="keywords" content="job, work, resume, applicants, application, employee, employer, hire, hiring, human resource management, hr, online job management, company, worker, career, recruiting, recruitment" />
	<meta name="author" content="BwireSoft">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta property="og:image" content="http://<?php echo "$actual_link"; ?>/images/banner.jpg" />
    <meta property="og:image:secure_url" content="https://<?php echo "$actual_link"; ?>/images/banner.jpg" />
    <meta property="og:image:type" content="image/jpeg" />
    <meta property="og:image:width" content="500" />
    <meta property="og:image:height" content="300" />
    <meta property="og:image:alt" content="Nightingale Jobs" />
    <meta property="og:description" content="Online Job Management / Job Portal" />

	<link rel="shortcut icon" href="images/iitp_logo.png">

	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" media="screen">	
	<link href="css/animate.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	<link href="css/component.css" rel="stylesheet">
	
	<link rel="stylesheet" href="icons/linearicons/style.css">
	<link rel="stylesheet" href="icons/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="icons/simple-line-icons/css/simple-line-icons.css">
	<link rel="stylesheet" href="icons/ionicons/css/ionicons.css">
	<link rel="stylesheet" href="icons/pe-icon-7-stroke/css/pe-icon-7-stroke.css">
	<link rel="stylesheet" href="icons/rivolicons/style.css">
	<link rel="stylesheet" href="icons/flaticon-line-icon-set/flaticon-line-icon-set.css">
	<link rel="stylesheet" href="icons/flaticon-streamline-outline/flaticon-streamline-outline.css">
	<link rel="stylesheet" href="icons/flaticon-thick-icons/flaticon-thick.css">
	<link rel="stylesheet" href="icons/flaticon-ventures/flaticon-ventures.css">

	<link href="css/style.css" rel="stylesheet">
 <script type="text/javascript">
   function update(str)
   {

	if(document.getElementById('mymail').value == "")
   {
	alert("Please enter your email");

    }else{
		  document.getElementById("data").innerHTML = "Please wait...";
      var xmlhttp;

      if (window.XMLHttpRequest)
      {
        xmlhttp=new XMLHttpRequest();
      }
      else
      {
        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
      }	

      xmlhttp.onreadystatechange = function() {
        if(xmlhttp.readyState == 4 && xmlhttp.status == 200)
        {
          document.getElementById("data").innerHTML = xmlhttp.responseText;
        }
      }

      xmlhttp.open("GET","app/reset-pw.php?opt="+str, true);
      xmlhttp.send();
}

  }
  
   function reset_text()
   {  
   document.getElementById('mymail').value = "";
   document.getElementById("data").innerHTML = "";
   }

</script>
</head>
<style>
 .error {
    color: red;
    font-size: 14px;
    margin-top: 5px; /* Add margin for spacing */
}
</style>

<body class="not-transparent-header">

	<div class="container-wrapper">


		<header id="header">


			<nav class="navbar navbar-default navbar-fixed-top navbar-sticky-function">

				<div class="container">
					
					<div class="logo-wrapper">
						<div class="logo">
							<a href="./"><img width= "50rem" src="images/iitp_logo.png" alt="Logo" /></a>
						</div>
					</div>
					
					<div  class="navbar-nav-wrapper navbar-arrow">
					
					<ul class="nav navbar-nav" id="responsive-menu">
					<li>
							<a href="job-list.php">Apply Now</a>

						</li>
						
						<li>
							<a href="employers.php">IITP Faculties</a>
						</li>
						
						<li>
							<a href="contact.php">Contact Us</a>
						</li>

					</ul>
			
				</div>

				<div >
					<ul class="nav-mini sign-in">
					<?php
					if ($user_online == true) {
					print '
						<li><a href="logout.php">logout</a></li>
						<li><a href="'.$myrole.'">Profile</a></li>';
					}else{
					print '
						<li><a href="login.php">login</a></li>
						<li><a data-toggle="modal" href="#registerModal">register</a></li>';						
					}
					
					?>

					</ul>
				</div>
				
				</div>
				
				<div id="slicknav-mobile"></div>
				
			</nav>
	
			<div id="registerModal" class="modal fade login-box-wrapper" tabindex="-1" style="display: none;" data-backdrop="static" data-keyboard="false" data-replace="true">
			
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title text-center">Create your account for free</h4>
				</div>
				
				<div class="modal-body">
				
					<div class="row gap-20">
					
						<div class="col-sm-6 col-md-6">
							<a href="register.php?p=Employer" class="btn btn-facebook btn-block mb-5-xs">Register as Admin</a>
						</div>
						<div class="col-sm-6 col-md-6">
							<a href="register.php?p=Employee" class="btn btn-facebook btn-block mb-5-xs">Register as Applicant</a>
						</div>

					</div>
				
				</div>
				
				<div class="modal-footer text-center">
					<button type="button" data-dismiss="modal" class="btn btn-primary btn-inverse">Close</button>
				</div>
				
			</div>



			
		</header>


		<div class="main-wrapper">


			<div class="breadcrumb-wrapper">
			
				<div class="container">
				
					<ol class="breadcrumb-list">
						<li><a href="./">Home</a></li>
						<li><span>Access your account</span></li>
					</ol>
					
				</div>
				
			</div>


			<div class="login-container-wrapper">	
	
				<div class="container">
				
					<div class="row">
					
						<div class="col-md-10 col-md-offset-1">
						
							<div class="row">

								<div class="col-sm-6 col-sm-offset-3">
                                <?php
								include 'constants/check_reply.php';	
								?>

                                <form name="frm" action="app/auth.php" method="POST" autocomplete="off">
                                <div class="login-box-wrapper">
							
                                <div class="modal-header">
                                <h4 class="modal-title text-center">Access your account</h4>
                                </div>

                                <div class="modal-body">
																
                                <div class="row gap-20">

												
                                <div class="col-sm-12 col-md-12">

                                <div class="form-group"> 
                                <label>Email Address</label>

								<input id="email" class="form-control" placeholder="Enter your email address" name="email" required type="text">
								<span id="error" class="error"></span>
								

                                <!-- <input class="form-control" placeholder="Enter your email address" name="email" required type="text">  -->
                                </div>
												
                                 </div>
												
                                <div class="col-sm-12 col-md-12">				
                                <div class="form-group"> 
                                <label>Password</label>
                                <input id="password" class="form-control" placeholder="Enter your password" name="password" required type="password"> 
								<span id="passwordError" class="error"></span>
                                </div>				
								<div class="g-recaptcha" data-sitekey="6LfAF6opAAAAANJyJRbdaxnSLvu4hm_xwAGySyfx">
								</div>
								
					          	<div class="col-sm-12 col-md-12">
							    <div class="login-box-link-action">
								<a data-toggle="modal" onclick = "reset_text()" href="#forgotPasswordModal">Forgot password?</a> 
							    </div>
						      </div>
						      </div>
							  <div class="modal-footer text-center">
							  <button type="submit" class="btn btn-primary" onclick = > Login with Goolge</button>
							</div>
						</div>
					</div>
<div class="modal-footer text-center">
<button type="submit" class="btn btn-primary">Login</button>
</div>
										
</div>
</form>

<div id="forgotPasswordModal" class="modal fade login-box-wrapper" tabindex="-1" style="display: none;" data-backdrop="static" data-keyboard="false" data-replace="true">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title text-center">Restore your forgotten password</h4>
    </div>
    <div class="modal-body">
        <div class="row gap-20">
            <div class="col-sm-12 col-md-12">
                <p class="mb-20">Enter the email address associated with your account, and we will send you the link to reset your password</p>
            </div>
            <div class="col-sm-12 col-md-12">
                <div class="form-group"> 
                    <label>Email Address</label>
                    <input id="mymail" autocomplete="off" name="email" class="form-control" placeholder="Enter your email address" type="email" required> 
                </div>
            </div>
            <div class="col-sm-12 col-md-12">
                <div class="login-box-box-action">
                    Return to <a data-dismiss="modal">Log-in</a>
                    <p id="data"></p>
                </div>
            </div>
        </div>
    </div>
    <div class="modal-footer text-center">
        <div class="col-sm-12 col-md-12">
            <div class="login-box-link-action">
                <a href="#" onclick="send_otp()" >Restore</a> 
            </div>
        </div>
    </div>
</div>




			<div id="enterOTP" class="modal fade login-box-wrapper" tabindex="-1" style="display: none;" data-backdrop="static" data-keyboard="false" data-replace="true">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title text-center"><span?>OTP Verification</span></h4>
				</div>

				<div class="modal-body">
					<div class="row gap-20">
						
						<div class="col-sm-12 col-md-12">
						</div>
						
						<div class="col-sm-12 col-md-12">
				
							<div class="form-group"> 

								<label>Enter OTP</label>
								<input id="mymail" autocomplete="off" name="email" class="form-control" placeholder="Enter OTP here" type="email" required> 
							</div>
						
						</div>
						
						<div class="col-sm-12 col-md-12">
							<div class="login-box-box-action">
								Return to <a data-dismiss="modal">Log-in</a>
								<p id="data"></p>
							</div>
							
						</div>
						
					</div>
				</div>
				
				<div class="modal-footer text-center">
					<!-- <button  onclick="update(mymail.value)"  type="submit" class="btn btn-primary">Verify</button> -->
					<button onclick="createNewPass()" type="button" class="btn btn-primary">Verify</button>

					<button type="button" data-dismiss="modal" class="btn btn-primary btn-inverse">Close</button>
				</div>
		
			</div>

			<div id="resetPassword" class="modal fade login-box-wrapper" tabindex="-1" style="display: none;" data-backdrop="static" data-keyboard="false" data-replace="true">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title text-center">Restore your forgotten password</h4>
				</div>

				<div class="modal-body">
					<div class="row gap-20">
						
						<div class="col-sm-12 col-md-12">
							<p class="mb-20">Enter the email address associated to your account, we will send you the link to reset your password</p>
						</div>
						
						<div class="col-sm-12 col-md-12">
				
							<div class="form-group"> 

								<label>Email Address</label>
								<input id="mymail" autocomplete="off" name="email" class="form-control" placeholder="Enter your email address" type="email" required> 
							</div>
						
						</div>
						
						<div class="col-sm-12 col-md-12">
							<div class="login-box-box-action">
								Return to <a data-dismiss="modal">Log-in</a>
								<p id="data"></p>
							</div>
							
						</div>
						
					</div>
				</div>
				
				<div class="modal-footer text-center">
					<button  onclick="update(mymail.value)" type="submit" class="btn btn-primary">Restore</button>
					<button type="button" data-dismiss="modal" class="btn btn-primary btn-inverse">Close</button>
				</div>
		
			</div>
									
								</div>
							
							</div>
							
						</div>
						
					</div>
					
				</div>
			
			</div>
			<footer class="footer-wrapper">
			
			<div class="main-footer">
			
				<div class="container">
				
					<div class="row">
					
						<div class="col-sm-12 col-md-9">
						
							<div class="row">
							
								<div class="col-sm-6 col-md-4">
								
									<div class="footer-about-us">
										<h5 class="footer-title">About IIT Patna Faculty Recruitment</h5>
										<p>Explore faculty opportunities at IIT Patna through our online job portal.</p>
									
									</div>

								</div>
								
								<div class="col-sm-6 col-md-5 mt-30-xs">
									<h5 class="footer-title">Quick Links</h5>
									<ul class="footer-menu clearfix">
										<li><a href="./">Home</a></li>
										<li><a href="job-list.php">Faculty Recruitment</a></li>
										<li><a href="employers.php">Employers</a></li>
										
										<li><a href="contact.php">Contact Us</a></li>
										<li><a href="#">Go to top</a></li>

									</ul>
								
								</div>

							</div>

						</div>
						
						<div class="col-sm-12 col-md-3 mt-30-sm">
						
							<h5 class="footer-title">IIT Patna Contact</h5>
							
							<p>Address : Bihta Kanpa Rd, Patna, Dayalpur Daulatpur, Bihar 801106</p>
							<p>Email : <a href="mailto:iitpatna@gmail.com">iitpatna@gmail.com</a></p>
							<p>Phone : <a href="tel:+91 989592XXXX">+91 989592XXXX</a></p>
							

						</div>

						
					</div>
					
				</div>
				
			</div>
			
			<div class="bottom-footer">
			
				<div class="container">
				
					<div class="row">
					
						<div class="col-sm-4 col-md-4">
				
							<p class="copy-right">&#169; Copyright <?php echo date('Y'); ?> IIT Patna</p>
							
						</div>
						
						<div class="col-sm-4 col-md-4">
						
							<ul class="bottom-footer-menu">
								
							</ul>
						
						</div>
						
						<div class="col-sm-4 col-md-4">
							<ul class="bottom-footer-menu for-social">
								<li><a href="<?php echo "$tw"; ?>"><i class="ri ri-twitter" data-toggle="tooltip" data-placement="top" title="twitter"></i></a></li>
								<li><a href="<?php echo "$fb"; ?>"><i class="ri ri-facebook" data-toggle="tooltip" data-placement="top" title="facebook"></i></a></li>
								<li><a href="<?php echo "$ig"; ?>"><i class="ri ri-instagram" data-toggle="tooltip" data-placement="top" title="instagram"></i></a></li>
							</ul>
						</div>
					
					</div>

				</div>
				
			</div>
		
		</footer>
			
		</div>


	</div> 


<div id="back-to-top">
   <a href="#"><i class="ion-ios-arrow-up"></i></a>
</div>

<script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="js/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/bootstrap-modalmanager.js"></script>
<script type="text/javascript" src="js/bootstrap-modal.js"></script>
<script type="text/javascript" src="js/smoothscroll.js"></script>
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="js/jquery.waypoints.min.js"></script>
<script type="text/javascript" src="js/wow.min.js"></script>
<script type="text/javascript" src="js/jquery.slicknav.min.js"></script>
<script type="text/javascript" src="js/jquery.placeholder.min.js"></script>
<script type="text/javascript" src="js/bootstrap-tokenfield.js"></script>
<script type="text/javascript" src="js/typeahead.bundle.min.js"></script>
<script type="text/javascript" src="js/bootstrap3-wysihtml5.min.js"></script>
<script type="text/javascript" src="js/bootstrap-select.min.js"></script>
<script type="text/javascript" src="js/jquery-filestyle.min.js"></script>
<script type="text/javascript" src="js/bootstrap-select.js"></script>
<script type="text/javascript" src="js/ion.rangeSlider.min.js"></script>
<script type="text/javascript" src="js/handlebars.min.js"></script>
<script type="text/javascript" src="js/jquery.countimator.js"></script>
<script type="text/javascript" src="js/jquery.countimator.wheel.js"></script>
<script type="text/javascript" src="js/slick.min.js"></script>
<script type="text/javascript" src="js/easy-ticker.js"></script>
<script type="text/javascript" src="js/jquery.introLoader.min.js"></script>
<script type="text/javascript" src="js/jquery.responsivegrid.js"></script>
<script type="text/javascript" src="js/customs.js"></script>



//error

<script>
		document.getElementById("email").addEventListener("blur", validateEmail);
		document.getElementById("password").addEventListener("blur", validatePassword);

        // Function to validate name input
        function validateName() {
            var name = document.getElementById("name").value;
            var nameError = document.getElementById("nameError");

            if (name.trim() === "") {
                nameError.textContent = "Name is required";
                return false;
            } else if (!/^[a-zA-Z\s]+$/.test(name)) {
                nameError.textContent = "Invalid name. Only letters and spaces allowed.";
                return false;
            } else {
                nameError.textContent = "";
                return true;
            }
        }


        // Function to validate email input
        function validateEmail() {
            var email = document.getElementById("email").value;
            var emailError = document.getElementById("error");

			console.log(emailError.textContent)
            if (email.trim() === "") {
                emailError.textContent = "Email is required";
                return false;
            } else if (!/\S+@\S+\.\S+/.test(email)) {
                emailError.textContent = "Invalid email format";
                return false;
            } else {
                emailError.textContent = "";
                return true;
            }
			// console.log(email)
        }

		function validatePassword() {
            var password = document.getElementById("password").value;
            var passwordError = document.getElementById("passwordError");

            if (password === "") {
                passwordError.textContent = "Password is required";
                return false;
            } else if (password.length < 8 || password.length > 20) {
                passwordError.textContent = "Password must be between 8 and 20 characters";
                return false;
            } else if (!/[A-Z]/.test(password)) {
                passwordError.textContent = "Password must contain at least one uppercase letter.";
                return false;
            } else if(!/[a-z]/.test(password)){
				passwordError.textContent = "Password must contain at least one lowercase letter.";
                return false;
			} else if(!/\d/.test(password)){
				passwordError.textContent = "Password must contain at least one Digit.";
                return false;
			} else if(!/[!@#$%^&*]/.test(password)){
				passwordError.textContent = "Password must contain at least one Special Character.";
                return false;
			}
			else {
                passwordError.textContent = "";
                return true;
            }
        }

        // Event listener for form submission
        document.getElementById("myForm").addEventListener("submit", function(event) {
            if (!validateName() || !validateEmail()) {
                event.preventDefault(); // Prevent form submission if validation fails
            }
        });
    </script>


<script>
    function send_otp() {
        var email = document.getElementById('mymail').value;
        window.location.href = 'send_otp.php?email=' + email;
    }
</script>




</body>

</html>
