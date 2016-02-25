<?php
session_start();
//detect game
if(!isset($_SESSION['players'])){
    include 'templates/start-screen.php';
} else{
    include 'functions/functions.php';
    include 'templates/battle-screen.php';
}
