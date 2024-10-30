<?php 

$emailContent = "Dear alex  ,\n\nWe hope this message finds you well.\n\nThis month, we are focusing on personal growth and innovation. Don't miss out on our exclusive insights!\n\nBest wishes,\nYour Discovery Network Team\nP.S. Check out our latest blog post!";
//one

$greeting = "Dear alex  ,\n\n";
$startPosition = strpos($emailContent,$greeting)+ strlen($greeting);
// var_dump($startPosition);
$previewText = substr($emailContent, $startPosition, 30);
$emailPreview = $previewText.'...';
// var_dump($emailPreview);

//two

// var_dump(strpos($emailContent,'insights!'));

$endPostion = strpos($emailContent,"Best")-$startPosition;

$mainBody = substr($emailContent,strpos($emailContent,'We'),$endPostion);
$charCount = strlen($mainBody);

// var_dump($charCount."<br>");
// var_dump($mainBody);


//three


$startDear = "Dear ";
$endOfName = ",";
$startPosition = strpos($emailContent,$startDear)+ strlen($startDear);
$endPostion = strpos($emailContent,$endOfName);
// var_dump($endPostion);
$name = trim(substr($emailContent,$startPosition,$endPostion-$startPosition));
// var_dump($name);

$updatedName = ucfirst(strtolower($name));
// var_dump($updatedName);

$updatedEmailContent  = substr($emailContent,0,$startPosition) . $updatedName . substr($emailContent,$endPostion);
var_dump($updatedEmailContent);

