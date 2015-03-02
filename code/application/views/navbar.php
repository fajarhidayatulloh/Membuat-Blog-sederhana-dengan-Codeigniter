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
    <?php echo link_tag('assets/css/bootstrap.min.css');?>
    <?php echo link_tag('assets/css/bootstrap.css'); ?>
    <?php echo link_tag('assets/css/carousel.css'); ?>
    <?php echo link_tag('assets/css/footer.css'); ?>
    <?php echo link_tag('assets/css/fonts.css'); ?>
    <!--<link href="assets/css/bootstrap.min.css" rel="stylesheet">-->

    <!-- Custom styles for this template -->
    <link href="navbar-fixed-top.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="assets/js/ie-emulation-modes-warning.js"></script>
    <script src="<?php echo link_tag('assets/js/main.js'); ?>"></script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-fixed-top" style="height:60px;" role="navigation">
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
          <ul class="nav navbar-nav navbar-right">
            <li><?php echo anchor('','Home'); ?></li>
           
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Tutorial PHP</a>
              <ul class="dropdown-menu" role="menu">
                <li><?php echo anchor('','Tingkat Dasar'); ?></li>
                <li><?php echo anchor('','Tingkat Menengah'); ?></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Tutorial CodeIgniter</a>
              <ul class="dropdown-menu" role="menu">
                <li><?php echo anchor('','Tingkat Dasar'); ?></li>
                <li><?php echo anchor('','Tingkat Menengah'); ?></li>
            </li>
          </ul>
          <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><span class="glyphicon glyphicon-search"></span></a>
              <ul class="dropdown-menu" role="menu">
                <form action="" class="form-group">
                   <div class="container2">
                     <div class="col-md-10">
                        <input type="text" name="search" class="form-control " placeholder="Search Artikel" required>
                     </div>
                     <button class="btn btn-primary"><span class="glyphicon glyphicon-search"></span></button>
                   </div>
                </form>
              </li>
          </ul>
          <!--<ul class="nav navbar-nav navbar-right">
            <li><?php //echo anchor('welcome/login','Login'); ?></li>
            <li><?php //echo anchor('welcome/daftar','Daftar') ?></li>
          </ul>-->
        </div><!--/.nav-collapse -->
      </div>
    </nav>
   
   <br>
   <br>
   <br>
   <br>
   

    