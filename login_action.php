<?php
include "connection.php";

$email = $_POST['email'];
$password = $_POST['password'];

//hashing password
//$pasword = sha1(md5($password));

echo $email;

$login = "SELECT * FROM  users WHERE email = '$email' AND password = '$password' ";


$check = $conn->query($login);

if($check->num_rows > 0) {
    $user = $check->fetch_assoc();
    //start session
    
    //store user information in session
    $_SESSION['user'] = $user;
    $_SESSION['message'] = "login successful";
    echo "registeration successful";
    //redirect to index.php
    header("location: index.php");

} else {
    $_SESSION['message'] = "invalid credentials";
    header("location: index.php");
}

?>