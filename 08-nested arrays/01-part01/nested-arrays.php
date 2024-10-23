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
    // $courses = [
    //     'German for Beginners',    // English
    //     'Arabic for Beginners',    // English
    //     'English for Beginners'    // English
    // ];
    
    // $coursesDesc = [
    //     'Learn basic German vocabulary, grammar, and everyday phrases.', // English
    //     'Learn basic Arabic vocabulary, grammar, and everyday phrases.', // English translation
    //     'Master basic English vocabulary and conversational skills.'     // English
    // ];
    
    // $coursesFlags = [
    //     '🇩🇪', // German flag
    //     '🇪🇬', // Arabic (Egypt flag)
    //     '🇬🇧'  // English (UK flag)
    // ];
    

    $courses = [
        [
            'title'=>'German for Beginners',
            'desc'=> 'Learn basic German vocabulary, grammar, and everyday phrases.',
            'flag' =>'🇩🇪' ,
        ],
        [
            'title'=>'Arabic for Beginners',
            'desc'=>  'Learn basic Arabic vocabulary, grammar, and everyday phrases.',
            'flag' =>'🇪🇬' ,
        ],
        [
            'title'=>'English for Beginners',
            'desc'=> 'Master basic English vocabulary and conversational skills.' ,
            'flag' =>'🇬🇧' ,
        ],
        ];
    // var_dump($courses);
    var_dump($courses[0]['title']);
    var_dump($courses[0]['flag']);

    $englishCourse = $courses[2];
    var_dump($englishCourse['title']);
    var_dump($englishCourse['flag']);
    
    ?></pre>
</body>
</html>