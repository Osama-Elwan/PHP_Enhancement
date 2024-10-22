<?php

// $emailContent (string): The content of an email provided as a single string

// Example

$emailContent = "Subject: Unlock Your Potential with Us!\n\nDear Alex,\n\nWe hope this message finds you well.\n\nQuote of the Month:\n\nDr. Albert Szent-Györgyi: 'Innovation is seeing what everybody has seen and thinking what nobody has thought.'\n\nBest wishes,\nYour Discovery Network Team\nP.S. Don't miss our special announcement next month!";

$separatedTxt = explode("\n\n",$emailContent);
$quote = $separatedTxt[4];
$separatedQuote = explode(':',$quote);
$author =$separatedQuote[0];
$quote =$separatedQuote[1];
$reversedQuote = array_reverse($separatedQuote);
$newQuote = implode(' - ',$reversedQuote);
$separatedTxt[4] = $newQuote;
$modifiedEmailContent = implode(" ",$separatedTxt);


var_dump($modifiedEmailContent);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>
        <?php foreach ($separatedTxt as $segment) : ?>
            <p> <?php echo $segment; ?> </p>
            <?php endforeach;?>
    </p>
</body>
</html>