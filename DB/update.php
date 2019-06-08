<?php
include 'connection.php';

if(isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $id = $_POST['id'];

    $query = "UPDATE users SET username='$username', password='$password' WHERE id = '$id'";

    $result = mysqli_query($connection, $query);
    if(!$result) {
        die("UPDATE FAILED");
    }

}

?>