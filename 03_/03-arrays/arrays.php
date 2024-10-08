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
    $categories=['Programming','Business' ,'Art','History'];

    // var_dump($categories[99]);
    var_dump(in_array('Programming',$categories));
    if(in_array('Programming',$categories)){
        echo "Programming is a category on our system.\n";
    }
    var_dump(isset($categories[99]));
    var_dump(empty($categories[99]));

    //quiz
    // $attendees = ['Alex', 'Jordan', 'Taylor', 'Casey'];
    $attendees = ['Alex', 'Jordan', 'Taylor', 'Casey', 'Riley', 'Jamie'];
    // $attendees = array('Alex', 'Jordan', 'Taylor', 'Casey', 'Riley');
    // $attendees = ['', '', 'Jordan', 'Taylor', 'Casey', '', ''];

    $attendeeCount = count($attendees);

if ($attendeeCount >= 5) {
    echo "Sorry, the workshop is fully booked!";
} else {
    echo "Seats available. Register now!";
}
    ?></pre>
</body>
</html>