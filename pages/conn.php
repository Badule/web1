<?php

$servername="localhost";
$username="root";
$password="";
$dbname="web";

$conn=new mysqli("$servername","$username" , "$password","$dbname");

if(!$conn){
    die ("Nu am reusit".  mysqli_connect_error());
}



?>