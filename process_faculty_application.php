<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_SESSION['logged']) && $_SESSION['logged'] == true) {
    $myid = $_SESSION['myid'];
    $myrole = $_SESSION['role'];

    if ($myrole == "employee") {
        require './constants/db_config.php';

        // Check if file was uploaded successfully
        if (isset($_FILES['resume']) && $_FILES['resume']['error'] === UPLOAD_ERR_OK) {
            // File upload successful
            $resume_path = $_FILES['resume']['tmp_name']; // Get the temporary file path
        } else {
            // File upload failed or no file was uploaded
            // Handle the error accordingly
            echo "Error: Failed to upload resume file";
            exit; // Exit the script
        }

        try {
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            // Retrieve form data
            $name = $_POST['name'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $education = $_POST['education'];
            $experience = $_POST['experience'];
            $specialization = $_POST['specialization'];
            $cover_letter = $_POST['cover_letter'];
            $publications = $_POST['publications'];
            $references = $_POST['references'];
            $application_status = "Pending"; // Default application status

            // Prepare and execute your SQL query
            $stmt = $conn->prepare("INSERT INTO tbl_faculty_applications (name, email, phone, education, experience, specialization, cover_letter, publications, `references`, resume_path, application_date, application_status) VALUES (:name, :email, :phone, :education, :experience, :specialization, :cover_letter, :publications, :references, :resume_path, NOW(), :application_status)");

            // Bind parameters
            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':phone', $phone);
            $stmt->bindParam(':education', $education);
            $stmt->bindParam(':experience', $experience);
            $stmt->bindParam(':specialization', $specialization);
            $stmt->bindParam(':cover_letter', $cover_letter);
            $stmt->bindParam(':publications', $publications);
            $stmt->bindParam(':references', $references);
            $stmt->bindParam(':resume_path', $resume_path);
            $stmt->bindParam(':application_status', $application_status);

            // Execute the query
            $stmt->execute();

            // Success message
            echo "Application submitted successfully!";
        } catch (PDOException $e) {
            // Handle database errors
            echo "Error: " . $e->getMessage();
        }
    } else {
        echo "Unauthorized access!";
    }
} else {
    echo "Unauthorized access!";
}
?>
