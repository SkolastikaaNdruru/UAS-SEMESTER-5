<?php
  session_start();
  if (empty($_SESSION['user_id'])){
    header("location:../login.php");
  }
?>
<?php

include "../koneksi.php";

$id=$_POST['dokter_id'];
$nama=$_POST['nama'];
$jenis_kelamin=$_POST['jenis_kelamin'];
$tanggal_lahir=$_POST['tanggal_lahir'];
$spesialisasi=$_POST['spesialisasi'];
$jadwal_praktek=$_POST['jadwal_praktek'];
$alamat=$_POST['alamat'];
$telepon=$_POST['telepon'];
$email=$_POST['email'];

$ubah=$koneksi->query("update dokter set nama='$nama', jenis_kelamin='$jenis_kelamin', tanggal_lahir='$tanggal_lahir', spesialisasi='$spesialisasi', jadwal_praktek='$jadwal_praktek', alamat='$alamat',telepon='$telepon', email='$email' where dokter_id='$id'");

if($ubah==true){

    header("location:tampil-dokter.php?pesan=editBerhasil");
} else{
    echo "Error";
}

?>