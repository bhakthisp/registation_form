<?php
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$dob = $_POST['dob'];
$gender = $_POST['gender'];
$address = $_POST['address'];

$qualification = $_POST['qualification'];
$college = $_POST['college'];
$year = $_POST['year'];
$percentage = $_POST['percentage'];

$skills = isset($_POST['skills']) ? $_POST['skills'] : [];
$hobbies = $_POST['hobbies'];

$emergency_name = $_POST['emergency_name'];
$relationship = $_POST['relationship'];
$emergency_phone = $_POST['emergency_phone'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Submitted Application</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<header>
    <h1>Application Submitted Successfully</h1>
</header>

<div class="container">
    <h2>Applicant Details</h2>

    <p><strong>Name:</strong> <?php echo $name; ?></p>
    <p><strong>Email:</strong> <?php echo $email; ?></p>
    <p><strong>Phone:</strong> <?php echo $phone; ?></p>
    <p><strong>Date of Birth:</strong> <?php echo $dob; ?></p>
    <p><strong>Gender:</strong> <?php echo $gender; ?></p>
    <p><strong>Address:</strong><br><?php echo nl2br($address); ?></p>

    <h3>Education</h3>
    <p><strong>Qualification:</strong> <?php echo $qualification; ?></p>
    <p><strong>Institution:</strong> <?php echo $college; ?></p>
    <p><strong>Year of Passing:</strong> <?php echo $year; ?></p>
    <p><strong>Percentage / CGPA:</strong> <?php echo $percentage; ?></p>

    <h3>Skills / Hobbies</h3>
    <p><strong>Skills:</strong> <?php echo implode(", ", $skills); ?></p>
    <p><strong>Hobbies:</strong> <?php echo nl2br($hobbies); ?></p>

    <h3>Emergency Contact</h3>
    <p><strong>Name:</strong> <?php echo $emergency_name; ?></p>
    <p><strong>Relationship:</strong> <?php echo $relationship; ?></p>
    <p><strong>Phone:</strong> <?php echo $emergency_phone; ?></p>
</div>

</body>
</html>

