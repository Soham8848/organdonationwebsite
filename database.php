<?php

$sever = "local";
$username = "name";
$password = "";
$dbname="newserver";

$con = mysqli_connect($sever,$username,$password,$dbname);

if(!$con){
    echo "not connected";
}
else{
    echo "connected";
}