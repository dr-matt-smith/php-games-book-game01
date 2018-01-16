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

<h2>Guess a number from 1 to <?= MAX_GUESS ?>:</h2>

<ul class="numberCircles">
    <?php
    for($i = 1; $i <= MAX_GUESS; $i++){
        // in the form:     <li><a href="processGuess.php?action=processGuess&guess=1">1</a></li>
        print '<li><a href="index.php?action=processGuess&guess=' . $i . '">' . $i . '</a></li>';
        print PHP_EOL;
    }
    ?>
</ul>
</body>
</html>

