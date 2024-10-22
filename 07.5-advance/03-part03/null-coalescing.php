<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="simple.css">
    <title>Document</title>
</head>
<body>
    <pre><?php
    if(isset($_GET['name'])){

      //   $name = (string) ($_GET['name'] ??'');
      $name = @(string) ($_GET['name'] ??'');//@ =>remove the warrning from type casting 
      var_dump($name);
    }
      ?></pre>
    <a href="null-coalescing.php?<?php echo http_build_query(['name' => ['osama','elwan']]); ?>">LINK</a>
</body>
</html>