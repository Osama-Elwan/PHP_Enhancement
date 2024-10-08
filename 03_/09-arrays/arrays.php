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
    $categories = [
        "Programming",
        "Business",
        "Art & Drawing",
        "Self improvement",
        "History",
        
    ];

// var_dump(array_search('Art & Drawing',$categories)); 
// var_dump(array_slice($categories,2,2))
$numbers = [2,3,6,1,7,9];
// var_dump(min($numbers));
// var_dump(max($numbers));
// var_dump(array_sum($numbers));
// var_dump(array_sum($numbers)/ count($numbers));
$tobics = ['Courss','Books'];
$tobic2 = ['TV','Travel'];
$out = array_merge($tobics,$tobic2);
// var_dump($out);
//way two
// var_dump([...$tobics,...$tobic2]);
// var_dump([...$tobics,...$tobic2,'hey dudu']);

    
$number =[10.6,5,6];

// var_dump(round(...$number));
echo round(...$number);
echo round($number[0]);
// var_dump(...$number);
    ?></pre>


    
</body>
</html>