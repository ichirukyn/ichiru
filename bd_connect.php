<?php

$BDHost = 'localhost';
$BDUser = 'viid';
$BDPass = '123321';
$BDTable = 'viid';

$bd_connect = mysqli_connect($BDHost, $BDUser, $BDPass, $BDTable) or die("error BD" . mysqli_connect_error());
?>