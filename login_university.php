<?php

$email = $_POST["email"];
$password = $_POST['password'];

$conn = new mysqli('localhost','root','','asc');
if($conn->connect_error){
    echo "$conn->connect_error";
    die("Connection Failed : ". $conn->connect_error);
} else {

//     $sql = "INSERT INTO register (email, password )
// VALUES ('$email', '$password')";
// session_start();


$loginqry = "select* from signup_university where email='$email'and password='$password'";
// $res = mysqli_query($cser,"select* from users where uname='$email'and upassword='$password'");
// $result=mysqli_query($conn, $loginqry);


}

?>