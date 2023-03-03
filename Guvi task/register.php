
<?php
// Database connection information
$servername = "localhost";
$username = "root";
$password = "Yukesh@123";
$dbname = "loginsystem";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if(isset($_POST['signup']))
{
$user_name = $_POST['mail'];
$user_password = $_POST['password'];

}
// Attempt to insert data into the database
$sql = "INSERT INTO users(User_name,User_password) VALUES ('$user_name','$user_password')";

if ($conn->query($sql) === TRUE) {
    // echo "New record created successfully";
    header("Location:login.html");
    exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close connection
$conn->close();
?>