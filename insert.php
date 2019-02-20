<?php
session_start();
if($_SESSION['logged_in'] !=true){
    header('Location: login.php');
}

?>
 <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>insert new book</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <link href="css/bootstrap.min.css"rel="stylesheet" >
    <script src="main.js"></script>
</head>
<style>
.h1 {color:#004080;
padding: 0px;
margin: 0px;


}
  .form-horizontal {
background-color:gray;
padding: 0px;
margin: 0px;
}
</style>
<body>
    <div class="container">
    <div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
    <center><h1> insert new book</h1></center>
    <form class="form-horizontal"  role="form" action="insert.php" method="">
    <div class="form-group">
    <label class="label-control col-md-4" for="nameofbook" >name of book</label>
    <div class="col-md-4">
    <input type="text" class="form-control" id="nameofbook" name="nameofbook">
    </div>
    </div>
    <div class="form-group">
    <label class="label-control col-md-4" for="index">index number</label>
    <div class="col-md-4">
    <input type="text" class="form-control" id="indexnumber" name="indexnumber">
    </div>
    </div>
    <div class="form-group">
    <label class="label-control col-md-4" for="index">name of author</label>
    <div class="col-md-4">
    <input type="text" class="form-control" id="author" name="author">
    </div>
    </div>
    <div class="form-group">
    <div lass="col-md-10">
    <button type="submit" class="btn btn-primary center-block" name="submit">submit</button>
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