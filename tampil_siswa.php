<html>
<head>
	<title>CRUD PHP dan MySQLi </title>
</head>
<body>
<center>
<h3>Tabel Data Siswa</h3>
<a href="form_siswa.php">Tambah Data</a>
	<table border="1">
		<tr>
			<th>NIS</th>
			<th>Nama</th>
			<th>Kelas</th>
			<th>Jurusan</th>
		</tr>
		<?php 
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from siswa");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $d['NIS']; ?></td>
				<td><?php echo $d['Nama']; ?></td>
				<td><?php echo $d['Kelas']; ?></td>
                <td><?php echo $d['Jurusan']; ?></td>
				<td>
					<a href="edit.php?id=<?php echo $d['NIS']; ?>">EDIT</a>
					<a href="hapus_siswa.php?id=<?php echo $d['NIS']; ?>">HAPUS</a>
				</td>
			</tr>
	</center>
			<?php 
		}
		?>
	</table>
</body>