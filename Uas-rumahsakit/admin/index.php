<?php
  session_start();
  if (empty($_SESSION['user_id'])){
    header("location:../login.php");
  }
?>
<?php include "header.php"; ?>
<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
					<div class="jumbotron">
						<h2>wellcome( <?php echo $_SESSION['username'];?> )</h2>
						<p>Anda berada di pusat kendali website rumah sakit pondok indah Bentaro Jaya </p>
						<p><a class="btn btn-primary mb1 black bg-darken-3" href="tampil-dokter.php" role="button">dokter</a>
						<a class="btn btn-success" href="tampil-user.php"role="button">User</a></p>
				</div>
      </div>
		</div>
</div><!-- Akhir Jumbotron -->

<?php include "footer.php";?>