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
    $categories=['Programming','Business' ,'Art','History'];
    //upate
    $categories[2] = 'Art & Drawing' ;

    //insert 
    $categories[] = 'Nature Books';
    echo count($categories);
    
    var_dump($categories);
    
    ?></pre>
</body>
</html>