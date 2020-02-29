<?php

$server="localhost";
$username="root";
$password="";
$database="prideandproperty";

$link=mysqli_connect($server,$username,$password,$database);

if ($link==false){

    die("Error: Could not connect to the server".mysqli_connect_error());
}

