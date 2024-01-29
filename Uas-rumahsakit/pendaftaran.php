<?php include "header.php"; ?>

<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2 class="text-center">Pendaftaran Pasien</h2>

					<?php 

					if(@$_GET['pesan']=="inputBerhasil"){

					?>
									<div class="alert alert-success">
									Terima kasih, data anda berhasil terkirim!
									</div>
					<?php

					}

					?>

			<form action="proses-pendaftaran.php" method="post">

				<div class="form-group">
					<label for="nik">Nik</label>
					<input type="number" class="form-control" name="nik" placeholder="Isikan Nik">
				</div>

				<div class="form-group">
					<label for="nama">Nama</label>
					<input type="text" class="form-control" name="nama" placeholder="Isikan nama Lengkap">
				</div>

				   <div class="form-group">
              <label for="jenis_kelamin">Jenis Kelamin</label>
              <select name="jenis_kelamin" class="form-control">
                <option value="Laki-laki">Laki-Laki</option>
                <option value="Perempuan">Perempuan</option>
              </select>
            </div>


				<div class="form-group">
					<label for="tanggal_lahir">Tanggal Lahir</label>
					<input type="date" class="form-control" name="tanggal_lahir" placeholder="Tanggal Lahir">
				</div>


				<div class="form-group">
					<label for="telepon">Nomor HP</label>
					<input type="text" class="form-control" name="telepon" placeholder="Nomor HP">
				</div>


				<div class="form-group">
					<label for="tanggal_berobat">Tanggal Berobat</label>
					<input type="date" class="form-control" name="tanggal_berobat" placeholder="Tanggal Berobat">
				</div>

				<button type="submit" class="btn btn-info">Simpan</button>
				<button type="reset" class="btn btn-info">Batal</button>
			</form>
			</div>
		</div>
	</div><br>

<?php include "footer.php"; ?>
<script src="bootstrap/js/jQuery.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>