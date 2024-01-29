<?php
  session_start();
  if (empty($_SESSION['user_id'])){
    header("location:../login.php");
  }
?>
<?php

include "../koneksi.php";

$id=$_POST['pasien_id'];
$nik=$_POST['nik'];
$nama=$_POST['nama'];
$jenis_kelamin=$_POST['jenis_kelamin'];
$tanggal_lahir=$_POST['tanggal_lahir'];
$telepon=$_POST['telepon'];
$tanggal_berobat=$_POST['tanggal_berobat'];

$ubah=$koneksi->query("update pendaftaran set nik='$nik', nama='$nama', jenis_kelamin='$jenis_kelamin', tanggal_lahir='$tanggal_lahir', telepon='$telepon', tanggal_berobat='$tanggal_berobat' where pasien_id='$id'");

if($ubah==true){

    header("location:tampil-pendaftaran.php?pesan=editBerhasil");
} else{
    echo "Error";
}

?>