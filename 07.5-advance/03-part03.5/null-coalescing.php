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
    
    if(isset($_GET['name'])){

    //   $name = (string) ($_GET['name'] ??'');
      $name = @(string) ($_GET['name'] ??'');//@ =>remove the warrning from type casting 
      var_dump($name);
      // @notexists(); //@ =>just use it for warrning its not work for any errors
    }
    ?></pre>
    <a href="null-coalescing.php?<?php echo http_build_query(['name' => ['osama','elwan']]); ?>">LINK</a>

   <!-- test  -->
    <?php 
//     $discount = '15';

//     if (is_integer($discount)) {
//     $finalPrice = 100 - $discount;
//     var_dump( $finalPrice);
//   } else if (is_float($discount)) {
//     $finalPrice = 100 - (100 * $discount);
//     var_dump( $finalPrice);
// }
$suffix = '_file';
$input = [
  'osama'=>'hello ',
  'elwan' =>'woled'
];

if (is_string($input)) {
    $result = $input . $suffix;
    var_dump($result);
  } else if (is_array($input)) {
    foreach ($input as $key => $value) {
      $input[$key] = $value . $suffix;
    }
    $result = $input;
}

?>
</body>
</html>