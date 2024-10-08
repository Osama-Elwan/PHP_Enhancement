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

    // foreach($categories as $category){
    //     if ($category !=="Business") {
    //     if ($category !=="History") {
    //         var_dump( $category);
    //     }
    //     }
    // };
    // foreach($categories as $category){
    //     if ($category !=="Business" && $category !=="History") {
    //         var_dump( $category);
    //     }
    // };
    foreach($categories as $category){
        if ($category ==="Business") continue;
        if($category ==="History") continue;
        if($category === "Self improvement") break;

            var_dump( $category);

    };


    
    ?></pre>

    <ul>
        <?php foreach($categories AS $category): ?>
            <?php if ($category === "Business") continue; ?>
            <?php if($category === 'History'): ?>
                <?php continue; ?>
            <?php endif ?>
        <li><?php echo $category; ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>