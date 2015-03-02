<?php echo include 'header.php'; ?>
<br><br><br><br>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">Add New Artikel</h3>
				</div>
				<div class="panel-body">
					<?php echo form_open('dashboard/addartikel'); ?>
					<div class="col-md-8">
						<input type="text" name="judul" class="form-control input-lg " Placeholder="Masukan Judul Disini" required><br>
						<label class="col-md-0 label-control">Pilih Katagori</label>
						<div class="col-md-0">
							<select class="form-control input-lg" name="katagori">
								  <option>Pilih Katagori</option>
								  <option value="php">PHP</option>
								  <option value="html">HTML</option>
							</select>
						</div><br>
						<textarea name="isi" id="" cols="20" rows="20" class="form-control"></textarea>
					</div>
					<button class=" col-md-4 btn-info btn-lg">Publish</button>
				</div>
			</div>
		</div>
	</div>
</div>