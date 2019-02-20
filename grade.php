<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <?php
    $a=60;
    if($a >70)
    {
        echo"grade a";
    }
    elseif ($a<70 && $a>=60)
    {
        echo "grade b";
    }

    elseif($a<60 && $a>= 50)
    {
echo "grade c";
    }

    elseif($a>50 && $a>=40)
{
  echo "grade d";
}
else
{
    echo "fail f";
}
?>
</body>
</html>