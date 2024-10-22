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
        $number = 21.5;
        $str = "PHP";
        var_dump($number);
        var_dump($str);

        //check functions
        var_dump(is_bool($number));
        var_dump(is_integer($number));
        var_dump(is_float($number));
        var_dump(is_numeric($number));
        var_dump(is_string($number));
        var_dump(is_array($number));

        $entries = [
            ['title' => 'The most popular php course'],
            'Udemy courses',
        ];
        foreach($entries AS $entry){
            if(is_array($entry)){
                var_dump($entry['title']);
            }else {
                var_dump($entry);
            }
        }
    ?></pre>
</body>
</html>