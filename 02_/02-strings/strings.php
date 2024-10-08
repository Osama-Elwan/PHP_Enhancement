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
        $greeting = "I'm learning PHP!";
        echo "$greeting! <br>";
        echo "{$greeting}_!";
        echo "<br>";

        $name='osama';
        $subject = 'PHP';
       
        echo "I'm {$name} and I'm learning {$subject}\n";
        // echo 'I"m {$name} and I"m learning {$subject}';
        echo "osama \n";
        echo "\t elwan";
    ?></pre>

    <p>First line of text. <?php echo '<br>' ?> Secound line of text</p>
    <p>First line of text. <?php echo '\n' ?> Secound line of text</p>
    <p>First line of text. <?php echo "\n" ?> Secound line of text</p>
    
    <p><?php echo 'My last echo , $abc' ?></p>
    <!-- <p><?php echo "My last echo , {$abc}" ?></p> -->
    <pre><?php
    // echo "Welcome back!\nWe're glad to see you again.<br/>Check out our new features.";
    $promoCode = 'SUMMER_SALE';
echo "Seasonal Offer! 🤑 Use \"{$promoCode}\" for an exclusive discount.";
    ?></pre>
</body>
</html>