<?php

$userName = $_POST["userName"];
$password = $_POST['password'];
//server name, username, password, dbname
$conn = new mysqli('localhost','root','','asc');
if($conn->connect_error){
    echo "$conn->connect_error";
    die("Connection Failed : ". $conn->connect_error);
} else {



$loginqry = "select* from signup_university where user_name='$userName'and password='$password'";
echo "Query executed ";

$result=mysqli_query($conn, $loginqry);
if (mysqli_num_rows($result)===1) {

    $row = mysqli_fetch_assoc($result);

    if ($row['user_name'] === $userName && $row['password'] === $password) {
       header("Location: http://localhost/ASC-full-app/home2.html");
        echo "Logged in!";

        $_SESSION['userName'] = $row['user_name'];

        $_SESSION['password'] = $row['password'];

        exit();

    }else{

        echo "Login sucessfull";     
         
        exit();
    }     
    
}else{
    header("Location: http://localhost/ASC-full-app/home2.html");
 //   echo "Login failed";
    exit();

}

}

?>