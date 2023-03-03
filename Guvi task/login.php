
<?php
// Connect to MySQL database
$servername = "localhost";
$username = "root";
$password = "Yukesh@123";
$dbname = "loginsystem";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Get username and password from form input
$username = mysqli_real_escape_string($conn, $_POST['email']);
$password = mysqli_real_escape_string($conn, $_POST['password']);

// Query the database to check if the username and password match
$sql = "SELECT * FROM users WHERE User_name='$username' AND User_password='$password'";
$result = mysqli_query($conn, $sql);

// If there is a match, redirect to the homepage
if (mysqli_num_rows($result) == 1) {
  header("Location:profile.html");
  exit();
} else {
  echo "Invalid username or password.";
}

mysqli_close($conn);
?>