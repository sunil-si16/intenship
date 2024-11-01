<?php
// Database connection
$conn = new mysqli('localhost', 'root', '', 'faculty_dashboard');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Insert new job
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'];
    $company = $_POST['company'];
    $job_type = $_POST['job_type'];
    $location = $_POST['location'];
    
    $stmt = $conn->prepare("INSERT INTO jobs (title, company, job_type, location) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $title, $company, $job_type, $location);
    $stmt->execute();
    $stmt->close();
}

// Retrieve job listings
$jobs = $conn->query("SELECT * FROM jobs ORDER BY posted_on DESC");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faculty Dashboard</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <div class="logo">
            <h1>Faculty <span>Dashboard</span></h1>
        </div>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
            </ul>
        </nav>
    </header>
    
    <div class="container">
        <button class="post-job-btn" onclick="toggleJobForm()">Post a new job</button>

        <!-- Job Posting Form -->
        <div id="jobForm" style="display: none;">
            <form action="dashboard.php" method="POST" class="job-form">
                <input type="text" name="title" placeholder="Job Title" required>
                <input type="text" name="company" placeholder="Company Name" required>
                <input type="text" name="job_type" placeholder="Job Type" required>
                <input type="text" name="location" placeholder="Location">
                <button type="submit">Add Job</button>
            </form>
        </div>

        <!-- Job Listings -->
        <div class="job-listings">
            <?php while($job = $jobs->fetch_assoc()): ?>
            <div class="job-listing">
                <div class="job-header">
                    <h2><?php echo htmlspecialchars($job['title']); ?> <span class="status">Live</span></h2>
                    <p class="company"><?php echo htmlspecialchars($job['company']); ?></p>
                </div>
                <div class="job-details">
                    <p>Job type: <?php echo htmlspecialchars($job['job_type']); ?></p>
                    <p>Location: <?php echo htmlspecialchars($job['location']); ?></p>
                    <p>Posted On: <?php echo htmlspecialchars($job['posted_on']); ?></p>
                </div>
                <div class="job-actions">
                    <button class="delete-btn" onclick="deleteJob(<?php echo $job['id']; ?>)">Delete Job</button>
                    <div class="share-section">
                        <span>Share this job:</span>
                        <div class="social-icons">
                            <a href="#"><img src="linkedin-icon.png" alt="LinkedIn"></a>
                            <a href="#"><img src="facebook-icon.png" alt="Facebook"></a>
                            <a href="#"><img src="twitter-icon.png" alt="Twitter"></a>
                            <a href="#"><img src="whatsapp-icon.png" alt="WhatsApp"></a>
                            <a href="#"><img src="instagram-icon.png" alt="Instagram"></a>
                        </div>
                    </div>
                    <button class="candidates-btn">All candidates</button>
                </div>
            </div>
            <?php endwhile; ?>
        </div>
    </div>

    <script>
        function toggleJobForm() {
            const form = document.getElementById("jobForm");
            form.style.display = form.style.display === "none" ? "block" : "none";
        }

        function deleteJob(id) {
            if (confirm("Are you sure you want to delete this job?")) {
                window.location.href = `delete_job.php?id=${id}`;
            }
        }
    </script>
</body>
</html>

<?php $conn->close(); ?>
