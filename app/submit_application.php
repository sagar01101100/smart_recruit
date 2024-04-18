<?php
require '../constants/settings.php';
date_default_timezone_set($default_timezone);
$apply_date = date('m/d/Y');

session_start();
if (isset($_SESSION['logged']) && $_SESSION['logged'] == true) {
    $myid = $_SESSION['myid'];
    $myrole = $_SESSION['role'];

    if ($myrole == "employee") {
        include '../constants/db_config.php';

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (isset($_POST['full_name']) && isset($_POST['email']) && isset($_FILES['resume']) && isset($_POST['job_id'])) {
                $target_dir = "../uploads/";
                $target_file = $target_dir . basename($_FILES["resume"]["name"]);
                $uploadOk = 1;
                $fileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

                if (file_exists($target_file)) {
                    echo "Sorry, file already exists.";
                    $uploadOk = 0;
                }

                if ($_FILES["resume"]["size"] > 5000000) {
                    echo "Sorry, your file is too large.";
                    $uploadOk = 0;
                }

                if ($fileType != "pdf" && $fileType != "doc" && $fileType != "docx") {
                    echo "Sorry, only PDF, DOC, and DOCX files are allowed.";
                    $uploadOk = 0;
                }

                if ($uploadOk == 0) {
                    echo "Sorry, your file was not uploaded.";
                } else {
                    if (move_uploaded_file($_FILES["resume"]["tmp_name"], $target_file)) {
                        $job_id = $_POST['job_id'];
                        $full_name = $_POST['full_name'];
                        $email = $_POST['email'];

                        try {
                            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                            $stmt = $conn->prepare("INSERT INTO tbl_job_applications (member_no, job_id, full_name, email, resume_path, application_date)
                                VALUES (:memberno, :jobid, :fullname, :email, :resumepath, :appdate)");
                            $stmt->bindParam(':memberno', $myid);
                            $stmt->bindParam(':jobid', $job_id);
                            $stmt->bindParam(':fullname', $full_name);
                            $stmt->bindParam(':email', $email);
                            $stmt->bindParam(':resumepath', $target_file);
                            $stmt->bindParam(':appdate', $apply_date);
                            $stmt->execute();

                            echo '<div class="alert alert-success">
                                    Application submitted successfully.
                                  </div>';
                        } catch (PDOException $e) {
                            echo '<div class="alert alert-danger">
                                    Error: ' . $e->getMessage() . '
                                  </div>';
                        }
                    } else {
                        echo "Sorry, there was an error uploading your file.";
                    }
                }
            } else {
                echo '<div class="alert alert-danger">
                        All fields are required.
                      </div>';
            }
        } else {
            echo '<div class="alert alert-danger">
                    Invalid request.
                  </div>';
        }
    } else {
        echo '<div class="alert alert-danger">
                Access denied. You do not have permission to submit applications.
              </div>';
    }
} else {
    echo '<div class="alert alert-danger">
            Access denied. Please log in to submit applications.
          </div>';
}
?>
