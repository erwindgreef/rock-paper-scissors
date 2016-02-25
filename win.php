<?php
session_start();
$_SESSION['round']++;
include 'functions/functions.php';
include 'templates/win-screen.php';