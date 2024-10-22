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

    $text = file_get_contents(__DIR__ . '/inc/all.inc.php');
    // echo $text;
    var_dump(readfile(__DIR__ . '/inc/all.inc.php'));
    ?></pre>
     <!-- <h1>  -->
        <?php 
        // echo e($text)
         ?>
    <!-- </h1>  -->
</body>
</html>