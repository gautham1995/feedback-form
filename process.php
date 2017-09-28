<?php
$servername = "localhost";
$username = "root";
$password = "gautham";
$dbname = "response";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
date_default_timezone_set("Asia/Kolkata");
//echo date("Y M d")."<br>";

$name = addslashes($_POST['name']);
$mail = addslashes($_POST['email']);
$city = addslashes($_POST['city']);
$rating = addslashes($_POST['optradio']);
$title = addslashes($_POST['title']);
$comment = addslashes($_POST['comment']);
$date = date("d");
$month = date("M");
$year = date("Y");





if (is_null($name) || $mail == "") {
	echo "<h1>You are not allowed to open this page</h1>";
    header('Location: index.php');
}
else{
$sql = "INSERT INTO `feedback`(`name`, `mail`, `city`, `rating`, `title`, `comment`, `date`, `month`, `year`) VALUES ('$name', '$mail', '$city', '$rating', '$title', '$comment', '$date', '$month', '$year')";

if (mysqli_query($conn, $sql)) {
    echo "Thanks for your feedback";
    header('Location: index.php');
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    header('Location: index.php');
}
}

mysqli_close($conn);
?>