
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
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $dob = $_POST['dob'];
}
// Attempt to insert data into the database
$sql = " INSERT INTO userdetails (Full_name, Email, Address, Dob) VALUES('$name', '$email','$address','$dob') ON DUPLICATE KEY UPDATE Full_name='$name', Email='$email', Address='$address',Dob='$dob' ";

if ($conn->query($sql) === TRUE) {

    exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close connection
$conn->close();
?>