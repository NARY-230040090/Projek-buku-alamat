<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Halaman Login | Buku Alamat </title>

    
    <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&family=Roboto:wght@300;400;500;700&display=swap"
        rel="stylesheet">

   
    <link href="assets/css/sb-admin-2.min.css" rel="stylesheet">

    <style>
      
        body {
            background-color: #f7c0d2; 
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh; 
            margin: 0; 
        }

      
        .card {
            width: 100%;
            max-width: 400px; 
            margin: 0 auto; 
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1); 
        }

        .card-body {
            padding: 40px;
        }

        .bg-success {
            background-color: #ff66b2; 
            text-align: center;
            padding: 20px;
            margin-bottom: 20px;
        }

        .bg-success h3 {
            color: white;
            font-family: 'Poppins', sans-serif; 
            font-size: 24px;
            font-weight: 600;
            text-transform: uppercase; 
            background: linear-gradient(90deg, #ff66b2, #ff3385); 
            -webkit-background-clip: text; 
            color: transparent;
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3); 
            letter-spacing: 2px;
        }

       
        .form-group input {
            border-radius: 30px; 
        }

        
        .btn-primary {
            background-color: #ff66b2; 
            border-color: #ff66b2;
            border-radius: 30px;
            width: 100%;
            padding: 10px;
        }

        .btn-primary:hover {
            background-color: #ff3385; /* Warna pink lebih gelap saat hover */
            border-color: #ff3385;
        }

        .text-center a {
            color: #ff66b2;
        }
    </style>

</head>

<body>

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <!-- Kolom kanan (form login) -->
                            <div class="col-lg-12">
                                <div class="p-5">
                                    <div class="bg-success">
                                        <h3>Buku Alamat</h3>
                                    </div>
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                                    </div>
                                    <form class="user" action="cek_login.php" method="POST">
                                        <div class="form-group">
                                            <input type="text" name="username" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="emailHelp"
                                                placeholder="Enter username">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="password" class="form-control form-control-user"
                                                id="exampleInputPassword" placeholder="Password">
                                        </div>
                                        <button class="btn btn-primary btn-user btn-block">Login</button>
                                        <hr>
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="forgot-password.html">Buku Alamat | By Nary Indira</a>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

   
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

   
    <script src="assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    
    <script src="assets/js/sb-admin-2.min.js"></script>

</body>

</html>