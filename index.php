<?php
session_start();
if($_SESSION['logged_in'] != true){
    header('Location: login.php');
}
?>
<!DOCTYPE <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>library mis</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="library management system.">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="main.js"></script>
    <style>
.navbar{ 
    background-color:#004080;

}


 

    </style>
</head>

<body>
<div class="container">
<div class="row">
<div class="col-md-1"></div>
<div class="col-md-10">
<nav class="navbar navbar-expand-md " > 
<div class="navbar-header">
<a class="navbar-brand" href="#"> 
<img src="library.jpg" display="inline-block; " style="height:36; float:left;">
<span display="inline-block;">E-LIBRARY</span></a>
</div>
<ul class="nav navbar-nav">
<li><a href="#">Home</a></li>
<li><a href="registration.php">Registration</a></li>
<li><a href="borrowing.php">Borrowing</a></li>
<li><a href="#">Returning</a></li>
<li><a href="insert.php"> insert new book</a></li>
<li><a href="logout.php">logout</li>

<form role="form" class="pull-right" style="margin-top:10px;" action="search.php" method="get">
<input type="text" class="col-md-5" id="search" placeholder="search" style="margin-right:5px;" name="search" >
<input type="submit" class="btn btn-danger" value="submit" name="submit">

</form>
</ul>

</nav>
</div>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      
</div>
<?php
?>
</div>
<div class="col-md-1"></div>  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>