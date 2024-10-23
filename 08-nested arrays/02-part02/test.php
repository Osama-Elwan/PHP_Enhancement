<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="simple.css">
    <title>Document</title>
</head>
<body>
    <?php 
$cinema = [
    ["hall" => "B", "movie" => "Echoes of Tomorrow", "tickets_sold" => 120],
    ["hall" => "D", "movie" => "Moon Ride", "tickets_sold" => 150],
    ["hall" => "F", "movie" => "The Infinite Dive", "tickets_sold" => 80]
  ];
  
  $htmlOutput = "";
  foreach ($cinema as $screening) {
    $htmlOutput = $htmlOutput . "<div>Hall: " . $screening["hall"] . ", Movie: " . $screening["movie"] . " (" . $screening["tickets_sold"] . ") </div>"; //change var htmlOutput to echo
  }
  var_dump($htmlOutput);
    ?>
   
</body>
</html>