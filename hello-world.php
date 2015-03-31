<?php

require 'vendor/autoload.php';


$json = <<<JSON
{
    "name": {
        "first": "Lloyd",
        "last": "Hilaiel"
    },
    "favoriteColor": "yellow",
    "languagesSpoken": [
        {
            "language": "Bulgarian",
            "level": "advanced"
        },
        {
            "language": "English",
            "level": "native"
        },
        {
            "language": "Spanish",
            "level": "beginner"
        }
    ],
    "seatingPreference": [
        "window",
        "aisle"
    ],
    "drinkPreference": [
        "beer",
        "whiskey",
        "wine"
    ],
    "weight": 172
}
JSON;

$selector = "string:first-child";

$output = <<<OUTPUT
"window"
"beer"
OUTPUT;


$parser = (new JSONSelect($selector));

print_r($parser->match($json));
