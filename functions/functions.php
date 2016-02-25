<?php
//displays opponent as computer or player
function player2(){
    if ($_SESSION['players'] == 1){
        echo 'Computer';
    } else {
        echo 'Player 2';
    }
}

//sets links when it's the players turn
function choice($player, $hand){
    if($_SESSION['playerturn'] == $player){
        echo 'href="update-score.php?choice=' . $hand . '"';
    }
}

//displays the current round when rounds are greater then 1
function inRound(){
    if ($_SESSION['rounds'] > 1){
        echo 'Round ' . $_SESSION['round'];
    }
}

//displays the player who won the round
function wonRound(){
    echo $_SESSION['winsround'];
}

//shows the button  for next round or new game
function buttonWin(){
    if ($_SESSION['round'] == ($_SESSION['rounds'] + 1)){
        echo '<a href="reset-score.php"><button type="button" class="btn btn-lg btn-success">New Game</button></a>';
    } else {
        echo '<a href="index.php"><button type="button" class="btn btn-lg btn-warning">Round ' . $_SESSION['round'] . '</button></a>';
    }
}

function hoverEffect($player){
    if($_SESSION['playerturn'] == $player){
        echo 'hoverEffect';
    } else {
        echo 'noHoverEffect';
    }
}