<?php
// include database connection file
include_once("config.php");
 
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{	
	$id = $_POST['id'];
	
	$npp_dosen=$_POST['npp_dosen'];
	$nama_dosen=$_POST['nama_dosen'];
	$jabatan_dosen=$_POST['jabatan_dosen'];
		
	// update user data
	$result = mysqli_query($mysqli, "UPDATE users SET npp_dosen ='$npp_dosen',nama_dosen='$nama_dosen', jabatan_dosen='$jabatan_dosen' WHERE id=$id");
	
	// Redirect to homepage to display updated user in list
	header("Location: index.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];
 
// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM users WHERE id=$id");
 
while($user_data = mysqli_fetch_array($result))
{
	$npp_dosen = $user_data['npp_dosen'];
	$nama_dosen = $user_data['nama_dosen'];
	$jabatan_dosen = $user_data['jabatan_dosen'];
}
?>
<html>
<head>	
	<title>Edit User Data</title>
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
.edit{
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
  background-image: url("gambar/sideA.jpg");
  
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
	<a href="index.php">Home</a>
	<br/><br/>
	<div class="edit">
	<form name="update_user" method="post" action="edit.php">
		<a href="index.php"><i class='far fa-arrow-alt-circle-left' style='font-size:16px;color:black;'>&nbsp;Kembali ke Menu</i></a>
		<br>
		<br>
		<div class="form-group">
			<label for="npp_dosen">NPP : </label>
			<input type="text" name="npp_dosen" id="npp_dosen" class="form-control" value=<?php echo $npp_dosen;?> >
			
		</div>

		<div class="form-group">
			<label for="nama_dosen">Nama : </label>
			<input type="text" name="nama_dosen" id="nama_dosen" class="form-control" value=<?php echo $nama_dosen;?>>
		</div>

		<div class="form-group">
			<label for="jabatan_dosen">Jabatan : </label>
			<input type="text" name="jabatan_dosen" id="jabatan_dosen" class="form-control" value=<?php echo $jabatan_dosen;?>>
		</div>

		<div align="right">
			<input type="hidden" name="id" value=<?php echo $_GET['id'];?>>
			<button class="btn btn-dark" type="submit" name="update" value="Update"> Update</button>
			<button type="button" class="btn btn-danger"><a href="index.php" style="color: white;">Batal</a></button>
		</div>





<!-- 
		<table border="0">
			<tr> 
				<td>NPP dosen</td>
				<td><input type="text" name="npp_dosen" value=<?php echo $npp_dosen;?>></td>
			</tr>
			<tr> 
				<td>Nama dosen</td>
				<td><input type="text" name="nama_dosen" value=<?php echo $nama_dosen;?>></td>
			</tr>
			<tr> 
				<td>Jabatan dosen</td>
				<td><input type="text" name="jabatan_dosen" value=<?php echo $jabatan_dosen;?>></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table> -->
	</form>
	</div>
</body>
</html>