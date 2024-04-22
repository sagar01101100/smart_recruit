<!doctype html>
<html lang="en">
<?php 
require '../constants/settings.php'; 
require 'constants/check-login.php';

if ($user_online == "true") {
if ($myrole == "employee") {
}else{
header("location:../");		
}
}else{
header("location:../");	
}
?>
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>IIT Patna - Employee Profile</title>
	<meta name="description" content="Online Job Management / Job Portal" />
	<meta name="keywords" content="job, work, resume, applicants, application, employee, employer, hire, hiring, human resource management, hr, online job management, company, worker, career, recruiting, recruitment" />
	<meta name="author" content="BwireSoft">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta property="og:image" content="http://<?php echo "$actual_link"; ?>/images/banner.jpg" />
    <meta property="og:image:secure_url" content="https://<?php echo "$actual_link"; ?>/images/banner.jpg" />
    <meta property="og:image:type" content="image/jpeg" />
    <meta property="og:image:width" content="500" />
    <meta property="og:image:height" content="300" />
    <meta property="og:image:alt" content="Bwire Jobs" />
    <meta property="og:description" content="Online Job Management / Job Portal" />


	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css" media="screen">	
	<link href="../css/animate.css" rel="stylesheet">
	<link href="../css/main.css" rel="stylesheet">
	<link href="../css/component.css" rel="stylesheet">
	
	<link rel="shortcut icon" href="../images/iitp_logo.png">
	<link rel="stylesheet" href="../icons/linearicons/style.css">
	<link rel="stylesheet" href="../icons/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="../icons/simple-line-icons/css/simple-line-icons.css">
	<link rel="stylesheet" href="../icons/ionicons/css/ionicons.css">
	<link rel="stylesheet" href="../icons/pe-icon-7-stroke/css/pe-icon-7-stroke.css">
	<link rel="stylesheet" href="../icons/rivolicons/style.css">
	<link rel="stylesheet" href="../icons/flaticon-line-icon-set/flaticon-line-icon-set.css">
	<link rel="stylesheet" href="../icons/flaticon-streamline-outline/flaticon-streamline-outline.css">
	<link rel="stylesheet" href="../icons/flaticon-thick-icons/flaticon-thick.css">
	<link rel="stylesheet" href="../icons/flaticon-ventures/flaticon-ventures.css">

	<link href="../css/style.css" rel="stylesheet">
	<style>
        .error{
            color = red;
        }
    </style>
</head>
  <style>
  
    .autofit2 {
	height:80px;
	width:100px;
    object-fit:cover; 
  }
  
  </style>

<body class="not-transparent-header">

	<div class="container-wrapper">

		<header id="header">

			<nav class="navbar navbar-default navbar-fixed-top navbar-sticky-function">

				<div class="container">
					
				<div class="logo-wrapper">
						<div class="logo">
							<a href="./"><img width ="50rem" src="../images/iitp_logo.png" alt="Logo" /></a>
						</div>
					</div>
					<div class="navbar-nav-wrapper navbar-arrow">
					
						<ul class="nav navbar-nav" id="responsive-menu">
							
							<li>
								<a href="../job-list.php">Apply Now</a>

							</li>
							
							<li>
								<a href="../employers.php">IITP Faculties</a>
							</li>
							
							<li>
								<a href="../contact.php">Contact Us</a>
							</li>

						</ul>
				
					</div>

					<div >
						<ul class="nav-mini sign-in">
							<li><a href="../logout.php">logout</a></li>
							<li><a href="./">Profile</a></li>
						</ul>
					</div>
				
				</div>
				
				<div id="slicknav-mobile"></div>
				
			</nav>

			
		</header>

		<div class="main-wrapper">
		
			<div class="breadcrumb-wrapper">
			
				<div class="container">
				
					<ol class="breadcrumb-list booking-step">
						<li><a href="../">Home</a></li>
						<li><span>Profile</span></li>
					</ol>
					
				</div>
				
			</div>

			
			<div class="admin-container-wrapper">

				<div class="container">
				
					<div class="GridLex-gap-15-wrappper">
					
						<div class="GridLex-grid-noGutter-equalHeight">
						
							<div class="GridLex-col-3_sm-4_xs-12">
							
								<div class="admin-sidebar">
										
									<div class="admin-user-item">
									<div class="image">	
									
										<?php 
										if ($myavatar == null) {
										print '<center><img class="img-circle autofit2" src="../images/default.jpg" title="'.$myfname.'" alt="image"  /></center>';
										}else{
										echo '<center><img class="img-circle autofit2" alt="image" title="'.$myfname.'"  src="data:image/jpeg;base64,'.base64_encode($myavatar).'"/></center>';	
										}
										?>
										</div>
										<br>
										
										
										<h4><?php echo "$myfname"; ?> <?php echo "$mylname"; ?></h4>
										<p class="user-role"><?php echo "$mytitle"; ?></p>
										
									</div>
									
									<div class="admin-user-action text-center">
									
										<a target="_blank" href="my_cv" class="btn btn-primary btn-sm btn-inverse">View my CV</a>
										
									</div>
									
									<ul class="admin-user-menu clearfix">
										<li  class="active">
											<a href="profile.php"><i class="fa fa-user"></i> View Profile</a>
										</li>
										<li class="">
										<a href="change-password.php"><i class="fa fa-key"></i> Change Password</a>
										</li>
										<li>
											<a href="qualifications.php"><i class="fa fa-trophy"></i> Professional Qualifications</a>
										</li>
										
										<li>
											<a href="training.php"><i class="fa fa-gears"></i> Research Experience</a>
										</li>

										<li>
											<a href="referees.php"><i class="fa fa-users"></i> Referees</a>
										</li>
										<li>
											<a href="academic.php"><i class="fa fa-graduation-cap"></i> Academic Qualifications</a>
										</li>
										<li>
											<a href="experience.php"><i class="fa fa-briefcase"></i> Working Experience</a>
										</li>
										<li>
											<a href="attachments.php"><i class="fa fa-folder-open"></i> Other Attachments</a>
										</li>
										<li>
											<a href="applied-jobs.php"><i class="fa fa-bookmark"></i> Applied Jobs</a>
										</li>
										<li>
											<a href="../logout.php"><i class="fa fa-sign-out"></i> Logout</a>
										</li>
									</ul>
									
								</div>

							</div>
							
							<div class="GridLex-col-9_sm-8_xs-12">
    <div class="admin-content-wrapper">
        <div class="admin-section-title">
            <h2>Profile</h2>
            <p>Your last logged-in: <span class="text-primary"><?php echo "$mylogin"; ?></span></p>
        </div>
        <form class="post-form-wrapper" action="app/update-profile.php" method="POST" autocomplete="off">
            <div class="row gap-20">
                <?php require 'constants/check_reply.php'; ?>
                <div class="clear"></div>
                <div class="col-sm-6 col-md-4">
                    <div class="form-group">
                        <label>First Name *</label>
                        <input id="fname" name="fname" required type="text" class="form-control" value="<?php echo "$myfname"; ?>" placeholder="Enter your first name">
                        <span id="ferror" class="error"></span>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="form-group">
                        <label>Last Name *</label>
                        <input id="lname" name="lname" required type="text" class="form-control" value="<?php echo "$mylname"; ?>" placeholder="Enter your last name">
                        <span id="lerror" class="error"></span>
                    </div>
                </div>
                <div class="clear"></div>
                <div class="col-sm-6 col-md-4">
                    <div class="form-group">
                        <label>Born *</label>
                        <div class="row gap-5">
                            <div class="col-xs-3 col-sm-3">
                                <select name="date" required class="selectpicker form-control" data-live-search="false">
                                    <option disabled value="">Day</option>
                                    <?php 
                                        $x = 1; 
                                        while($x <= 31) {
                                            if ($x < 10) {
                                                $x = "0$x";
                                            }
                                            echo '<option '; 
                                            if ($mydate == $x ) { 
                                                echo ' selected '; 
                                            } 
                                            echo ' value="'.$x.'">'.$x.'</option>';
                                            $x++;
                                        } 
                                    ?>
                                </select>
                            </div>
                            <div class="col-xs-5 col-sm-5">
                                <select name="month" required class="selectpicker form-control" data-live-search="false">
                                    <?php 
                                        $x = 1; 
                                        while($x <= 12) {
                                            if ($x < 10) {
                                                $x = "0$x";
                                            }
                                            echo '<option '; 
                                            if ($mymonth == $x ) { 
                                                echo ' selected '; 
                                            } 
                                            echo ' value="'.$x.'">'.$x.'</option>';
                                            $x++;
                                        } 
                                    ?>
                                </select>
                            </div>
                            <div class="col-xs-4 col-sm-4">
                                <select name="year" class="selectpicker form-control" data-live-search="false">
                                    <?php 
                                        $x = date('Y'); 
                                        $yr = 60;
                                        $y2 = $x - $yr;
                                        while($x > $y2) {
                                            echo '<option '; 
                                            if ($myyear == $x ) { 
                                                echo ' selected '; 
                                            } 
                                            echo ' value="'.$x.'">'.$x.'</option>';
                                            $x = $x - 1;
                                        } 
                                    ?>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="form-group">
                        <label>Email *</label>
                        <input id="email" type="email" name="email" required class="form-control" value="<?php echo "$myemail"; ?>" placeholder="Enter your email address" required>
                        <span id="error" class="error"></span>
                    </div>
                </div>
                <div class="clear"></div>
                <div class="form-group">
                    <div class="col-sm-12">
                        <label>Education Level *</label>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <input id="education_level" value="<?php echo "$myedu"; ?>" name="education" type="text" required class="form-control" placeholder="Eg: Diploma, Degree...etc" required>
                        <span id="ferror" class="error"></span>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <input id="program" value="<?php echo "$mytitle"; ?>" name="title" required type="text" class="form-control mb-15" placeholder="Eg: Computer Science, IT...etc" required>
                        <span id="ferror" class="error"></span>
                    </div>
                </div>
                <div class="clear"></div>
                <div class="col-sm-6 col-md-4">
                    <div class="form-group">
                        <label>Gender </label>
                        <select name="gender" required class="selectpicker show-tick form-control" data-live-search="false">
                            <option disabled value="">Select</option>
                            <option <?php if ($mygender == "Male") { echo ' selected '; } ?> value="Male">Male</option>
                            <option <?php if ($mygender == "Female") { echo ' selected '; } ?> value="Female">Female</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="form-group">
                        <label>City/town </label>
                        <input name="city" required type="text" class="form-control" value="<?php echo "$mycity"; ?>">
                    </div>
                </div>
                <div class="clear"></div>
                <div class="col-sm-6 col-md-4">
                    <div class="form-group">
                        <label>Street </label>
                        <input id="street" name="street" required type="text" class="form-control" value="<?php echo "$mystreet"; ?>">
                        <span id="ferror" class="error"></span>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="form-group">
                        <label>Zip Code </label>
                        <input id="zipcode" name="zip" required type="text" class="form-control" value="<?php echo "$myzip"; ?>">
                        <span id="zipError" class="error"></span>
                        
                    </div>
                </div>
                <div class="clear"></div>
                <div class="col-sm-6 col-md-4">
                    <div class="form-group">
                        <label>Position *</label>
                        <select name="country" required class="selectpicker show-tick form-control" data-live-search="true" required>
                            <option disabled value="">Select</option>
                            <?php
                                require '../constants/db_config.php';
                                try {
                                    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                                    $stmt = $conn->prepare("SELECT * FROM tbl_countries ORDER BY country_name");
                                    $stmt->execute();
                                    $result = $stmt->fetchAll();
                                    foreach($result as $row) {
                                        echo '<option '; 
                                        if ($mycountry == $row['country_name']) { 
                                            echo ' selected '; 
                                        } 
                                        echo ' value="'.$row['country_name'].'">'.$row['country_name'].'</option>';
                                    }
                                } catch(PDOException $e) {
                                    // Handle exception
                                }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="form-group">
                        <label>Phone Number *</label>
                        <input id="phoneNumber" type="text" name="phone" placeholder="Enter your 10 digit phone number" required class="form-control" value="<?php echo "$myphone"; ?>" required>
                        <span id="phoneError" class="error"></span>
                        
                    </div>
                </div>
                <div class="clear"></div>
                <div class="col-sm-12 col-md-12">
                    <div class="form-group bootstrap3-wysihtml5-wrapper">
                        <label>About me</label>
                        <textarea id="aboutText" name="about" class="bootstrap3-wysihtml5 form-control" placeholder="Enter your short description ..." style="height: 200px;"><?php echo "$mydesc"; ?></textarea>
                        <span id="aboutError" class="error"></span>
                    </div>
                </div>
                <div class="clear"></div>
                <div class="col-sm-12 mt-10">
                    <button type="submit" class="btn btn-primary">Update</button>
                    <button type="reset" class="btn btn-primary btn-inverse">Cancel</button>
                </div>
            </div>
        </form>
        <br>
        <form action="app/new-dp.php" method="POST" enctype="multipart/form-data">
            <div class="row gap-20">
                <div class="col-sm-12 col-md-12">
                    <div class="form-group bootstrap3-wysihtml5-wrapper">
                        <label>Display Image *</label>
                        <input accept="image/*" type="file" name="image"  required >
                    </div>
                </div>
                <div class="clear"></div>
                <div class="col-sm-12 mt-10">
                    <button type="submit" class="btn btn-primary">Update</button>
                    <?php 
                        if ($myavatar == null) {
                            // No action needed
                        } else {
                            echo '<a onclick="return confirm(\'Are you sure you want to delete your avatar ?\')" class="btn btn-primary btn-inverse" href="app/drop-dp.php">Delete</a>';
                        }
                    ?>
                </div>
            </div>
        </form>
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
										<li><a href="job-list.php">IIT Patna Recruitment</a></li>
										<li><a href="employers.php">Employers</a></li>
										<li><a href="employees.php">Employees</a></li>
										<li><a href="contact.php">Contact Us</a></li>
										<li><a href="#">Go to top</a></li>

									</ul>
								
								</div>

							</div>

						</div>
						
						<div class="col-sm-12 col-md-3 mt-30-sm">
						
							<h5 class="footer-title">IIT Patna Contact</h5>
							
							<p>Address : Bihta Kanpa Rd, Patna, Dayalpur Daulatpur, Bihar 801106.</p>
							<p>Email : <a href="iitpatna@gmail.com">iitpatna@gmail.com</a></p>
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
								<li><a >Developed by IIT Patna</a></li>
							</ul>
						
						</div>
						
						<div class="col-sm-4 col-md-4">
							<ul class="bottom-footer-menu for-social">
								<li><a href="https://twitter.com/IITPAT"><i class="ri ri-twitter" data-toggle="tooltip" data-placement="top" title="twitter"></i></a></li>
								<li><a href="https://www.facebook.com/iitp.ac.in/"><i class="ri ri-facebook" data-toggle="tooltip" data-placement="top" title="facebook"></i></a></li>
								<li><a href="https://www.instagram.com/iit_patna_official/?hl=en"><i class="ri ri-instagram" data-toggle="tooltip" data-placement="top" title="instagram"></i></a></li>
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


<script type="text/javascript" src="../js/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="../js/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="../bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="../js/bootstrap-modalmanager.js"></script>
<script type="text/javascript" src="../js/bootstrap-modal.js"></script>
<script type="text/javascript" src="../js/smoothscroll.js"></script>
<script type="text/javascript" src="../js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="../js/jquery.waypoints.min.js"></script>
<script type="text/javascript" src="../js/wow.min.js"></script>
<script type="text/javascript" src="../js/jquery.slicknav.min.js"></script>
<script type="text/javascript" src="../js/jquery.placeholder.min.js"></script>
<script type="text/javascript" src="../js/bootstrap-tokenfield.js"></script>
<script type="text/javascript" src="../js/typeahead.bundle.min.js"></script>
<script type="text/javascript" src="../js/bootstrap3-wysihtml5.min.js"></script>
<script type="text/javascript" src="../js/bootstrap-select.min.js"></script>
<script type="text/javascript" src="../js/jquery-filestyle.min.js"></script>
<script type="text/javascript" src="../js/bootstrap-select.js"></script>
<script type="text/javascript" src="../js/ion.rangeSlider.min.js"></script>
<script type="text/javascript" src="../js/handlebars.min.js"></script>
<script type="text/javascript" src="../js/jquery.countimator.js"></script>
<script type="text/javascript" src="../js/jquery.countimator.wheel.js"></script>
<script type="text/javascript" src="../js/slick.min.js"></script>
<script type="text/javascript" src="../js/easy-ticker.js"></script>
<script type="text/javascript" src="../js/jquery.introLoader.min.js"></script>
<script type="text/javascript" src="../js/jquery.responsivegrid.js"></script>
<script type="text/javascript" src="../js/customs.js"></script>

<script>
	document.getElementById("fname").addEventListener("blur", validateFName);
    document.getElementById("lname").addEventListener("blur", validateLName);
    document.getElementById("email").addEventListener("blur", validateEmail);
    document.getElementById("phoneNumber").addEventListener("blur", validatePhoneNumber);
    document.getElementById("zipcode").addEventListener("blur", validateZipcode);
    // document.getElementById("aboutText").addEventListener("blur", validateAbout);
    
    
    function validateFName() {
            var name = document.getElementById("fname").value;
            var nameError = document.getElementById("ferror");
            if (name.trim() === "") {
                nameError.textContent = "Name is required";
                lNameError.textContent = "Name is required";
                return false;
            } else if (!/^[a-zA-Z\s]+$/.test(name)) {
                nameError.textContent = "Invalid name. Only letters and spaces allowed.";
                // lNameError.textContent = "Invalid name. Only letters and spaces allowed.";
                return false;
            } else {
                nameError.textContent = "";
                return true;
            }
        }
        function validateLName() {
            var name = document.getElementById("lname").value;
            var nameError = document.getElementById("lerror");
            if (name.trim() === "") {
                nameError.textContent = "Name is required";
                lNameError.textContent = "Name is required";
                return false;
            } else if (!/^[a-zA-Z\s]+$/.test(name)) {
                nameError.textContent = "Invalid name. Only letters and spaces allowed.";
                // lNameError.textContent = "Invalid name. Only letters and spaces allowed.";
                return false;
            } else {
                nameError.textContent = "";
                return true;
            }
        }
    function validateEmail(){
        var email = document.getElementById("email").value;
        var emailError = document.getElementById("error");

        // console.log(email)
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

    function validatePhoneNumber(){
    var phoneNumber = document.getElementById("phoneNumber").value;
    var phoneNumberError = document.getElementById("phoneError");

    if (phoneNumber === "") {
        phoneNumberError.textContent = "Phone number is required";
        return false;
    } else if (!/^\d{10}$/.test(phoneNumber)) {
        phoneNumberError.textContent = "Phone number must contain exactly 10 digits.";
        return false;
    } else {
        phoneNumberError.textContent = "";
        return true;
    }
}

function validateZipcode(){
    var phoneNumber = document.getElementById("zipcode").value;
    var phoneNumberError = document.getElementById("zipError");

    if (phoneNumber === "") {
        // phoneNumberError.textContent = "Zip Code is required.";
        return true;
    } else if (!/^\d{6}$/.test(phoneNumber)) {
        phoneNumberError.textContent = "Enter Correct Zip Code.";
        return false;
    } else {
        phoneNumberError.textContent = "";
        return true;
    }
}

// function validateAbout(){
//     var aboutText = document.getElementById("aboutText").value;
//     var aboutError = document.getElementById("aboutError");

//     if (aboutText === "") {
//         aboutError.textContent = "About field is required";
//         return false;
//     } else if (aboutText.length < 100) {
//         aboutError.textContent = "About field must contain at least 100 characters.";
//         return false;
//     } else {
//         aboutError.textContent = "";
//         return true;
//     }

// }

// Attach event listener when the DOM is loaded






    

    

</script>

</body>



</html>