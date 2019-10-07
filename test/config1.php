<?php
date_default_timezone_set('Asia/Kolkata');
session_start();
$title = 'Cineworld';
$link = mysqli_connect('localhost','ciniworld_stage','9QQBwH%M','cineworl_stage');
$conn = mysqli_connect('localhost','ciniworld_stage','9QQBwH%M','cineworl_stage');
$inventory_conn = mysqli_connect('localhost','ciniworld_stage','9QQBwH%M','cineworl_stage');
if(!$link) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}
?>
