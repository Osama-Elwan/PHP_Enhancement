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
        "ahmed Elwan",
        "ahmed Elwan",
        "ahmed Elwan",
        "ahmed Elwan",
        
    ];
    // $names=array_unique($names);
    // sort($names);
    // var_dump($names);
    //quiz
    // var_dump(count(array_unique($names)));
    $scores = array(78, 90, 65, 88, 90, 75);
    sort($scores);
    if ($scores[0] < 70) {
        echo 'Lowest score is below 70!';
    } else if ($scores[0] === 70) {
        echo 'Lowest score is 70!';
    } else {
        echo 'All scores are above 70!';
    }

    
    ?></pre>
</body>
</html>