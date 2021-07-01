<?php
    include 'connection.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Nama Band</title>
        <meta charset="utf-8">
        <meta name="veiwport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="../bootstrap-5.0.0-beta3-dist/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="../css/styleCSS.css">
    </head>
    <body>
        <div class="container">
                <br>
                <br>
                <br>
                <br>
                <div class="section-headline text-center" style="color: whitesmoke;">
                    <h1>Winter-<strong>Camp</strong></h1>
                </div>
                <br>
            <div class="section-headline">
                <center>
                    <table class="border border-2 border-light" style="background-color: rgba(255, 255, 255, 0.466);">
                        <tr>
                            <td>
                                <form method="POST" action="" >
                                    <br>
                                    <div class="section-headline text-center">
                                        <h3>Login</h3>
                                        <!-- <hr width="50%"> -->
                                    </div>
                                    <div class="p-5">
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Username</label>
                                            <input type="text" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                            <div id="emailHelp" class="form-text">Isikan username anda.</div>
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputPassword1" class="form-label">Password</label>
                                            <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                                        </div>
                                        <a href="daftar.php" style="text-decoration: none; color:rgb(19, 0, 187);">Belum mempunyai akun? daftar.</a>
                                        &nbsp;&nbsp;
                                        &nbsp;&nbsp;
                                        &nbsp;&nbsp;
                                        &nbsp;&nbsp;
                                        <a href="index.html" style="text-decoration: none; color:rgb(19, 0, 187);">Kembali ke website</a>
                                        <br>
                                        <br>
                                        <div class="section-headline text-center">
                                            <button type="submit" name="submit" class="btn btn-outline-dark">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </td>
                        </tr>
                    </table>
                </center>
            </div>
        </div>

            <?php
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

            <script type="text/javascript" src="../bootstrap-5.0.0-beta3-dist/js/bootstrap.min.js"></script>
            <script type="text/javascript" src="../jquery-3.6.0.js"></script>
    </body>
</html>
