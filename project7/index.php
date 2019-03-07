<!DOCTYPE html>
<html>
    <head>
        <title>RPS</title>

        

        <link rel="stylesheet" type="text/css" href="styles.css?<?php echo rand(); ?>" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="scripts.js?<?php echo rand(); ?>"></script>
    </head>

    <body>

        <h1>Barbarian Style Rock Paper Scissors</h1>
        <h2>One Game Decides All</h2>

        <svg width="500" height="400">

            <rect id="background" x="0" y="0" width="500" height="400" fill="purple"/>
            
            <g>
                <rect id="paper1" class="throw" x="125" y="275" width="50" height="55" style="visibility: hidden;" />
                <image id="rock1" class="throw" x="100" y="275" xlink:href="https://pbs.twimg.com/profile_images/3478244961/01ebfc40ecc194a2abc81e82ab877af4.jpeg" width="50%" height="50%"  style="visibility: hidden;" />
                <polygon id="scissors1" class="throw" points="125,275 150,300 125,250" style="visibility: hidden;" />
            </g>
            
            <g>
                <rect id="paper2" class="throw" x="250" y="275" width="50" height="55" style="visibility: hidden;" />
                <image id="rock2" class="throw" x="250" y="275"xlink:href="https://pbs.twimg.com/profile_images/3478244961/01ebfc40ecc194a2abc81e82ab877af4.jpeg" width="50%" height="50%"  style="visibility: hidden;" />
                <polygon id="scissors2" class="throw" points="250,275 275,300 250,250" style="visibility: hidden;" />
            </g>
            
            
        <div id="throws">
            <button onclick= "rock()">Rock!</button>
            <button onclick= "paper()">Paper!</button>
            <button onclick= "scissors()">Scissors!</button>
        </div>
        <text id="message" x="250" y="370"></text>