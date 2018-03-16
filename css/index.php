<?php
  session_name("cssid");
  session_start();
  header("Content-Security-Policy: style-src * 'unsafe-inline'; default-src 'self'; ");
  var_dump($_SESSION);
  if(!isset($_SESSION['secret'])) {
    if($_COOKIE['admin-bypass-css'] == 1) {
      $_SESSION['secret'] = "INSO18";
    }
    else {
      $_SESSION['secret'] = bin2hex(openssl_random_pseudo_bytes(8));
    }
  }
if(isset($_POST['url'])){

  if(filter_var($_POST['url'], FILTER_VALIDATE_URL)){
//print(str_replace('\'','\\\'',$msg));
    $domain = parse_url($_POST['url'],PHP_URL_HOST);
    $cmd = 'phantomjs bot.js "'.$_POST['url'].'" '.$domain;
    shell_exec($cmd);
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
        <h1>Extraction CSS</h1>
        <p class="lead">Récupérez la valeur secrète de l'admin</p>
        Secret value: <input id="secret" type="text" disabled value="<?php echo $_SESSION['secret'];?>"/>
        <form id="my_form" method="GET" action="">
          <div class="form-group">
            <label for="message" class="col-sm-2 control-label">Enter your message :</label>
            <textarea name="message" id="message" class="form-control" rows="3"></textarea>
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-default">Submit</button>
          </div>

          <p>You wrote: <?php if(isset($_GET['message'])) {echo htmlentities($_GET['message']);}?></p> 
          <form id="my_form2" method="POST" action="">
          <div class="form-group">
            <label for="message2" class="col-sm-2 control-label">Send URL to admin :</label>
            <input name="url" id="message2" class="form-control" placeholder="http://"/>
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-default">Submit</button>
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
