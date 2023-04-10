<?php
// Get the form data
$doctor = $_POST['Doctor'];
$name = $_POST['name'];
$email = $_POST['Email'];
$subject = $_POST['Subject'];
$message = $_POST['message'];

// Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "contact_form";

$conn = mysqli_connect("localhost", "root", "", "contact_form");

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Save the data to the database
$sql = "INSERT INTO contact_form (doctor, name, email, subject, message)
VALUES ('$doctor', '$name', '$email', '$subject', '$message')";

if (mysqli_query($conn, $sql)) {
  header("Location: ".$_SERVER['PHP_SELF']);
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
