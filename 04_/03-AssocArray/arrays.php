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
    

    $books = [
        'Harry potter' => 'Osama',
        'Atomic Habits' => 'Ahmed',
        'Don Quixote' => 'Khaled',
        'Lord of the Rings' => 'Omnia',
        0 => 'this is book 0',
        'Another Book',
    ];
    $books[0]= 'overwritten ,,,';
    // $books['0']= 'overwritten  ...';
    var_dump($books);
    
    
    ?></pre>
</body>
</html>