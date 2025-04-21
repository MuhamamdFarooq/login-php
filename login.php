<?php

$conn = mysqli_connect('localhost', 'root', "", 'login');

if (isset($_POST['login'])) {

    $user = $_POST['username'];
    $pass = $_POST['password'];

   
    $query = "INSERT INTO log (username, password) 
              VALUES ('$user', '$pass')"; 

    $result = mysqli_query($conn, $query);

    if ($result) {
        echo "record inserted";
    } 
}
?>
