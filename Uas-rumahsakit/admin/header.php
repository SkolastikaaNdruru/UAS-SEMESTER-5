<!doctype HTML>
<html>
<head>
  <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Rumah sakit</title>
  <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../bootstrap/css/dataTables.bootstrap.min.css" rel="stylesheet">
  <link href="../bootstrap/css/styles.css" rel="stylesheet">
  <script src="../bootstrap/plugins/ckeditor/ckeditor.js"></script>
  <style>
    body {
      padding-top: 60px;
    }
    .navbar{
  background:green;
}
.navbar a{
  color: white;
}
.navbar-toggle{
  background-color: white;
  border: none;
}
.navbar-toggle .icon-bar{
  background-color: green;
}
  
  </style>
</head>
<body>
    
	<!-- Awal script Navbar -->
    <nav class="navbar navbar-expand-sm justify-content-center">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle Nav</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">Rumah sakit Pondok Indah</a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li class="active">
							<a href="index.php"><span class="glyphicon glyphicon-home"></span> Dashboard <span class="sr-only">(current)</span></a>
						</li>
            <li>
							<a href="tampil-dokter.php"><span class="glyphicon glyphicon-user"></span> Data Dokter</a>
						</li>

            <li>
              <a href="tampil-pendaftaran.php"><span class="glyphicon glyphicon-user"></span> Pendaftaran Pasien</a>
            </li>
            <li>
							<a href="contact.php"><span class="glyphicon glyphicon-user"></span> Pesan</a>
						</li>
            <li>
							<a href="tampil-user.php"><span class="glyphicon glyphicon-registration-mark"></span> User</a>
						</li>
            <li class="dropdown">
              <li><a href="../logout.php"><span class="glyphicon glyphicon-lock"></span> Logout</a></li>
          </li>
          </ul>
        </div>
      </div>
    </nav><!-- Akhir script Navbar -->