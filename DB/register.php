<?php

include 'connection.php';

if(isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "INSERT INTO users(username,password) VALUES ('$username','$password')";

    $result = mysqli_query($connection,$query);

    if(!$result) {
        die("Query Failed!".mysqli_error());
    }
}