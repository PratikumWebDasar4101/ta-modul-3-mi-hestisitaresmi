<?php
	require("koneksi.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>TA</title>
</head>
<body>
	<table>
		<form method="POST" enctype="multipart/form-data">
			<tr>
				<td>Nama User</td>
				<td>:</td>
				<td><input type="text" name="nama"></td>	
			</tr>
			<tr>
				<td>NIM</td>
				<td>:</td>
				<td><input type="text" name="nim"></td>	
			</tr>
			<tr>
				<td>Fakultas</td>
				<td>:</td>
				<td>
					<select name="fakultas">
  					<option value="Fakultas Teknik Elektro">Fakultas Teknik Elektro</option>
  					<option value="Fakultas Teknik Informatika">Fakultas Teknik Informatika</option>
  					<option value="Fakultas Rekayasa Industri">Fakultas Rekayasa Industri</option>
  					<option value="Fakultas Industri Kreatif">Fakultas Industri Kreatif</option>
  					<option value="Fakultas Komunikasi Bisnis">Fakultas Komunikasi Bisnis</option>
  					<option value="Fakultas Ekonomi Bisnis">Fakultas Ekonomi Bisnis</option>
  					<option value="Fakultas Ilmu Terapan">Fakultas Ilmu Terapan</option>
					</select>
				</td>	
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td>:</td>
				<td>
					<input type="radio" name="jeniskelamin" value="Laki-Laki">Laki-Laki
					<input type="radio" name="jeniskelamin" value="Perempuan">Perempuan
				</td>	
			</tr>
			<tr>
				<td>File Gambar</td>
				<td>:</td>
				<td><input type="file" name="file_gb" /></td>	
			</tr>
			<tr>
				<td><input type="submit" value="submit" ></td>
			</tr>
				
		</form>
	</table>

</body>
</html>
<?php
	if(isset($_POST['nim'])){
	$nim=strlen($_POST['nim']) ? $_POST['nim'] : "Inputan tidak boleh kosong" ;
	$nama=strlen($_POST['nama']) ? $_POST['nama'] : "Inputan tidak boleh kosong" ;
	$fakultas=strlen($_POST['fakultas']) ? $_POST['fakultas'] : "Inputan tidak boleh kosong" ;
	$jeniskelamin=strlen($_POST['jeniskelamin']) ? $_POST['jeniskelamin'] : "Inputan tidak boleh kosong" ;



	$file=$_FILES['file_gb'];
	$nama_file=$file['name'];
	$nama_tmp=$file['tmp_name'];
	$upload_dir= "upload/";

	$query = $pdo -> prepare("INSERT INTO tb_contact_us VALUES ('$nim','$nama','$fakultas','$jeniskelamin','$nama_file')");

	if ($query -> execute() and move_uploaded_file($nama_tmp, $upload_dir.$nama_file)) {
		echo "berhasil";
	}else {
		echo "gagal";
	}

	if($query)
		header("Location: read_data.php");
	else
		die("Tambah data gagal");
}
?>