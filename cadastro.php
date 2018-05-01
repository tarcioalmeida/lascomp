<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>LASCOMP</title>
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
</head>

<body class="bg-dark">
  <div class="container">
    <div class="card card-register mx-auto mt-5">
      <div class="card-header"><center>Registrar-se</center></div>
      <div class="card-body">
          <form method="post" action="conect.php" >
          <div class="form-group">
            <div class="form-row">
                <label for="exampleInputName">Nome</label>
                <input class="form-control" id="exampleInputName" name="nome" type="text" aria-describedby="nameHelp" placeholder="Nome">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Endereço E-mail</label>
            <input class="form-control" id="exampleInputEmail1" name="email" type="email" aria-describedby="emailHelp" placeholder="Entre com e-mail">
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="exampleInputPassword1">Senha</label>
                <input class="form-control" id="exampleInputPassword1" maxlength="10" name="senha" type="password" placeholder="Senha">
              </div>
              <div class="col-md-6">
                <label for="exampleConfirmPassword">Confirmar senha</label>
                <input class="form-control" id="exampleConfirmPassword" maxlength="10" name="Confirmarsenha" type="password" placeholder="Confirmar senha">
              </div>
            </div>
          </div>
           <input type="submit" name="enviar" value="Registrar" class="btn btn-primary btn-block"/>
        </form>
        <div class="text-center">
          <a class="d-block small mt-3" href="login.html">Login</a>
          <a class="d-block small" href="forgot-password.html">Esqueceu a senha?</a>
        </div>
      </div>
    </div>
  </div>
  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
</body>

</html>
