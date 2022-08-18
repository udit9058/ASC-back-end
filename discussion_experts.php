<?php
// $email_address = $_POST['Email_address'];

// $example_textarea = $_POST['Example_textarea'];
// Database connection
$conn = new mysqli('localhost','root','','asc');
if($conn->connect_error){
    echo "$conn->connect_error";
    die("Connection Failed : ". $conn->connect_error);
} else {


// $university = $_POST["university"];
// $program = $_POST["program"];
// $branch = $_POST["branch"];
// $semester = $_POST["semester"];
// $subject = $_POST["subject"];
$rating = $_POST["rating"];

// $password = $_POST['password'];
// $email = $_POST['email'];

    $sql = "INSERT INTO discussion_experts (rating) VALUES ('$rating')";

if ($conn->query($sql) === TRUE) {
echo "New record created successfully";
header("Location: http://localhost/ASC-full-app/Discussion_experts.html");
}else{
echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

}
?>