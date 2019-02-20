<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>borrowing</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="main.js"></script>
</head>
<style>

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
<center><h1>borrow the book</h1></center>
<form class="form-horizontal" role="form" action="" method="post">
<div class="form-group">
<label class="control-label col-md-4" for="regnumber" > reg number</label>
<div class="col-md-4">
<input type="text" class="form-control" id="name" name="regnumber">
</div>
</div>
<div class="form-group">
<label class="control-label col-md-4" for="regnumber" > name of book</label>
<div class="col-md-4">
<input type="text" class="form-control" id="name" name="regnumber">
</div>
</div>

<div class="form-group">
<label class="control-label col-md-4" for="regnumber" >index number</label>
<div class="col-md-4">
<input type="text" class="form-control" id="name" name="index">
</div>
</div>
<div class="form-group">
<label class="control-label col-md-4" for="regnumber" >date of borrowing</label>
<div class="col-md-4">
<input type="text" class="form-control" id="name" name="borrowing">
</div>
</div>

<div class="form-group">
<label class="control-label col-md-4" for="regnumber" >date of ruturning</label>
<div class="col-md-4">
<input type="text" class="form-control" id="name" name="returning">
</div>
</div>
<div class="form-group">
<div class="col-md-12">
<button type="submit" class="btn btn-primary center-block" name="submit">submit</button>
</div>
</div>
</form>
</div>
</div>

</div>


<div class="col-md-2"></>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>