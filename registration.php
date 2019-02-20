<?php
session_start();
if($_SESSION['logged_in'] != true){
    header('Location: login.php');
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>registration</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <link href="css/bootstrap.min.css"rel="stylesheet" >
    <script src="main.js"></script>
</head>
<style> 
h1 {
  text-align:center;
}
  .form-horizontal {
background-color:gray;
padding: 0px;
margin: 0px;
  }
  .navbar{ 
    background-color:#004080;

}
</style>
<body>
  <?php
  $servername="127.0.0.1";
  $username="root";
  $password="";
  $mydb="library";
  $conn=mysqli_connect($servername,$username,$password,$mydb);
  
  
if(isset($_POST['submit'])){

$query=mysqli_query($conn,"INSERT INTO `registration` (`firstname`, `surname`, `regnumber`, `faculty`, `email`,`yearofstudy`) VALUES ('".$_POST["firstname"]."', '".$_POST["surname"]."', '".$_POST["regnumber"]."', '".$_POST["facult"]."', '".$_POST["email"]."', '".$_POST["yearofstudy"]."')");

if($query==True)
{
  echo "<script>alert('registration successful')</script>";
}
else
{
  echo "<script>alert('registration failed')</script>";
}

}
  ?>

</div>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                           
<div class="row">
<div class="col-md-2"></div>
<div class="col-md-8">
<div class="alert alert-info">
<h1 >Registration form</h1>
</div>
  <form class="form-horizontal" role="form" action="registration.php" method="post">
  <div class=form-group>
  <label class="control-label col-md-4" for="firstname">Firstname:</label>
  <div class="col-md-4">
  <input type="text" class="form-control" id="firstname" name="firstname">
  </div>
  </div>
  <div class=form-group>
  <label class="control-label col-md-4" for="surname">Surname:</label>
  <div class="col-md-4">
  <input type="text" class="form-control" id="surname" name="surname">
  </div>
  </div>
  <div class=form-group>
  <label class="control-label col-md-4" for="regnumber">Reg_number:</label>
  <div class="col-md-4">
  <input type="text" class="form-control" id="regnumber" name="regnumber">
  </div>
  </div>
  <div class=form-group>
  <label class="control-label col-md-4" for="faculty">Faculty:</label>
  <div class="col-md-4">
  <input type="text" class="form-control" id="faculty" name="faculty">
  </div>
  </div>
    <div class="form-group">
      <label class="control-label col-md-4" for="email">Email:</label>
      <div class="col-md-4">
        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-md-4" for="select" name="yearofstudy">Year of study:</label>
      <select class=" selectpicker col-md-6" style="width:auto;">          
      <option value="1">1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      </select>

    </div>
    
    <div class="form-group">        
    <div class="col-md-10">
        <button type="submit" class="btn btn-primary center-block" name="submit">Submit</button>
      </div>
    </div>
  </form>
  </div>
</div>
</div>
<div class="col-md-2"></div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>