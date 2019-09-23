<?php
if(isset($_POST['message_admin'])){
  $msg=$_POST['message_admin'];
  if(filter_var($_POST['message_admin'], FILTER_VALIDATE_URL)){
//print(str_replace('\'','\\\'',$msg));
    $domain = $_SERVER["HTTP_HOST"];
    $cmd = 'phantomjs bot.js '.escapeshellarg($_POST['message_admin']).' '.escapeshellarg($domain);
    shell_exec($cmd);
  } else {
      echo "INVALID URL: " . $_POST["message_admin"]; exit;
  }

}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Exercices</title>

    <!-- Bootstrap core CSS -->
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="style.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../bootstrap/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../bootstrap/js/ie-emulation-modes-warning.js"></script>
    <script src="angular.min.js"></script>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <?php include('../menu.php'); ?>
      </div>
    </div>

    <div class="container">

      <div class="starter-template">
        <h1>Client-Side Template Injection</h1>
        <p class="lead">Récupérez le cookie de l'admin</p>
        <form id="my_form" method="GET" action="">
          <div class="form-group">
            <label for="message" class="col-sm-2 control-label">Enter your message :</label>
            <textarea name="message" id="message" class="form-control" rows="3"></textarea>
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-default">Submit</button>
          </div>
          <div ng-app="">

          <p>You wrote: <?php if(isset($_GET['message'])) {echo htmlentities($_GET['message']);}?></p> 

          </div>
        </form>
      </div>

      <div class="starter-template">
        <form id="my_form" method="POST" action="">
          <div class="form-group">
            <label for="message" class="col-sm-2 control-label">Send URL to admin :</label>
            <textarea name="message_admin" id="message_admin" class="form-control" rows="1"></textarea>
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-default">Send to admin</button>
          </div>
          <div ng-app="">

          </div>
        </form>
      </div>

    </div><!-- /.container -->




    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../bootstrap/js/jquery.min.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../bootstrap/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
