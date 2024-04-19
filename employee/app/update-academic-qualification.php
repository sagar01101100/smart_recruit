<?php
require '../../constants/db_config.php';
require '../constants/check-login.php';

$id = $_POST['courseid'];
$country  = $_POST['country'];
$course = ucwords($_POST['course']);
$institution = ucwords($_POST['institution']);
$timeframe = ucwords($_POST['timeframe']);
$level  = $_POST['level'];

// Check if the certificate file is uploaded
if (!empty($_FILES['certificate']['tmp_name'])) {
    $certificate = addslashes(file_get_contents($_FILES['certificate']['tmp_name']));
} else {
    $certificate = '';
}

// Check if the transcript file is uploaded
if (!empty($_FILES['transcript']['tmp_name'])) {
    $transcript = addslashes(file_get_contents($_FILES['transcript']['tmp_name']));
} else {
    $transcript = '';
}

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $conn->prepare("UPDATE tbl_academic_qualification SET country = :country, institution = :institution, course = :course, level = :level, timeframe = :timeframe, certificate = :certificate, transcript = :transcript WHERE id= :aid AND member_no = '$myid'");
    $stmt->bindParam(':country', $country);
    $stmt->bindParam(':institution', $institution);
    $stmt->bindParam(':course', $course);
    $stmt->bindParam(':level', $level);
    $stmt->bindParam(':timeframe', $timeframe);
    $stmt->bindParam(':certificate', $certificate);
    $stmt->bindParam(':transcript', $transcript);
    $stmt->bindParam(':aid', $id);
    $stmt->execute();
    header("location:../academic.php?r=3214");
} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}

?>
