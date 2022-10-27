<?php
session_start();
$conn = new mysqli('localhost', 'root', '', 'cypher_test');
/*$conn = new mysqli('localhost', 'root', 'root', 'cypher_test', 8889); for mac 

$sql = "SELECT * FROM users";
$get_users = $conn->query($sql);

//fetch_assoc() converts sql to html
while($user = $get_users->fetch_assoc()){
    echo $user['name'] . '<br>';
}*/
?>