<html>
<head>
	<title>CRUD PHP dan MySQLi - WWW.MALASNGODING.COM</title>
</head>
<body>
 
	<h2>CRUD DATA MAHASISWA - WWW.MALASNGODING.COM</h2>
	<br/>
	<a href="tampil_siswa.php">KEMBALI</a>
	<br/>
	<br/>
	<h3>EDIT DATA MAHASISWA</h3>
 
	<?php
	include 'koneksi.php';
	$id = $_GET['id'];
	$data = mysqli_query($koneksi,"select * from siswa where NIS='$id'");
	while($d = mysqli_fetch_array($data)){
		?>

		<form method="post" action="update.php">
			<table>
				<tr>
						<input type="hidden" name="NIS2" id="NIS2" value="<?php echo $d['NIS']; ?>">
					<td>NIS</td>
					<td>
						<input type="text" name="NIS" id="NIS" value="<?php echo $d['NIS']; ?>">
					</td>
				</tr>
				<tr>			
					<td>Nama</td>
					<td>
						<input type="text" name="Nama" value="<?php echo $d['Nama']; ?>">
					</td>
				</tr>
				<tr>
					<td>Kelas</td>
					<td><input type="text" name="Kelas" value="<?php echo $d['Kelas']; ?>"></td>
				</tr>
				<tr>
					<td>Jurusan</td>
					<td><input type="text" name="Jurusan" value="<?php echo $d['Jurusan']; ?>"></td>
				</tr>
					<td></td>
					<td><input type="submit" value="SIMPAN"></td>
				</tr>		
			</table>
		</form>
		<?php 
	}
	?>
 
</body>
</html>