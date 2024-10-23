<?php 

$campaigns = [
    'Spring Sale' => [
        'AdSet1' => [
            'name' => 'Discounted Gadgets',
            'clicks' => 150,
            'impressions' => 10000
        ],
        'AdSet2' => [
            'name' => 'Outdoor Equipment',
            'clicks' => 250,
            'impressions' => 15000
        ],
    ],
    'Holiday Deals' => [
        'AdSet1' => [
            'name' => 'Winter Apparel',
            'clicks' => 200,
            'impressions' => 12000
        ],
        'AdSet2' => [
            'name' => 'Electronics Special',
            'clicks' => 300,
            'impressions' => 18000
        ],
    ],
];

    $totalCampaignClicks = [];
    $totalCampaignImpressions = [];
    $totalAds=0;
    
foreach ($campaigns AS $adSets =>$adSetsValues) {
    // var_dump($campaigns);
    // $adCount = count($campaigns);
    $totalClicks  =0 ;
    $totalImpressions = 0;
    
    // var_dump($adSets);
    foreach($adSetsValues As $value){
        $totalClicks += $value['clicks'];
        $totalImpressions += $value['impressions'];
        $totalAds ++;
        
        
    }
    $totalCampaignClicks[] = [$adSets => $totalClicks];
    $totalCampaignImpressions[] = [$adSets => $totalImpressions];
    
}
// var_dump($totalCampaignClicks);
// var_dump($totalCampaignImpressions);
$totalAdclicks = 0;
foreach($totalCampaignClicks AS $values){
    foreach($values AS $value){

        $totalAdclicks += $value;
        // var_dump($value);
    }
}

$clicksAvg = $totalAdclicks / $totalAds;

$totalAdImpressions = 0;
foreach($totalCampaignImpressions AS $values){
    foreach($values AS $value){
        
        $totalAdImpressions += $value;
        // var_dump($value);
    }
}
// var_dump($totalAdImpressions);
$impressionAvg = $totalAdImpressions / $totalAds;

echo "Average clicks per ad set: $clicksAvg, Average impressions per ad set: $impressionAvg.";