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
    // include __DIR__ . '/inc/functions.php';
    // include __DIR__ . '/inc/functions.inc.php';
    // require __DIR__ . '/inc/functions.php';
    // require __DIR__ . '/inc/functions.inc.php';//test error 
    // require __DIR__ . '/inc/functions.inc.php';//to solve dublicated require or include use require_one or include_once (dont forget that)
    
    // require_once __DIR__ . '/inc/functions.inc.php';//to solve dublicated require or include use require_one or include_once (dont forget that)
    
    // require_once __DIR__ . '/inc/functions.inc.php';
    require_once __DIR__ . '/inc/all.inc.php';
    

    $text = 'PHP is amazing!';

    ?></pre>
    <h1> <?php echo e($text) ?></h1>
</body>
</html>