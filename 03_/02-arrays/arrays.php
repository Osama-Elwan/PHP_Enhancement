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
    
    // $categories=array('Programming','Business' ,'Art','History',5,5+6,true);
    // $categories=array('Programming','Business' ,'Art','History');
    // $categories=array('Programming','Business' .'!!!','Art','History');
    $categories=['Programming','Business' ,'Art','History'];

    var_dump( $categories);
    print_r( $categories);
    echo $categories[0] . "\n";
    echo $categories[3] . "\n";

    // $firstCategory = $categories[0];
    // var_dump($firstCategory);
    
    ?></pre>
</body>
</html>