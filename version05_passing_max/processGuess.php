<?php
// get guess data from request
$guess = filter_input(INPUT_GET, 'guess');
$max = filter_input(INPUT_GET, 'max');

// choose random number
$min = 1;
$rightAnswer = rand($min, $max);

// display appropriate page
if($guess == $rightAnswer) {
    include __DIR__ . '/resultWin.php';
} else {
    include __DIR__ . '/resultLose.php';
}