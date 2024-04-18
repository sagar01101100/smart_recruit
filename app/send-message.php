<?php
include '../constants/settings.php';

$myfname = ucwords($_POST['fullname']);
// $myemail = $_POST['email'];
$myemail = 'iitprecruitment@gmail.com';
$mymessage = $_POST['message'];
$contact_mail = $_POST['email'];

require '../mail/PHPMailerAutoload.php';

$mail = new PHPMailer;


$mail->isSMTP();                                      
$mail->Host =  'smtp.gmail.com';
$mail->SMTPAuth = true;                           
$mail->Username = 'iitprecruitment@gmail.com';               
$mail->Password = 'kynpbuccghbhmpgo';                       
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;                   
$mail->Port = 587;   

$mail->setFrom($myemail, 'Smart Recruit');
$mail->addAddress($contact_mail. ' ');           

function generateOTP() {
    // Generate a random 6-digit number
    $otp = rand(100000, 999999);
    return $otp;
    }

    // Test the function
    $otp = generateOTP();

    // Store or update the OTP in the database
    storeOrUpdateOTP($email, $otp);

$mail->isHTML(true);

$mail->Subject = 'Email Verification';
$mail->Body    = "Your Verification Code is  : " . $otp;
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
header("location:../contact.php?r=2974");
} else {
header("location:../contact.php?r=5634");
}

?>