<?php session_start(); /* Starts the session */
/* Check Login form submitted */if(isset($_POST['Submit'])){
/* Define username and associated password array */$logins = array('Annisaa' => '11111');

/* Check and assign submitted Username and Password to new variable */$Username = isset($_POST['Username']) ? $_POST['Username'] : '';
$Password = isset($_POST['Password']) ? $_POST['Password'] : '';

/* Check Username and Password existence in defined array */if (isset($logins[$Username]) && $logins[$Username] == $Password){
/* Success: Set session variables and redirect to Protected page  */$_SESSION['UserData']['Username']=$logins[$Username];
header("location:index.php");
exit;
} else {
/*Unsuccessful attempt: Set error message */$msg="<span style='color:red'>Invalid Login Details</span>";
}

//ini hanya komentar 

}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Annisa Luthfi Endah R</title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<!-- Style -->
<style type="text/css">
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

.wadah1{
    border-radius: 0px;
/*    background-color: #343a40;*/
    
    margin-top: 50px;
    margin-right: 50px;
    margin-left: 50px;
    margin-bottom: 60px; 
/*    border: 3px solid #343a40;*/
    opacity: 100%;
    color: black;
   
    
}

.login-page{
/*  margin-top: 130px;
  margin-left: 150px;
  margin-right: 150px;
  padding-bottom: 50px;
*/

  border: 1px solid #f1f1f1;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  z-index: 2;
  width: 80%;
  padding: 20px;
  background-color: lavender;
  opacity: 90%;
  
}




</style>


<body>
<div class="background"></div>

<div class="login-page">
<div class="login-page-back"></div>
<div class="row">
  <div class="col-sm-6">
    <img src="gambar/george-mas.jpg" width="100%" align="center">
  </div>




  <div class="col-sm-6">
    <div class="wadah1">  
      <h3 align="center" style="color: black;">Login as Lecturer</h3>


      <!-- Form Login Start -->
        <form action="" method="post" name="Login_Form">
          <?php if(isset($msg)){?>
            <?php echo $msg;?>
          <?php } ?>
          <div class="form-group">
            <label for="Username">Username :</label>
            <input type="text" class="form-control" placeholder="Enter Username . . . " id="Username" name="Username">
          </div>
          <div class="form-group">
            <label for="Password">Password:</label>
            <input type="password" class="form-control" placeholder="Enter Password . . . " id="Password" name="Password">
          </div>
          <div align="right">
          <button type="submit" class="btn btn-dark" value="Login" name="Submit" >Masuk</button>
          </div>
        </form>      
      <!-- Form Login End -->
    </div>    
  </div>


</div>

</div>
</body>
</html>