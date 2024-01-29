<?php
  session_start();
  if (empty($_SESSION['user_id'])){
    header("location:../login.php");
  }
?>
<?php

$nik=$_POST['nik'];
$nama=$_POST['nama'];
$jenis_kelamin=$_POST['jenis_kelamin'];
$tanggal_lahir=$_POST['tanggal_lahir'];
$telepon=$_POST['telepon'];
$tanggal_berobat=$_POST['tanggal_berobat'];


include "../koneksi.php";

$simpan=$koneksi->query("insert into pendaftaran(nik,nama,jenis_kelamin,tanggal_lahir,telepon,tanggal_berobat) 
                        values ('$nik', '$nama', '$jenis_kelamin', '$tanggal_lahir', '$telepon', '$tanggal_berobat')");

if($simpan==true){

    header("location:tampil-pendaftaran.php?pesan=inputBerhasil");
} else{
    echo "Error";
}




?>