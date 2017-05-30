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
<p>
    You guessed <span class="numberCircle"><?= $guess ?></span>
</p>

<p>
    <img class="computer" src="/images/happy_computer.png" alt="happy computer">
</p>

<p>
        Congratulations, the answer was <span class="numberCircle"><?= $rightAnswer ?></span>
        <img src="/images/thumbs_up.png" alt="thumbs up">
</p>

<a href="/">play again</a>

</body>
</html>

