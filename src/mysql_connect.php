<?php

include_once ("conf.php");

$link = mysqli_connect($GLOBALS['host'], $GLOBALS['user'], $GLOBALS['password'], $GLOBALS['dbname']);

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

