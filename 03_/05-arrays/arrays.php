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
    $names = [
        "osama Elwan",
        "khald Elwan",
        "ahmed Elwan",
        
    ];
    // var_dump($names[rand(0,count($names)-1)]);

    $num = count($names);
    $choise =rand(0,$num -1);
    echo "The winner is: {$names[$choise]}";
    // var_dump($names[$choise]); 

    
    ?></pre>
</body>
</html>