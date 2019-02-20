<!DOCTYPE >
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="main.js"></script>
    <style>
{ 
    background-color:#004080;

}

    </style>
</head>
<body>
<?php
$servername="127.0.0.1";
$username="root";
$password="";
$dbname="library";
$conn= mysqli_connect($servername,$username,$password,$dbname);
if(isset($_POST['submit']) && $_POST['submit'] == "submit"){
    $username = $_POST['username'];
    $password = $_POST['password'];
    // $query=mysqli_query($conn,"SELECT FROM `login` (`username`,`password`) VALUES ('".$_POST["username"]."','".$_POST["password"]."')");
    $query=mysqli_query($conn,"SELECT * FROM `login` WHERE  `username`='$username' AND `password`='$password' ");
    $count = mysqli_num_rows($query);
    // var_dump($query);
    if($count == 1){
        if(session_status() == PHP_SESSION_NONE){
            session_start();
        }
        $_SESSION['logged_in'] = true;
        header('Location: index.php');
    }else{
        $msg = "username or password is incorrect";
    }

}
?>

</div>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                           
<div class="row">
<div class="col-md-2"></div>
<div class="col-md-8">
<center><h1 > login </h1></center>
</div>
    <div class="row">
    <div class="col-md-12">
        <center><span class="text-success"><?= $msg ?></span></center>
    </div>
    </div>
  <form class="form-horizontal" role="form" action="login.php" method="post">
  <div class=form-group>
  <label class="control-label col-md-4" for="username">username:</label>
  <div class="col-md-4">
  <input type="text" class="form-control" id="username" name="username">
  </div>
  </div>
  <div class=form-group>
  <label class="control-label col-md-4" for="firstname">password</label>
  <div class="col-md-4">
  <input type="password" class="form-control" id="firstname" name="password">
  </div>
  </div>

  <div class="form-group">        
    <div class="col-md-10">
        <button type="submit" class="btn btn-primary center-block" name="submit" value="submit" >Submit</button>
      </div>
    </div>

</div>
</div>
<div class="col-md-2"></div>
</body>
</html>