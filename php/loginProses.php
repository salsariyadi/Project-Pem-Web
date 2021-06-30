<?php

include 'connection.php';

            if(isset($_POST['submit'])){

                $username = $_POST['username'];
                $password = $_POST['password'];

                $datacheck = mysqli_query($connect, "SELECT * FROM user WHERE username = '$username' AND password = '$password'");
                $result = mysqli_fetch_array($datacheck);
                $status = $result['status'];
                $login_user = $result['username'];
                $row = mysqli_num_rows($datacheck);

                //cek kondisi login
                if($row > 0){
                    session_start();
                    $_SESSION['login_user'] = $login_user;

                    if ($status == 'user'){
                        header('location: homeUser.php');
                    }elseif ($status == 'admin'){
                        header('location: homeAdmin.php');
                    }else{
                        header('location: login.php');
                    }
                }
            }
            ?>
