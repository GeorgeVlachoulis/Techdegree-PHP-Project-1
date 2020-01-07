<?php

// PHP - Random Quote Generator
// Create the Multidimensional array of quote elements and name it quotes
// Each inner array element should be an associative array

$quotes = [
    ['quote'=>'All civilizations become either spacefaring or extinct.','source'=>'Carl Sagan'],
    ['quote'=>'I know the sky is not the limit because there are footprints on the Moon — and I made some of them.','source'=>'Buzz Aldrin'],
    ['quote'=>'To some this may look like a sunset. But it’s a new dawn.','source'=>'Chris Hadfield'],
    ['quote'=>'Earth is a small town with many neighborhoods in a very big universe.','source'=>'Ron Garan'],
    ['quote'=>'Curiosity is the essence of our existence.','source'=>'Gene Cernan']
];


// Create the getRandomQuuote function and name it getRandomQuote

function getRandomQuote($arr){
    $randArr = rand(0,count($arr)-1);
    $chosen = $arr[$randArr];
    return $chosen;
}

// Create the printQuote funtion and name it printQuote

function printQuote($arr){
//Casting the quote into the html file
	$pickQ = getRandomQuote($arr);
	
	$selected =  "<p class='quote'>".$pickQ['quote']."</p>".
                    '<p class="source">'.$pickQ['source']."</p>";

    echo $selected;
}
