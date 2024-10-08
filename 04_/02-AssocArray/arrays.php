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
    ];
    $books['Romeo And Jullia'] = 'Khalil';
    $books['Romeo And Jullia'] = 'Khalil';//every key is unique just override the value of it 
    // unset($books['Harry potter']);

    // var_dump($books);

    // var_dump(array_keys($books));
    // var_dump(array_values($books));

    // foreach($books as $book => $author){
    //     var_dump($book);
    //     var_dump($author);
    // }

    //test

    // $inventory = [
    //     'Laptop' => 15,
    //     'Tablet' => 25,
    //     'Smartphone' => 40,
    //     'Smartwatch' => 10,
    //     'Headphones' => 30
    // ];

    // $categories = array_keys($inventory);
    // sort($categories);

    // var_dump($categories);


    //22
    $speakers = [
        'Dr. Miller' => 'Artificial Intelligence',
        'Prof. Johnson' => 'Robotics',
        'Dr. Smith' => 'Quantum Computing',
        'Dr. Brown' => 'Cybersecurity'
    ];
    unset($speakers['Prof. Johnson']);
if (count($speakers) < 3) {
    $speakers['Prof. Taylor'] = 'Blockchain';
}
$topics = array_values($speakers);
var_dump($topics);
    
    ?></pre>
</body>
</html>