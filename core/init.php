<?php
//connecting to database
$dbServer="localhost";
$dbUsername="root";
$dbPassword="";
$dbName="topmovers";
$conn = mysqli_connect($dbServer,$dbUsername,$dbPassword,$dbName);
if (!$conn) {
    die("Database connection failed whith the following error: ".mysqli_connect_error());
        # code...
}

session_start();

require_once $_SERVER['DOCUMENT_ROOT'].'/topmovers/config.php';
require_once BASEURL.'helpers/helper.php';


//Alerts
if(isset($_SESSION['success_flash'])){
     echo '<div style="text-align:center; background-color:#89ed68;  font-weight:bolder" class="alert alert-dismissible"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>'.$_SESSION['success_flash'].'</div>';
    unset($_SESSION['success_flash']);
}
if(isset($_SESSION['error_flash'])){
    echo '<div style="text-align:center; color:#fff;  background-color:#ff0000; font-weight:bolder" class="alert alert-dismissible"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>'.$_SESSION['error_flash'].'</div>';
    unset($_SESSION['error_flash']);
}