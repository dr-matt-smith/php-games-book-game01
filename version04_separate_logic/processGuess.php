<?php
// choose random number
$min = 1;
$max = 7;
$rightAnswer = rand($min, $max);

// get guess data from request
$guess = filter_input(INPUT_GET, 'guess');

// display appropriate page
if($guess == $rightAnswer) {
    include __DIR__ . '/resultWin.php';
} else {
    include __DIR__ . '/resultLose.php';
}