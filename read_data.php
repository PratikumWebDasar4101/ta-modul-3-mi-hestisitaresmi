<?php
	require("koneksi.php");
?>
<!DOCTYPE>
<html>
<head>
<title>Menampilkan Data</title>
</head>
<body>
	<table border="1" width="100%">
		<tr>
			<td colspan="5" align="center"  ><b>DATA YANG DITAMPILKAN<b></td>
		</tr>	
		<tr align="center">
			
			<th width="15%" >Nim</th>
			<th width="15%">Nama</th>
			<th width="15%">Fakultas</th>
			<th width="10%">Jenis Kelamin</th>
			<th>Gambar Foto</th>
		</tr>
		<?php
			
			$query = $pdo -> prepare ("SELECT*from tb_contact_us");
			$query -> execute();
			while($isi = $query -> fetch(PDO:: FETCH_ASSOC)){
				?>

				<tr align="center">
					<td  ><?php echo $isi['nim'];?></td>
					<td ><?php echo $isi['nama'];?></td>
					<td ><?php echo $isi['fakultas']?></td>
					<td ><?php echo $isi['jeniskelamin']?></td>
					<td align="center"><img  width="500px" height="300px" src="upload/<?php echo $isi['file']?>"></td>
					
				</tr>
				<?php
			}

		?>
	</table>
</body>
</html>