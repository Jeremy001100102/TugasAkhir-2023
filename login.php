
<?php   
session_start();
require 'functions.php'; 


if (isset($_COOKIE['id']) && isset($_COOKIE['key'])) {

    $id = $_COOKIE['id'];
    $key = $_COOKIE['key'];

        // ambil username berdasarkan id
    $result = mysqli_query($conn, "SELECT username FROM data_users WHERE id = $id ");
    $row = mysqli_fetch_assoc($result);


        //cek cookie dan username
    if( $key === hash('sha256', $row['username'])){
        $_SESSION['login'] = true;
        $_SESSION['username'] = $row['username'];
    }

}


if(isset($_SESSION['login'])){
    header("Location: index.php");
    exit;
}



if(isset($_POST['login'])){

    $username = $_POST['username'];
    $password = $_POST['password'];

    $result = mysqli_query($conn, "SELECT * FROM data_users WHERE username = '$username'");


        //cek username
    if( mysqli_num_rows($result) === 1 ) {

            //cek password
        $row = mysqli_fetch_assoc($result);
        if(password_verify($password, $row['password'])){
            $_SESSION['login'] = true;
            $_SESSION['username'] = $row['username'];
                //cek remember
            if(isset($_POST['remember'])){
                setcookie('id', $row['id'], time()+60*60);
                setcookie('key', hash('sha256', $row['username']), time() + 60*60);
            }
            header("Location: index.php");
            exit;
        }
    }

    $error = true;
}




?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=1024">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
    href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
    rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
     <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>

<body class="bg-gradient-secondary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row d-flex justify-content-center align-self-center">

            <div class="col-xl-10 col-lg-12 col-md-9 ">

                <div class="card o-hidden border-0 shadow-lg mx-auto my-5 w-75 align-self-center">
                    <div class="card-body p-5 my-1">
                        <!-- Nested Row within Card Body -->
                        <div class="row">

                            <div class="col-lg-12">
                                <div class="p-5">
                                    <div class="text-center">
                                         <h1 class="h1 text-gray-900 mb-4">Selamat Datang!</h1>
                                        <h3 class="text-gray-900 mb-4">Simulasi Monte Carlo Prediksi Jumlah Korban Kecelakaan Lalu Lintas Kota Kupang </h3>
                                       
                                    </div>
                                    <?php if(isset($error))  : ?>
                                        <?php  echo "
                                        <script>
                                        Swal.fire({
                                          icon: 'error',
                                          title: 'Gagal!',
                                          text: ' Username / Password salah!'

                                          });
                                          </script>
                                          ";
                                          ?>
                                          <div class="alert alert-danger" role="alert">
                                              Username / Password salah!
                                          </div>
                                      <?php endif ?>
                                      <form class="user" method="POST">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user"
                                            placeholder="Enter Username..."
                                            name="username">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user"
                                            id="exampleInputPassword" placeholder="Password" name="password">
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="customCheck" name="remember">
                                                <label class="custom-control-label" for="customCheck">Remember
                                                Me</label>
                                            </div>
                                        </div>
                                        <button  type="submit" class="btn btn-primary btn-user btn-block" name="login">
                                            Login
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>