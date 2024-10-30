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
            'title' => 'German for Beginners',
            'desc'  => 'Learn basic German vocabulary, grammar, and everyday phrases.',
            'flag'  => '🇩🇪',
            'topics' => [
                'Basics of German',
                'German Grammar',
                'Common Phrases',
                'Daily Conversations',
                'Numbers in German',
                'German Culture',
                'German Pronunciation',
                'Traveling in Germany'
                ]
        ],
        [
            'title' => 'Arabic for Beginners',
            'desc'  => 'Learn basic Arabic vocabulary, grammar, and everyday phrases.',
            'flag'  => '🇪🇬',
            'topics' => [
                'Basics of Arabic',
                'Arabic Grammar',
                'Common Phrases',
                'Daily Conversations',
                'Numbers in Arabic',
                    'Arabic Culture',
                    'Arabic Pronunciation', 
                    'Traveling in Arabic-Speaking Countries'
                    ]
        ],
        [
            'title' => 'English for Beginners',
            'desc'  => 'Master basic English vocabulary and conversational skills.',
            'flag'  => '🇬🇧',
            'topics' => [
                'Basics of English',
                'English Grammar',
                'Common Phrases',
                'Daily Conversations',
                'Numbers in English',
                'English Culture',
                'English Pronunciation', 'Traveling in English-Speaking Countries'
            ]
        ],
    ];

    // foreach ($courses[2]['topics'] as $topic) {
    //     var_dump($topic);
    // }
    // foreach($courses AS $course){
    // foreach($course['topics'] AS $value){
        
    //     var_dump($value);
    // }
    // }
    $englishCourse = $courses[2];
    foreach ($englishCourse['topics'] as $topic) {
        var_dump($topic);
    }

    
    
    ?></pre>

    <?php foreach($courses AS $course) :?>
        <details>
            <summary><?php echo e($course['flag'])?> <?php echo e($course['title']) ?>?</summary>
            <p><?php echo $course['desc'] ?></p>
            <ul>
                <?php foreach($course['topics'] As $topic): ?>

                    <li><?php echo $topic ?></li>
                    <?php endforeach; ?>
            </ul>
            
        </details>
    <?php endforeach; ?>
</body>
</html>