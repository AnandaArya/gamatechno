<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$NIS = $_POST['NIS'];
$NIS2 = $_POST['NIS2'];
$Nama = $_POST['Nama'];
$Kelas = $_POST['Kelas'];
$Jurusan = $_POST['Jurusan'];
 
// update data ke database
mysqli_query($koneksi,"UPDATE siswa set NIS ='$NIS', Nama='$Nama', Kelas='$Kelas', Jurusan='$Jurusan' where NIS='$NIS2'");
 
// mengalihkan halaman kembali ke index.php
header("location:tampil_siswa.php");
 
?>