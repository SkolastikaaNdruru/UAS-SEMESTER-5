
<?php

include "koneksi.php";
$nik = $koneksi->real_escape_string($_POST['nik']); 
$nama = $koneksi->real_escape_string($_POST['nama']); 
$jenis_kelamin = $koneksi->real_escape_string($_POST['jenis_kelamin']); 
$tanggal_lahir = $koneksi->real_escape_string($_POST['tanggal_lahir']);
$telepon = $koneksi->real_escape_string($_POST['telepon']);
$tanggal_berobat = $koneksi->real_escape_string($_POST['tanggal_berobat']);



$simpan=$koneksi->query("insert into pendaftaran(nik,nama,jenis_kelamin,tanggal_lahir,telepon,tanggal_berobat) 
                        values ('$nik', '$nama', '$jenis_kelamin', '$tanggal_lahir', '$telepon', '$tanggal_berobat')");

if($simpan==true){

    header("location:pendaftaran.php?pesan=inputBerhasil");
} else{
    echo "Error";
}

?>