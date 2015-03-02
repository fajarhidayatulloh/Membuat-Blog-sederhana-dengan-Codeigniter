<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<?php echo link_tag('assets/css/bootstrap.css'); ?>
	<?php echo link_tag('assets/css/bootstrap.min.css'); ?>
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
        </div><!--/.nav-collapse -->
      </div>
    </nav>
	<div class="container">
		<table class="table table-bordered">
			<tr class="info">
				<td><center>No</center></td>
				<td><center>Nama Lengkap</center></td>
				<td><center>Username</center></td>
				<td colspan=2><center>Operator</center></td>
			</tr>
			<?php 
			$no=1;
				foreach ($dt_user as $r) {
					echo "<tr>
							<th><center>$no</center></th>
							<th><center>$r->nama</center></th>
							<th><center>$r->username</center></th>
							<th><center>".anchor($r->id,'Edit')."</center></th>
							<th><center>".anchor($r->id,'Delete')."</center></th>
						 </tr>";
						 $no++;
				}
			 ?>
		</table>
	</div>

	<?php 
		echo form_open('welcome/masukan');
	?>
	<div class="container">
		<div class="form-group">
			<div class="row">
				<div class="col-md-6">
					<div class="panel panel-info panel-body">
						<label for="">Nama Lengkap</label>
						<input type="text" name="nama" class="form-control" placeholder="Masukan Nama Lengkap" required>
						<label for="">Username</label>
						<input type="text" name="username" class="form-control" placeholder="Masukan Username" required>
						<label for="">Password</label>
						<input type="password" name="password" class="form-control" placeholder="Masukan Password" rquired><br>
						<button class="btn btn-info btn-lg">Submit</button>
					</div>
				</div> 
			</div>
		</div>
		<div class="form-group">
			<div class="row">
				<div class="col-md-6">
					<div class="panel panel-info panel-body">
						<label for="">Judul Artikel</label>
						<input type="text" name="judul" class="form-control" placeholder="Masukan Judul Artikel" required>
						<label for="">Isi Artikel</label>
						<textarea name="isi" id="" cols="40" rows="10" class="form-control" required></textarea>
						<button class="btn btn-info btn-lg">Submv                                                       t</button>
					</div>
				</div> 
			</div>
		</div>
	</div>  <!-- /container -->
</body>
</html>

