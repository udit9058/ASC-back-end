<?php

$email = $_POST["email"];
$password = $_POST['password'];

$conn = new mysqli('localhost','root','','asc');
if($conn->connect_error){
    echo "$conn->connect_error";
    die("Connection Failed : ". $conn->connect_error);
} else {



$loginqry = "select* from signup_university where email='$email'and password='$password'";
echo "Query executed";

$result=mysqli_query($conn, $loginqry);


if (mysqli_num_rows($result) === 1) {

    $row = mysqli_fetch_assoc($result);

    if ($row['email'] === $email && $row['password'] === $password) {

        echo "Logged in!";

        $_SESSION['email'] = $row['email'];

        $_SESSION['id'] = $row['id'];

        exit();

    }else{

        echo "Login sucessfull";
                
        header("Location: http://www.example.com/another-page.php");
        exit();    
    }
}else{
    echo "Login failed";
    exit();

}

}

?>