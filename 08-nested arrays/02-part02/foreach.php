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
    function e($value){
        return htmlspecialchars($value,ENT_QUOTES,'UTF-8');
    }
    

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

    foreach($courses AS $course) {
        // var_dump($course);
        var_dump($course['title']);
        var_dump($course['desc']);
        var_dump($course['flag']);
    }
    foreach ($courses[1] AS $course) {
        var_dump($course);
        
    }

    
    
    ?></pre>

    <?php foreach($courses AS $course) :?>
        <details>
            <summary><?php echo e($course['flag'])?> <?php echo e($course['title']) ?>?</summary>
            <p><?php echo $course['desc'] ?></p>
        </details>
    <?php endforeach; ?>
</body>
</html>