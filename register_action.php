<?php
include "connection.php";

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$phone = $_POST['phone'];

echo $phone;

$sql = "INSERT into users (name, email, password, phone) VALUES('$name', '$email', '$password', '$phone')";

$insert = $conn->query($sql);

if($insert == true) {
    echo "registeration successful";
} else {
    echo $conn->error;
}

?>