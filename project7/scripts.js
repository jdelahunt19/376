var ROCK = 1;
var PAPER = 2;
var SCISSORS = 3;
var opponent;
var player;
function rock(){
    player = ROCK;
    $("#rock1").css("visibility", "visible");
    opponentToss();
    checkWinner();
    
}

function scissors(){
    player= SCISSORS;
    $("#scissors1").css("visibility", "visible");
    opponentToss();
    checkWinner();
}

function paper(){
    player = PAPER;
    $("#paper1").css("visibility", "visible");
    opponentToss();
    checkWinner();
}
function oppRock(){
    $("#rock2").css("visibility", "visible");
}
function oppScissors(){
    $("#scissors2").css("visibility", "visible");
}
function oppPaper(){
    $("#paper2").css("visibility", "visible");
}

function opponentToss(){
    opponent = Math.ceil(Math.random() * 3);
    if (opponent == ROCK) {
        $("#rock2").css("visibility", "visible");
    } else if (opponent == PAPER) {
        $("#paper2").css("visibility", "visible");
    } else if (opponent == SCISSORS) {
        $("#scissors2").css("visibility", "visible");
}
}

function checkWinner(){
    if (player == opponent) {
        $("#message").text("Niether party is correct. Go home.");
    }
    if (player == ROCK && opponent == PAPER) {
        $("#message").text("paper covers rock. YOU are MALODOROUS")
    } 
    if (player == PAPER && opponent == SCISSORS) {
        $("#message").text("Scissors cuts paper. YOU are MALODOROUS")
    } 
    if (player == SCISSORS && opponent == ROCK) {
        $("#message").text("Rock crushes scissors. YOU are MALODOROUS")
    }
    if (player == PAPER && opponent == ROCK) {
        $("#message").text("paper covers rock. YOUR ODOR IS PLEASANT THIS DAY!")
    } 
    if (player == ROCK && opponent == SCISSORS) {
        $("#message").text("Rock crushes scissors. YOUR ODOR IS PLEASANT THIS DAY!")
    } 
    if (player == SCISSORS && opponent == PAPER) {
        $("#message").text("Scissors cuts paper. YOUR ODOR IS PLEASANT THIS DAY!")
    } 
    
}
