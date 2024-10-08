<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function e($value){
        return htmlspecialchars($value,ENT_QUOTES,'UTF-8');
    }
    $fileName = '1B1A9657.jpg';

    ?>
    <!-- <img src="./
     <?php echo e($fileName) ?>" style="max-width: 20rem;" alt=""> -->
    <img src="./<?php echo rawurlencode($fileName) ?>" style="max-width: 20rem;" alt="">
</body>
</html>