<?php

session_start();
include('php/db_connect.php');
require "config.php";
require "helpers.php";
// phpinfo();
if (!isset($_SESSION['loggedin'])) {
    echo "here";
    header('Location: '.route('login'));
    exit;
}
$routeList = explode("/",$_SERVER['REQUEST_URI']);
$routeName = end($routeList);

if($routeName == ""){
     view("home.php");
}elseif($routeName == "login"){
    view("php/login.php");
}else{
    include "404.php";
}