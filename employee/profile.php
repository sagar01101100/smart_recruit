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
							<li><a href="./">Edit Profile</a></li>
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
											<a href="profile.php"><i class="fa fa-user"></i> Profile</a>
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
        <?php
try {
    // Include your database connection file
    require '../constants/db_config.php';
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Fetch user details based on member_no
    // Change this to the actual member_no
    $memberNo = "EM393350424"; // Assuming it's a string
    $sql = "SELECT * FROM tbl_users WHERE member_no = :memberNo";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(":memberNo", $memberNo); // Bind value using named placeholder
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    // Check if user exists
    if ($result) {
?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>User Profile</title>
            <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f7f7f7;
            margin: 0;
            padding: 0;
        }

        .profile-section {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }

        .profile-header {
            text-align: center;
            margin-bottom: 20px;
        }

        .profile-header h2 {
            color: #333;
            margin-bottom: 10px;
        }

        .profile-details {
            margin-bottom: 20px;
        }

        .profile-details p {
            margin: 8px 0;
            color: #555;
            font-size: 16px;
        }

        .edit-profile-btn {
            display: inline-block;
            padding: 12px 24px;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .edit-profile-btn:hover {
            background-color: #0056b3;
        }

        .edit-profile-btn:focus {
            outline: none;
        }
    </style>
        </head>
        <body>
            <div class="profile-section">
                <h2>User Profile</h2>
                <div class="profile-details">
                    <p><strong>First Name:</strong> <?php echo $result['first_name']; ?></p>
                    <p><strong>Last Name:</strong> <?php echo $result['last_name']; ?></p>
                    <p><strong>Email:</strong> <?php echo $result['email']; ?></p>
                    <p><strong>Gender:</strong> <?php echo $result['gender']; ?></p>
                    <p><strong>Date of Birth:</strong> <?php echo $result['bdate'] . "/" . $result['bmonth'] . "/" . $result['byear']; ?></p>
                    <p><strong>Education:</strong> <?php echo $result['education']; ?></p>
                    <p><strong>City:</strong> <?php echo $result['city']; ?></p>
                    <p><strong>Street:</strong> <?php echo $result['street']; ?></p>
                    <p><strong>Zip Code:</strong> <?php echo $result['zip']; ?></p>
                    <p><strong>Phone:</strong> <?php echo $result['phone']; ?></p>
                    <p><strong>About:</strong> <?php echo $result['about']; ?></p>
                    <!-- Add more fields as needed -->
                </div>
                <a href="index.php" class="edit-profile-btn">Edit Profile</a>
            </div>
        </body>
        </html>
<?php
    } else {
        echo "<p>User not found.</p>";
    }

    // Close connection
    $conn = null;
} catch (PDOException $e) {
    echo "<p>Exception caught: " . $e->getMessage() . "</p>";
}
?>


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


</body>



</html>