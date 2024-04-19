<?php
// Include database configuration
require 'constants/db_config.php';

// Connect to the database
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Fetch data for applicants per year
    $stmt = $conn->prepare("SELECT YEAR(application_date) AS year, COUNT(*) AS applicant_count FROM tbl_job_applications GROUP BY YEAR(application_date)");
    $stmt->execute();
    $applicant_data = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Convert applicant data to JSON for JavaScript
    $applicant_data_json = json_encode($applicant_data);

    // Fetch data for jobs per category
    $stmt = $conn->prepare("SELECT category, COUNT(*) AS job_count FROM tbl_jobs GROUP BY category");
    $stmt->execute();
    $job_data = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Convert job data to JSON for JavaScript
    $job_data_json = json_encode($job_data);

    // Fetch data for overall number of pending applications for employers
    $stmt = $conn->prepare("SELECT COUNT(*) AS pending_applications FROM tbl_faculty_applications WHERE application_status = 'pending'");
    $stmt->execute();
    $pending_applications_result = $stmt->fetch();
    $pending_applications_count = $pending_applications_result['pending_applications'];

    // Fetch data for overall number of jobs
    $stmt = $conn->prepare("SELECT COUNT(*) AS total_jobs FROM tbl_jobs");
    $stmt->execute();
    $total_jobs_result = $stmt->fetch();
    $total_jobs_count = $total_jobs_result['total_jobs'];

} catch (PDOException $e) {
    // Handle database connection errors
    echo "<b>Error:</b> " . $e->getMessage();
}

// Close the database connection
$conn = null;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Applicants per Year and Jobs per Category</title>
    <!-- Include required libraries for chart -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <div style="width: 80%; margin: auto;">
        <!-- Chart for Applicants per Year -->
        <canvas id="applicantsChart"></canvas>
        <!-- Chart for Jobs per Category -->
        <canvas id="jobsChart"></canvas>
        <!-- Display overall number of pending applications for employers and total number of jobs -->
        <div>
            <p><b>Overall Number of Pending Applications for Employers:</b> <?php echo $pending_applications_count; ?></p>
            <p><b>Total Number of Jobs:</b> <?php echo $total_jobs_count; ?></p>
        </div>
    </div>

    <script>
        // Parse JSON data for applicants per year
        var applicantData = <?php echo $applicant_data_json; ?>;
        var years = applicantData.map(function(item) {
            return item.year;
        });
        var applicantCounts = applicantData.map(function(item) {
            return item.applicant_count;
        });

        // Create chart for applicants per year
        var ctxApplicants = document.getElementById('applicantsChart').getContext('2d');
        var applicantsChart = new Chart(ctxApplicants, {
            type: 'line',
            data: {
                labels: years,
                datasets: [{
                    label: 'Number of Applicants',
                    data: applicantCounts,
                    backgroundColor: 'rgba(54, 162, 235, 0.2)',
                    borderColor: 'rgba(54, 162, 235, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        scaleLabel: {
                            display: true,
                            labelString: 'Number of Applicants'
                        },
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });

        // Parse JSON data for jobs per category
        var jobData = <?php echo $job_data_json; ?>;
        var categorys = jobData.map(function(item) {
            return item.category;
        });
        var jobCounts = jobData.map(function(item) {
            return item.job_count;
        });

        // Create chart for jobs per category
        var ctxJobs = document.getElementById('jobsChart').getContext('2d');
        var jobsChart = new Chart(ctxJobs, {
            type: 'bar',
            data: {
                labels: categorys,
                datasets: [{
                    label: 'Number of Jobs',
                    data: jobCounts,
                    backgroundColor: 'rgba(255, 99, 132, 0.2)',
                    borderColor: 'rgba(255, 99, 132, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        scaleLabel: {
                            display: true,
                            labelString: 'Number of Jobs'
                        },
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });
    </script>
</body>
</html>
