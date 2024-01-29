<!doctype HTML>
<html>
<head>
    <title>Login admin</title>

<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>

<style>
      body {
        padding-top: 100px;
       background: green;
       color: green;
      }
      p{
        font-size:4rem ;
        margin-left: 20px;
        color: green;
      }
		</style>
</head>
<body>
<div class="container">
    <div class="row">
		<div class="col-md-5 col-md-offset-4">
			<div class="panel panel-default">
				<div class="panel-body"> 
				    <p><i class="fa fa-hospital"></i></p>
					<form action="proses-login.php" method="POST">
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" name="username" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" class="form-control" required>
                    </div>

                    <input type="submit" name="kirim" value="Login" class="btn btn-success">
                    <input type="reset" name="kosongkan" value="Hapus" class="btn btn-primary mb1 black bg-darken-3">
                    <a href="index.php"><span class="glyphicon glyphicon-home pull-right">HalamanUtama</span> </a>
                </form> 
			</div>		
			</div>
		</div>
    </div>
</div>

<script src="bootstrap/js/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>

</body>
</html>