<?php

// choose random number
$min = 1;
$max = 7;
$rightAnswer = rand($min, $max);

?>

<!doctype html>
<html lang="en">
<head>
    <title>guessing game</title>
    <style>
        @import '/css/lottery.css';
        @import '/css/style.css';
    </style>
</head>
<body>
<h1>The wonderful number guessing game</h1>

<h2>Guess a number from 1 to <?= $max ?>:</h2>

<ul class="numberCircles">
    <?php
        for($i = 1; $i <= $max; $i++){
            if($i == $rightAnswer){
                print '<li><a href="resultWin.php">' . $i . '</a></li>';
                print PHP_EOL;

            } else {
                print '<li><a href="resultLose.php">' . $i . '</a></li>';
                print PHP_EOL;
            }
        }
    ?>
</ul>

<!--
<footer>
    ... hint ... the right answer is <?= $rightAnswer ?>
</footer>
-->

</body>
</html>

