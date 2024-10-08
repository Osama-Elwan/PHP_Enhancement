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
        'Harry potter',
        'Atomic Habits',
        'Don Quixote',
        'Lord of the Rings',
    ];
    $authors = [
        'Osama',
        'Ahmed',
        'Khaled',
        'Omnia',
        
    ];
    var_dump("{$books[0]}. has been written by {$authors[0]}");

    $books = [
        'Harry potter' => 'Osama',
        'Atomic Habits' => 'Ahmed',
        'Don Quixote' => 'Khaled',
        'Lord of the Rings' => 'Omnia',
    ];
    var_dump($books);
    var_dump(isset($books['Harry potter']));//key is exist or not
    var_dump(!empty($books['Harry potter']));//key is exists and value not empty
    
    var_dump($books['Harry potter']);
    $key ='Harry potter';
    var_dump($books[$key]);
    var_dump($books['Harry'.' '. 'potter']);
    
    
    ?></pre>
</body>
</html>