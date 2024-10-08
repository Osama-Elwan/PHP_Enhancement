<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./simple.css" />
    <title>Document</title>
</head>
<body>
<?php
$category1='Programming';
$category2='Business';
$category3='Art & Drowing';
$category4='Habbits';
?>
<ul>
    <li><?php echo $category1 ?></li>
    <li><?php echo $category2 ?></li>
    <li><?php echo $category3 ?></li>
    <li><?php echo $category4 ?></li>
    
</ul>
<select>
    <option><?php echo $category1 ?></option>
    <option><?php echo $category2 ?></option>
    <option><?php echo $category3 ?></option>
    
</select>


</body>
</html>