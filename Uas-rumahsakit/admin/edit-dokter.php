<?php
  session_start();
  if (empty($_SESSION['user_id'])){
    header("location:../login.php");
  }
?>
<?php include "header.php"; ?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form action="proses-edit-dokter.php" method="POST">
                <?php
                $id=$_GET['id'];
                include "../koneksi.php";
                $tampil=$koneksi->query("select * from dokter where dokter_id='$id'");
                $row=$tampil->fetch_assoc();
                ?>
                    <div class="form-group">
                        <label for="nama">Nama Lengkap</label>
                        <input type="hidden" name="dokter_id" value="<?php echo $row['dokter_id']?>" class="form-control">
                        <input type="text" name="nama" value="<?php echo $row['nama']?>" class="form-control">
                    </div>


                    <div class="form-group">
                        <label for="jenis_kelamin">Jenis Kelamin</label>
                        <select name="jenis_kelamin" class="form-control">
                            <option value="<?php echo $row['jenis_kelamin']?>" selected><?php echo $row['jenis_kelamin']?></option>
                            <option value="Laki-laki">Laki-Laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>

                      <div class="form-group">
                        <label for="tanggal_lahir">Tanggal Lahir</label>
                        <input type="date" name="tanggal_lahir" value="<?php echo $row['tanggal_lahir']?>" class="form-control">
                    </div>

                     <div class="form-group">
                        <label for="spesialisasi">Spesialisasi</label>
                        <input type="text" name="spesialisasi" value="<?php echo $row['spesialisasi']?>" class="form-control">
                    </div>

                     <div class="form-group">
                        <label for="jadwal_praktek">Jadwal Praktek</label>
                        <input type="text" name="jadwal_praktek" value="<?php echo $row['jadwal_praktek']?>" class="form-control">
                    </div>


                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <textarea name="alamat" class="form-control"><?php echo $row['alamat']?></textarea>
                    </div>

                     <div class="form-group">
                        <label for="telepon">Telepon</label>
                        <input type="text" name="telepon" value="<?php echo $row['telepon']?>" class="form-control">
                    </div>

                     <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" value="<?php echo $row['email']?>" class="form-control">
                    </div>

                    <input type="submit" name="kirim" value="UBAH" class="btn btn-info">
                    <input type="reset" name="kosongkan" value="Kosongkan" class="btn btn-danger">
                </form>
            </div>
        </div>
    </div>

<?php include "footer.php";?>