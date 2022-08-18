<?php

$userName = $_POST["userName"];
$password = $_POST['password'];

$conn = new mysqli('localhost','root','','asc');
if($conn->connect_error){
    echo "$conn->connect_error";
    die("Connection Failed : ". $conn->connect_error);
} else {



$loginqry = "select* from signip_experts where username='$userName'and password='$password'";
echo "Query executed";

$result=mysqli_query($conn, $loginqry);
if (mysqli_num_rows($result) === 1) {

    $row = mysqli_fetch_assoc($result);

    if ($row['username'] === $userName && $row['password'] === $password) {

        echo "Logged in!";

        $_SESSION['userName'] = $row['username'];

        $_SESSION['password'] = $row['password'];

        exit();

    }else{

        echo "Login sucessfull";     
        // header("Location: http://www.example.com/another-page.php");
        exit();
    }     
    
}else{
    header("Location: http://localhost/ASC-full-app/home3.html");
    //echo "Login failed";
    exit();

}

}

?>