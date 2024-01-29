<?php
  session_start();
  if (empty($_SESSION['user_id'])){
    header("location:../login.php");
  }
?>
<?php

$nama=$_POST['nama'];
$jenis_kelamin=$_POST['jenis_kelamin'];
$tanggal_lahir=$_POST['tanggal_lahir'];
$spesialisasi=$_POST['spesialisasi'];
$jadwal_praktek=$_POST['jadwal_praktek'];
$alamat=$_POST['alamat'];
$telepon=$_POST['telepon'];
$email=$_POST['email'];


include "../koneksi.php";

$simpan=$koneksi->query("insert into dokter(nama,jenis_kelamin,tanggal_lahir,spesialisasi,jadwal_praktek,alamat,telepon,email) 
                        values ('$nama', '$jenis_kelamin', '$tanggal_lahir', '$spesialisasi', '$jadwal_praktek', '$alamat', '$telepon', '$email')");

if($simpan==true){

    header("location:tampil-dokter.php?pesan=inputBerhasil");
} else{
    echo "Error";
}




?>