
<?php include "header.php"; ?>
  <?php 

            if(@$_GET['pesan']=="hapusBerhasil"){

            ?>
                    <div class="alert alert-success">
                   pesan anda berhasil terkirim!
                    </div>
            <?php

            }

            ?>

<div id="Contact.php">
<div class="heading">
<P><h2>Hubungi kami</h2></P>
<div class="container">
			<div class="row">
				<div class="col-md-10">
				<form class="form-horizontal" action="proses-kontak.php" method="post">
				  <div class="form-group has-success">
					<label for="nama" class="col-sm-2 control-label">Nama</label>
					<div class="col-sm-10">
						<div class="input-group">
							<span class="input-group-addon">#</span>
							<input type="text" class="form-control" name="nama" placeholder="Isikan Nama Lengkap">
							<span class="glyphicon glyphicon-warning-sign form-control-feedback"></span>
						</div>
					</div>
				  </div>

				   <div class="form-group has-success">
					<label for="Email" class="col-sm-2 control-label">Email</label>
					<div class="col-sm-10">
						<div class="input-group">
							<span class="input-group-addon">@</span>
							<input type="text" class="form-control" id="Email" name="Email" placeholder="Isikan Email">
							<span class="glyphicon glyphicon-home form-control-feedback"></span>
						</div>
					</div>
				  </div>


				  <div class="form-group has-success">
					<label for="pesan" class="col-sm-2 control-label">Pesan</label>
					<div class="col-sm-10">
						<div class="input-group">
							<span class="input-group-addon">&&</span>
							<textarea name="pesan"class="form-control" placeholder="Isikan pesan anda"></textarea>
							<span class="glyphicon glyphicon-remove form-control-feedback"></span>
						</div>
					</div>
				  </div>
				  <div class="col-sm-offset-2 col-sm-10">
					  <button type="submit" class="btn btn-info">Kirim</button>
					  <button type="reset" class="btn btn-info">Batal</button>
				  </div>
				</form>
			</div>
		</div>
	</div>
    </div> 
	<br><br><br>

	<?php include "footer.php"; ?>