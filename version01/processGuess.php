<?php
// choose random number
$min = 1;
$max = 5;
$rightAnswer = rand($min, $max);

// get guess data from request
$guess = filter_input(INPUT_GET, 'guess');

// display appropriate page
if($guess == $rightAnswer) {
    include __DIR__ . '/resultSuccess.php';
} else {
    include __DIR__ . '/resultFailure.php';
}