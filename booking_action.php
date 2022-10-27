<?php

include "connection.php";


$movie_id = $_POST['movie_id'];

    if(isset($_SESSION['user'])) {
        $user_id = $_SESSION['user']['id'];
    }else {
        $_SESSION['message'] = "please log in";
        header("location: index.php");
    }

$sql = "INSERT into bookings (user_id, movie_id, status) VALUES('$user_id', '$movie_id', 'open')";

$insert = $conn->query($sql);

if($insert == true) {
    $_SESSION['message'] = "booking sucessful";
    header('location: index.php');
} else {
    echo $conn->error;
}

?>