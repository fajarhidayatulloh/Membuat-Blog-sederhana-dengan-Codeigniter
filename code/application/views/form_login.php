<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Selamat Datang</title>

    <!-- Bootstrap core CSS -->
    <!--<link href="../../assets/css/bootstrap.min.css" rel="stylesheet">-->
    <?php echo link_tag('assets/css/bootstrap.min.css') ?>
    <?php echo link_tag('assets/css/bootstrap.css') ?>
    <!-- Custom styles for this template -->
    <link href="navbar-fixed-top.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <!-- Fixed navbar -->
    <nav class="navbar navbar-inverse navbar-static-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Code Learning</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href=""></a></li>
                <li><a href=""></a></li>
              </ul>
            </li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><?php echo anchor('welcome/login','Login') ?></li>
            <li><?php echo anchor('welcome/daftar','Daftar') ?></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
    

    <div class="container">
    
      <!-- Main component for a primary marketing message or call to action -->
      <div class="jumbotron">
        <h1>Selamat Datang</h1>
        <p></p>
        
        <p>
          <a class="btn btn-lg btn-primary" href="" role="button"> &raquo;</a>
        </p>
      </div>

    </div> <!-- /container -->

    <div class="container">
     <div class="col-md-3"></div>
       <div class="col-md-6">
         <div class="panel panel-info panel-body">
          <div class="page-header" style="margin-top:5px;">
            <h5>LOGIN</h5>
          </div>
           <?php echo form_open('welcome/login'); ?>
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                <input type="text" class="form-control"  name="username" placeholder="Username" required><br>
             </div><br>
              <div class="input-group">
                <span class="input-group-addon"><span class="glyphicon glyphicon-star"></span></span>
                <input type="password" class="form-control" id="password" name="password" placeholder="Password" required><br>
             </div><br>
             <button type="submit" class="btn btn-primary">Login</button>
             <a href="">Lupa Password</a>
            </div>
         </div>
       </div>
     

    </div>
      <div class="footer">
        <div class="container">
          <p>&copy; Fajar Hidayatulloh 2014</p>
        </div>
      </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>