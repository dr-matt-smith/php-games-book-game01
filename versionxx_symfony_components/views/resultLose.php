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
    <img src="/images/thumbs_down.png" alt="thumbs down">
    <img src="/images/sad_computer.png" alt="sad computer">

<p>
<p>
    Bad luck, the answer was <span class="numberCircle">2</span>

    <a href="/">play again</a>

</body>
</html>


