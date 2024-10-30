<?php

$emailTemplate = "Dear [NAME],\n\nWe're excited to share with you this week's featured article:\n\n[ARTICLE]\n\nUpcoming Events:\n[EVENTS]\n\nBest regards,\nYour Friendly Team";

$recipient = ['name' => 'Alice', 'segment' => 'Tech Enthusiast', 'email' => 'alice@example.com'];

$segmentContent = [
    'Tech Enthusiast' => "The Latest in Tech: Top Gadgets",
    'Health Guru' => "Transform Your Lifestyle: The Best of Health and Fitness",
];

$events = [
    "Webinar on Future Tech Trends", 
    "Photography Workshop", 
    "Health and Wellness Retreat"
];
$personalizedEmail = str_replace('[NAME]',$recipient['name'],$emailTemplate);
// var_dump($personalizedEmail);

$personalizedEmail = str_replace(['[ARTICLE]','[NAME]'],[$segmentContent[$recipient['segment']],$recipient['name']],$emailTemplate);
// var_dump($personalizedEmail);

$eventStrings ='- '. implode("\n- ",$events);
// var_dump($eventStrings);
// $personalizedEmail = str_replace('[EVENTS]',$eventStrings,$emailTemplate);

$personalizedEmail = str_replace(['[ARTICLE]','[NAME]','[EVENTS]'],[$segmentContent[$recipient['segment']],$recipient['name'],$eventStrings],$emailTemplate);
var_dump($personalizedEmail);