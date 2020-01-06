<?php
include 'koneksi.php';
$NIS = $_POST['NIS'];
$Nama = $_POST['Nama'];
$Kelas = $_POST['Kelas'];
$Jurusan = $_POST['Jurusan'];


mysqli_query($koneksi,"insert into siswa values('$NIS','$Nama','$Kelas', '$Jurusan')");
header("location: tampil_siswa.php");
?>


