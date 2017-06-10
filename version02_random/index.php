<?php

// choose random number
$min = 1;
$max = 5;
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

<h2>Guess a number from 1 to 5:</h2>

<ul class="numberCircles">
<?php
    if(1 == $rightAnswer){
        print '<li><a href="resultWin.php">1</a></li>';
    } else {
        print '<li><a href="resultLose.php">1</a></li>';
    }

    if(2 == $rightAnswer){
        print '<li><a href="resultWin.php">2</a></li>';
    } else {
        print '<li><a href="resultLose.php">2</a></li>';
    }

    if(3 == $rightAnswer){
        print '<li><a href="resultWin.php">3</a></li>';
    } else {
        print '<li><a href="resultLose.php">3</a></li>';
    }

    if(4 == $rightAnswer){
        print '<li><a href="resultWin.php">4</a></li>';
    } else {
        print '<li><a href="resultLose.php">4</a></li>';
    }

    if(5 == $rightAnswer){
        print '<li><a href="resultWin.php">5</a></li>';
    } else {
        print '<li><a href="resultLose.php">5</a></li>';
    }
?>
</ul>

<footer>
    ... hint ... the right answer is <?= $rightAnswer ?>
</footer>
</body>
</html>

