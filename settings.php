<?php
session_start();
//set settings in session (these do not change)
$_SESSION['players'] = $_POST['players'];
$_SESSION['rounds']  = $_POST['rounds'];

//base game settings (these do change)

//who's turn is it
$_SESSION['playerturn']    = 1;
//which round is it
$_SESSION['round']   = 1;
//which choice is made
$_SESSION['player1choice'] = '';
$_SESSION['player2choice'] = '';
//how many points
$_SESSION['player1points'] = 0;
$_SESSION['player2points'] = 0;
//Who won won round
$_SESSION['winsround'] = '';

//after set settings go to the game
header('Location: index.php');

    
    
