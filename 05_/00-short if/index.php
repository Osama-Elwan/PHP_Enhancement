<?php


$name = 'osama';
// if($name === 'osama') {
//     echo 'the name is osama';
// }else {
//     echo 'name Not osama ';
// }
// if($name === 'osama') echo "hello osama";
// else echo "hello user";


// echo ($name === 'osama' ? 'the name is osama' : 'the name not osama');
$outName = ($name === 'osama' ? 'the name is osama' : 'the name not osama');
// echo $outName;

$array = [
    'ABC',
    ($name === 'osama' ? 'the name is osama' : 'the name not osama')
];
var_dump($array);