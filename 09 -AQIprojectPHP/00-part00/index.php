<?php


// $content = file_get_contents(__DIR__ . "/../data/index.json");
// echo $content;
// var_dump(json_decode($content));
// $data =json_decode($content,true);
// var_dump($data);
// var_dump($data[0]['city']);



// phpinfo(); //check if bzip2 is enabled or not 

// echo filesize(__DIR__ . "/../data/singapore.json.bz2");
// echo file_get_contents(__DIR__ . "/../data/singapore.json.bz2");
// echo file_get_contents('compress.bzip2://' .__DIR__ . "/../data/singapore.json.bz2");

$data =json_decode(
    file_get_contents('compress.bzip2://' .__DIR__ . "/../data/singapore.json.bz2")
    ,true);
    var_dump($data);