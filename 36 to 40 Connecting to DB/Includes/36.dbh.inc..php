<?php

#take note that all these variables are user defined variables and are not standard or fixed.
$dbServerName="localhost";
$dbUserName="root";
$dbPassword="root";
$dbName="LearningPHP.";

#this is also a user defined variable
$connection=mysqli_connect($dbServerName, $dbUserName,$dbPassword, $dbName);