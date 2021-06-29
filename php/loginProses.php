<?php
    include "connection.php";

    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $query = "SELECT * FROM user WHERE username='$username' AND password='$password'";
    $result = mysqli_query($connect, $query);
    $row = mysqli_fetch_assoc($result);

    if($row['level'] == 1){
        echo readfile("homeAdmin.php");
    } elseif($row['level'] == 2){
        echo readfile("homeUser.php");
    } else{
        echo mysqli_error($connect);
    }
?>