<?php session_start(); /* Starts the session */
if(!isset($_SESSION['UserData']['Username'])){
header("location:login.php");
exit;
}
?>


<?php
// Create database connection using config file
include_once("config.php");
 
// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM users ORDER BY id DESC");
?>
 
<html>
<head>    
    <title>Homepage</title>
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>  
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> 
</head>
<style type="text/css">
.table-index{
  border: 1px solid #f1f1f1;
  position: absolute;
  top: 35%;
  left: 50%;
  transform: translate(-50%, -50%);
  z-index: 2;
  width: 90%;
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
  background-image: url("gambar/ultra.jpg");
  
  /* Add the blur effect */
  filter: blur(1px);

  -webkit-filter: blur(1px);
  
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
<div class="table-index">
 
 
<p align="right"><a href="add.php" style="color: green;">Add New Lecturer <i class="fa fa-user-plus" style="font-size: 20px; color: green;"></i></a>&nbsp; &nbsp; &nbsp;<i class="fa fa-sign-out" style="font-size:20px;color:red"><a href="logout.php" style="color: red;">Logout</a></i></p>
 
    <table class="table">
         <thead class="thead-dark">

            <tr>
                <th>NPP</th> <th>Nama Dosen</th> <th> Jabatan </th> <th>Update</th>
            </tr>
        </thead>
        <tbody style="color: black;">
    <?php  
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$user_data['npp_dosen']."</td>";
        echo "<td>".$user_data['nama_dosen']."</td>";
        echo "<td>".$user_data['jabatan_dosen']."</td>";    
        echo "<td><a href='edit.php?id=$user_data[id]'><i class='material-icons' style='font-size:20px;color:blue;'>mode_edit</i></a> | <a href='delete.php?id=$user_data[id]'><i class='material-icons' style='font-size:20px;color:red'>delete</i></a></td></tr>";        
    }
    ?>
        </tbody>
    </table>    

</div>    

</body>
</html>