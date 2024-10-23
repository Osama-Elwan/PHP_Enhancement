<?php
$campaigns = [
    'Spring Sale' => [
        'AdSet1' => [
            'name' => 'Discounted Gadgets'
        ],
        'AdSet2' => [
            'name' => 'Outdoor Equipment'
        ],
    ],
    'Holiday Deals' => [
        'AdSet1' => [
            'name' => 'Winter Apparel'
        ],
        'AdSet2' => [
            'name' => 'Electronics Special'
        ],
    ],
];
// var_dump($campaigns);

foreach($campaigns AS $campaignName=>$adSets) {
    echo "- $campaignName: ";
    $adSetNames = '';
    $adSetCount =count($adSets);
    $index = 0;
    foreach($adSets AS $adSet){
        $adSetNames .= "\"{$adSet['name']}\"";
        if ($index < $adSetCount - 1) {
            $adSetNames .= ', ';
        }
        $index++; // Increment the index
    }
    echo "$adSetNames" ."<br>";
}

