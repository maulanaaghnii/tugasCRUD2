<html>
<head>
	<title>Add Users</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>	
  <meta name='viewport' content='width=device-width, initial-scale=1'>
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
</head>

<style type="text/css">
	
.add{
  border: 1px solid #f1f1f1;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  z-index: 2;
  width: 30%;
  padding: 20px;
  background-color: lavender;
  opacity: 95%;	
  border-radius: 10px;
}

body, html{
    height: 100%;
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.background{
  /* The image used */
  background-image: url("gambar/landscape-univ.jpg");
  
  /* Add the blur effect */
  filter: blur(8px);
  -webkit-filter: blur(8px);
  
  /* Full height */
  height: 100%; 
  
  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
</style>
<body>
	<div class="background"></div>

	<br/><br/>
 	<div class="add">
	<form action="add.php" method="post" name="form1">
<a href="index.php"><i class='far fa-arrow-alt-circle-left' style='font-size:16px;color:black;'>&nbsp;Kembali ke Menu</i></a>
<br>
<br>		
	<?php
 
	// Check If form submitted, insert form data into users table.
	if(isset($_POST['Submit'])) {
		$npp_dosen = $_POST['npp_dosen'];
		$nama_dosen = $_POST['nama_dosen'];
		$jabatan_dosen = $_POST['jabatan_dosen'];
		
		// include database connection file
		include_once("config.php");
				
		// Insert user data into table
		$result = mysqli_query($mysqli, "INSERT INTO users(npp_dosen, nama_dosen, jabatan_dosen) VALUES('$npp_dosen','$nama_dosen','$jabatan_dosen')");
		
		// Show message when user added
		echo "<h4 style='color: green;'>Berhasil ditambahkan !</h4>";
	}
	?>
	<br>		
		
		<div class="form-group">
			<label for="npp_dosen">NPP : </label>
			<input type="text" name="npp_dosen" class="form-control" placeholder="Masukan NPP . . . " id="npp_dosen">
		</div>

		<div class="form-group">
			<label for="nama_dosen"> Nama : </label>
			<input type="text" name="nama_dosen" class="form-control" placeholder="Masukan Nama . . . " id="nama_dosen">
		</div>

		<div class="form-group">
			<label for="jabatan_dosen">Jabatan</label>
			<input type="text" name="jabatan_dosen" class="form-control" placeholder="Masukan Jabatan . . . " id="jabatan_dosen">

		</div>
		<br>

<!-- 		<div>
			<label for="Submit"></label>
			<input type="submit" name="Submit" value="Add">
		</div> -->

		<div align="right">
			<button type="submit" name="Submit" value="Add" class="btn btn-dark">Tambah</button>
			<button class="btn btn-danger"><a href="index.php" style="color: white;">Batal</a></button>
		</div>

<!-- 
				<td>NPP</td>
				<td><input type="text" name="npp_dosen"></td>
			
			 
				<td>Nama Dosen</td>
				<td><input type="text" name="nama_dosen"></td>
			
			 
				<td>Jabatan Fungsional</td>
				<td><input type="text" name="jabatan_dosen"></td>
			
			 
				<td></td>
				<td><input type="submit" name="Submit" value="Add"></td>
			 -->

	</form>
	</div>

</body>
</html>