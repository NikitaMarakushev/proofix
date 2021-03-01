<?php

//Connection params
$hostname = "localhost";
$username = "root";
$password = "root";
$db_name = "courier_agency";

//Creation a connection
$connect = mysqli_connect($hostname, $username, $password, $db_name)
    or die("Ошибка подключения к базе данных".mysqli_error('!!!'));

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

