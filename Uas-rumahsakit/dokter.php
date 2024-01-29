<?php include "header.php"; ?>
		
		<!-- Awal Page -->
		<div class="container">
		<!-- Awal baris -->
		<div class="row">
			<div class="col-md-12"><!-- Awal Kolom Pertama -->
			<div class="panel panel-default">
				<div class="panel-body">
				<h2 style="text-muted"><span class="glyphicon glyphicon-list"></span> Data Dokter</h2>
					<table class="table table-bordered table-hover" id="data-table">
						<thead>
						<tr>
							<th>Nama Lengkap</th>
							<th>Jenis Kelamin</th>
							<th>Tanggal Lahir</th>
							<th>Spesialisasi</th>
							<th>Jadwal Praktek</th>
							<th>Alamat</th>
							<th>Telepon</th>
							<th>Email</th>
						</tr>
						</thead>
						<?php

						include "koneksi.php";
						$sql=$koneksi->query("select * from dokter order by nama ASC");

						while($row= $sql->fetch_assoc()){
						?>
						<tr>
							<td><?php echo $row['nama']?></td>
							<td><?php echo $row['jenis_kelamin']?></td>
							<td><?php echo $row['tanggal_lahir']?></td>
							<td><?php echo $row['spesialisasi']?></td>
							<td><?php echo $row['jadwal_praktek']?></td>
							<td><?php echo $row['alamat']?></td>
							<td><?php echo $row['telepon']?></td>
							<td><?php echo $row['email']?></td>
							<td><a href="detail-dokter.php?id=<?php echo $row['dokter_id']?>"></a></td>
						</tr>
						<?php } ?>
						</table>
				</div>
      </div>
			</div><!-- Akhir Kolom Pertama -->
		</div><!-- Akhir Baris -->
		</div><!--  Akhir Page -->
		<?php include "footer.php";?>