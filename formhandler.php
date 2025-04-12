<?php
// Include the database connection file
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
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

    // Execute the statement and check for errors
    if ($stmt->execute()) {
        echo "<script>alert('Application submitted successfully!'); window.location.href='admissions.php';</script>";
    } else {
        echo "<script>alert('Error submitting application.'); window.location.href='admissions.php';</script>";
    }

    // Close the statement and the connection
    $stmt->close();
    $conn->close();
}
?>
