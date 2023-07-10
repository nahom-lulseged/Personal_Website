<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "nahomdata";

$connection = mysqli_connect($host, $user, $pass, $db);

mysqli_select_db($connection,"nahomdata");

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Retrieve the form data
  $name = $_POST['Name'] ?? '';
  $number = $_POST['Number'] ?? '';
  $email = $_POST['Email'] ?? '';
  $subject = $_POST['Subject'] ?? '';
  $message = $_POST['Message'] ?? '';

$query = "INSERT INTO `Personal_Website_info`(`Name`,`Number`,`Email`,`Subject`,`Message`) VALUES ('$name','$number','$email','$subject','$message') ";

mysqli_query($connection,$query);

    if ($query) {
        echo "Message sent successfully!";
    } else {
        echo "Failed to send message.";
    }
}

?>