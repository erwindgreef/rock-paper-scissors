<?php
session_start();

//Get choice for player
if ($_SESSION['players'] == 2) {
    switch ($_SESSION['playerturn']) {
        case 1:
            $_SESSION['player1choice'] = $_GET['choice'];
            $_SESSION['playerturn'] = 2;
            header('Location: index.php');
            exit();
            break;
        case 2:
            $_SESSION['player2choice'] = $_GET['choice'];
            $_SESSION['playerturn'] = 1;
            break;
    }
} else {
    $_SESSION['player1choice'] = $_GET['choice'];
}

//if 1 player game, make random choice for computer
if ($_SESSION['players'] == 1){

    //random choice for computer
    $computerChoice = array(
    'rock',
    'paper',
    'scissors'
    );    
    $_SESSION['player2choice'] = $computerChoice[array_rand($computerChoice)];
}

//compare players hands
if ($_SESSION['player1choice'] == 'rock' && $_SESSION['player2choice'] == 'paper'){
    $_SESSION['player2points']++;
    if ($_SESSION['players'] == 2){
        $_SESSION['winsround'] = 'Player 2 wins!';
        } else {
            $_SESSION['winsround'] = 'Computer wins!';
        }   
    header('Location: win.php');
} elseif ($_SESSION['player1choice'] == 'paper' && $_SESSION['player2choice'] == 'scissors') {
    $_SESSION['player2points']++;
    if ($_SESSION['players'] == 2){
        $_SESSION['winsround'] = 'Player 2 wins!';
        } else {
            $_SESSION['winsround'] = 'Computer wins!';
        }  
    header('Location: win.php');
} elseif ($_SESSION['player1choice'] == 'scissors' && $_SESSION['player2choice'] == 'rock'){
    $_SESSION['player2points']++;
    if ($_SESSION['players'] == 2){
        $_SESSION['winsround'] = 'Player 2 wins!';
        } else {
            $_SESSION['winsround'] = 'Computer wins!';
        }  
    header('Location: win.php');
} elseif ($_SESSION['player1choice'] == $_SESSION['player2choice']) {
    $_SESSION['winsround'] = 'It&#39;s a draw!';
    header('Location: win.php');
} else {
    $_SESSION['player1points']++;
    $_SESSION['winsround'] = 'Player 1 wins!';
    header('Location: win.php');
}

