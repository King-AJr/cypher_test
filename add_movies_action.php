<?php
include "connection.php";

$title = $_POST['title'];
$description = $_POST['description'];
$rating = $_POST['rating'];

echo $description;

$connect = "INSERT into movies (title, rating, description) VALUES('$title', '$rating', '$description')";

$putin = $conn->query($connect);

if($putin == true) {
    echo " registeration successful";
} else {
    echo $conn->error;
}

?>