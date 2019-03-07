<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="css/rock_paper_scissors.css">
  <link href="https://fonts.googleapis.com/css?family=Asap" rel="stylesheet">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Rock Paper Scissors Game</title>
</head>
<body>

  <header>
    <h1>Rock Paper Scissors</h1>
  </header>

  <div class="score-board">
    <div id="user-label" class="badge">user</div>
    <div id="comp-label" class="badge">comp</div>
    <span id="user-score">0</span>:<span id="comp-score">0</span>
  </div>

  <div class="result">
    <p>Paper covers rock. You win!</p>
  </div>

  <div class="choices">
    <div id="rock" class="choice">
      <img src="https://pbs.twimg.com/profile_images/3478244961/01ebfc40ecc194a2abc81e82ab877af4.jpeg" alt="rock">
    </div>
    <div id="paper" class="choice">
      <img src="notes-pen-pencil-paper-study-report-icon-free-clipart-jnMgjj" alt="paper">
    </div>
    <div id="scissors" class="choice">
      <img src="https://cdn.rawgit.com/aronnax77/whatsdev_tutorials/ef296e2b/images/scissors.png" alt="scissors">
    </div>
  </div>

  <p id="action-message">Make your move</p>

  <script src="js/rock_paper_scissors.js"></script>

</body>
</html>
