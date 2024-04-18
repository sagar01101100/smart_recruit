<?php
session_start();

require '../constants/settings.php';
date_default_timezone_set($default_timezone);
$apply_date = date('Y-m-d');

if (isset($_SESSION['logged']) && $_SESSION['logged'] == true) {
    $myid = $_SESSION['myid'];    
    $myrole = $_SESSION['role'];
    $opt = $_GET['opt'];

    if ($myrole == "employee") {
        include '../constants/db_config.php';

        try {
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $stmt = $conn->prepare("SELECT * FROM tbl_job_applications WHERE member_no = :memberno AND job_id = :jobid");
            $stmt->bindParam(':memberno', $myid);
            $stmt->bindParam(':jobid', $opt);
            $stmt->execute();
            $result = $stmt->fetchAll();
            $rec = count($result);

            if ($rec == 0) {
                // User hasn't applied yet, show the application form
                $showForm = true;
            } else {
                // User has already applied, show a message instead of the form
                $showForm = false;
                $message = '<div class="alert alert-warning">
                             You have already applied for this job before. You cannot apply again.
                           </div>';
            }

        } catch (PDOException $e) {
            $message = '<div class="alert alert-danger">
                         Error: ' . $e->getMessage() . '
                       </div>';
        }
        
    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
        
        $stmt = $conn->prepare("INSERT INTO tbl_job_applications (member_no, job_id, application_date)
        VALUES (:memberno, :jobid, :appdate)");
        $stmt->bindParam(':memberno', $myid);
        $stmt->bindParam(':jobid', $opt);
        $stmt->bindParam(':appdate', $apply_date);
        $stmt->execute();
        
       
        
                          
        }catch(PDOException $e)
        {
    
        }
    
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Application Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            padding: 20px;
        }

        form {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        label {
            font-weight: bold;
        }

        input[type="text"],
        input[type="email"],
        input[type="tel"],
        input[type="number"],
        textarea,
        input[type="file"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        textarea {
            height: 100px;
        }

        input[type="submit"] {
            background-color: #007bff;
            color: #ffffff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        .alert {
            padding: 10px;
            margin-bottom: 20px;
            border-radius: 5px;
        }

        .alert-success {
            background-color: #d4edda;
            border-color: #c3e6cb;
            color: #155724;
        }

        .alert-warning {
            background-color: #fff3cd;
            border-color: #ffeeba;
            color: #856404;
        }

        .alert-danger {
            background-color: #f8d7da;
            border-color: #f5c6cb;
            color: #721c24;
        }
    </style>
</head>
<body>
<?php if(isset($showForm) && $showForm): ?>
    <!-- Show the application form -->
    <h2>Faculty Recruitment Form</h2>
    <form method="post" action="process_faculty_application.php" onsubmit="return validateForm()" enctype="multipart/form-data">
    <!-- Your form fields go here -->
    <label for="name" class="required">Name:</label><br>
    <input type="text" id="name" name="name" required><br>

    <label for="email" class="required">Email:</label><br>
    <input type="email" id="email" name="email" required><br>

    <label for="phone" class="required">Phone:</label><br>
    <input type="tel" id="phone" name="phone" required><br>

    <label for="resume" class="required">Resume:</label><br>
    <input type="file" id="resume" name="resume" accept=".pdf,.doc,.docx" required><br>

    <label for="cover_letter">Cover Letter:</label><br>
    <textarea id="cover_letter" name="cover_letter" rows="4" cols="50"></textarea><br>

    <label for="education" class="required">Highest Education Qualification:</label><br>
    <input type="text" id="education" name="education" required><br>

    <label for="experience" class="required">Years of Experience:</label><br>
    <input type="number" id="experience" name="experience" required><br>

    <label for="specialization" class="required">Field of Specialization:</label><br>
    <input type="text" id="specialization" name="specialization" required><br>

    <label for="publications">List of Publications:</label><br>
    <textarea id="publications" name="publications" rows="4" cols="50"></textarea><br>

    <label for="references">References:</label><br>
    <textarea id="references" name="references" rows="4" cols="50"></textarea><br>

    <input type="submit" value="Submit">
</form>

    <script>
        function validateForm() {
            var valid = true;

            // Reset error messages
            var errorElements = document.getElementsByClassName("error-message");
            for (var i = 0; i < errorElements.length; i++) {
                errorElements[i].innerHTML = "";
            }

            // Validate each required field
            if (document.getElementById("name").value == "") {
                document.getElementById("name-error").innerHTML = "Please fill in this field";
                valid = false;
            }
            if (document.getElementById("email").value == "") {
                document.getElementById("email-error").innerHTML = "Please fill in this field";
                valid = false;
            }
            if (document.getElementById("phone").value == "") {
                document.getElementById("phone-error").innerHTML = "Please fill in this field";
                valid = false;
            }
            if (document.getElementById("resume").value == "") {
                document.getElementById("resume-error").innerHTML = "Please upload your resume";
                valid = false;
            }

            // Add validation for other fields as needed

            return valid;
        }
    </script>
<?php else: ?>
    <!-- Show the message -->
    <?php echo $message; ?>
<?php endif; ?>
</body>
</html>