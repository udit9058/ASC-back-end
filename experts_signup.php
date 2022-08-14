<?php
// $email_address = $_POST['Email_address'];

// $example_textarea = $_POST['Example_textarea'];
// Database connection
$conn = new mysqli('localhost','root','','asc');
if($conn->connect_error){
    echo "$conn->connect_error";
    die("Connection Failed : ". $conn->connect_error);
} else {


$userName = $_POST["userName"];
$password = $_POST['password'];
$email = $_POST['email'];

    $sql = "INSERT INTO signip_experts (username, password,email)
VALUES ('$userName', '$password','$email')";

if ($conn->query($sql) === TRUE) {
echo "New record created successfully";
} else {
echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

}
?>