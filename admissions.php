<?php include 'header.php'; ?>

<?php
// Process form submission if the request method is POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Include the database connection file
    include 'db.php';

    // Retrieve form data
    $studentName = $_POST['studentName'];
    $parentName  = $_POST['parentName'];
    $contact     = $_POST['contact'];
    $email       = $_POST['email'];

    // Prepare an SQL statement to insert data into the admissions table
    $sql = "INSERT INTO admissions (student_name, parent_name, contact, email) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    if (!$stmt) {
        die("Prepare statement failed: " . $conn->error);
    }
    
    // Bind parameters to the SQL statement
    $stmt->bind_param("ssss", $studentName, $parentName, $contact, $email);

    // Execute the statement and provide feedback
    if ($stmt->execute()) {
        echo "<script>alert('Application submitted successfully!'); window.location.href='admissions.php';</script>";
    } else {
        echo "<script>alert('Error submitting application.'); window.location.href='admissions.php';</script>";
    }
    
    // Close the statement and connection
    $stmt->close();
    $conn->close();
}
?>

<style>
    .admissions-container {
        max-width: 800px;
        margin: 50px auto;
        background: rgba(255, 255, 255, 0.9);
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        text-align: center;
        color: black;
    }
    .admissions-container h2 {
        color: #4c6ef5;
    }
    .admissions-container p {
        font-size: 1.1em;
    }
    .admissions-container img {
        width: 100%;
        max-width: 600px;
        border-radius: 10px;
        margin: 20px 0;
    }
    .admissions-form {
        text-align: left;
    }
    .admissions-form label {
        font-weight: bold;
        display: block;
        margin: 10px 0 5px;
    }
    .admissions-form input {
        width: 100%;
        padding: 10px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }
    .admissions-form button {
        background: #4c6ef5;
        color: white;
        padding: 10px 15px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-size: 1.1em;
        transition: background 0.3s;
    }
    .admissions-form button:hover {
        background: #15aabf;
    }
</style>

<section class="admissions-container">
    <h2>Admissions</h2>
    <p>Interested in joining our school? Please complete the form below.</p>
    <img src="placeholder.jpg" alt="Smiling student in class">
    <form class="admissions-form" method="post" action="admissions.php" aria-label="Admissions Form">
        <label for="studentName">Student Name:</label>
        <input type="text" id="studentName" name="studentName" required aria-required="true">
        
        <label for="parentName">Parent/Guardian Name:</label>
        <input type="text" id="parentName" name="parentName" required aria-required="true">
        
        <label for="contact">Contact Number:</label>
        <input type="tel" id="contact" name="contact" required aria-required="true">
        
        <label for="email">Email Address:</label>
        <input type="email" id="email" name="email" required aria-required="true">
        
        <button type="submit">Apply Now</button>
    </form>
</section>

<?php include 'footer.php'; ?>
