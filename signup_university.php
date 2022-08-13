<?php
// $email_address = $_POST['Email_address'];
$email = $_POST["email"];
$password = $_POST['password'];
// $example_textarea = $_POST['Example_textarea'];
// Database connection
$conn = new mysqli('localhost','root','','asc');
if($conn->connect_error){
    echo "$conn->connect_error";
    die("Connection Failed : ". $conn->connect_error);
} else {

    $sql = "INSERT INTO signup_university (email, password )
VALUES ('$email', '$password')";

if ($conn->query($sql) === TRUE) {
echo "New record created successfully";
} else {
echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

}
?>