<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> Arquivo Morto - login</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-6 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            
                            <div class="col-lg-12">
                                <div class="p-5">
                                <div class="col-auto">
                                    <div class="text-center">
                                        <img src="img/arquivo.png" alt="" class="img-fluid" width="90" height="90">
                                    </div>
                                </div>
                                    <div class="text-center">
                                    <h1 class="h3 text-gray-900 mb-4 font-weight-bold">  Login </h1>
                                    </div>
                                    <form class="user" name="flogin" method="POST" action="login.php">
                                        <div class="form-group">
                                            <input type="email" class="form-control form-control-user"
                                                id="email" name="email" aria-describedby="emailHelp"
                                                placeholder="Informe seu e-mail...">
                                            </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user"
                                                id="senha" name="senha" placeholder="senha">
                                            </div>
                                        <button type="submit" class="btn btn-lg btn-primary btn-user btn-block"><i class="fa fa-lock-open"></i> Entrar</button>
                                        
                                        <hr>
										<?php
										   if(isset($_GET['login'])){
											   if ($_GET['login']=='erro'){
												   echo    '<div class="alert alert-danger alert-dismissible fade show" role="alert">
															  <strong>Atencao!</strong> Usuario ou senha invalidos!.
															  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
																<span aria-hidden="true">&times;</span>
															  </button>
															</div>';
											   }
										   }
										   if(isset($_GET['sessao'])){
											   if ($_GET['sessao']=='erro'){
												   echo    '<div class="alert alert-warning alert-dismissible fade show" role="alert">
															  <strong>Atencao!</strong> Fa?a login para continuar!.
															  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
																<span aria-hidden="true">&times;</span>
															  </button>
															</div>';
											   }
										   }
										   if(isset($_GET['logout'])){
											   if ($_GET['logout']=='ok'){
												   echo    '<div class="alert alert-success alert-dismissible fade show" role="alert">
															  <strong>Atencao!</strong> Logout realizado com sucesso!.
															  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
																<span aria-hidden="true">&times;</span>
															  </button>
															</div>';
											   }
										   }
										?>
                                        
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