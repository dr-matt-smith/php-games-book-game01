<?php

// choose random number
$min = 1;
$max = 7;

?>

<!doctype html>
<html lang="en">
<head>
    <title>guessing game</title>
    <style>
        @import '/css/lottery.css';
    </style>
</head>
<body>
<h1>The wonderful number guessing game</h1>

<h2>Guess a number from 1 to <?= $max ?>:</h2>

<ul class="numberCircles">
    <?php
    for($i = 1; $i <= $max; $i++){
        // in the form:     <li><a href="processGuess.php?max=7&guess=1">1</a></li>
        print '<li><a href="processGuess.php?max=' . $max . '&guess=' . $i . '">' . $i . '</a></li>';

// double quotes version:
//        print "<li><a href=\"processGuess.php?max={$max}&guess={$i}\">{$i}</a></li>";
        print PHP_EOL;
    }
    ?>
</ul>
</body>
</html>

