<?php echo include 'header.php'; ?>
<br><br><br><br>
<div class="container">
	<div class="row">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">All Artikel</h3>
			</div>
			<div class="panel-body">

				<a class="btn btn-info btn-lg" href="addartikel">Add New Artikel</a><br><br>
				<div class="col-md-2">	
					<div class="col-md-0">
						<select name="" id="" class="form-control">
							<option value="">Date</option>
						</select>
					</div>
				</div>
				<div class="col-md-2">
					<select name="" id="" class="form-control">
						<option value="">Katagori</option>
					</select>
				</div>
				<div class="col-md-4">
					<form action="" class="form-inline">
						<div class="form-group">
							<input type="text" name="" placeholder="Search" class="form-control">
						</div>
						<button class="btn btn-info">Search</button>
					</form>
				</br>
				</div> 
				<table class="table table-bordered">
					<tr class="info">
						<td><center>No</center></td>
						<td><center>Judul Artikel</center></td>
						<td><center>Penulis</center></td>
						<td><center>Katagori</center></td>
						<td><center>Date</center></td>
					</tr>
					<?php 
					$no=1;
					foreach ($artikel as $r) {
						echo "<tr>
							<td>$no</td>
							<td>$r->artikel_title</td>
							<td>$r->artikel_isi</td>
							<td></td>
							<td>$r->dibuat</td>
						</tr>";
						$no++;
					}
					 ?>
				</table>
			</div>
		</div>
	</div>
</div>