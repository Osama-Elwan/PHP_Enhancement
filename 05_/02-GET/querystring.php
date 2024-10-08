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
        var_dump($_GET)
    ?></pre>
    <?php if(!empty($_GET['book'])) : ?>
        <h1> <?php echo $_GET['book'] ?> </h1>
    <?php endif; ?>   
    
    <!-- <a href="querystring.php?book=Harry Potter">Harry potter</a>
    <a href="querystring.php?book=Beauty & the Beast">Beauty & the Beast</a>   -->
    <!-- u cant here use & in the url so we will try another way -->

    <a href="querystring.php?<?php echo http_build_query(['book'=>'Harry Potter']) ?>">Harry Potter</a>
    <a href="querystring.php?<?php echo http_build_query(['book'=>'Beauty & the Beast','author'=>'osama elwan']) ?>">Beauty & the Beast</a>


    <!-- important example -->
         <!-- <?php 
    // $params = [
    // 'location' => 'New York',
    // 'amenity' => 'Bed & Breakfast',
    //  'deal' => 'Special & Offers'
//  ];
//  $query = http_build_query($params);
// $url = "http://www.travel-site.com/hotels.php?" . $query;
// echo $query;

 ?>-->
</body>
</html>