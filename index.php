<?php
session_start();
include "D:/os/OSPanel/domains/ichiru/engine/constants.php";
if (empty($_SESSION['userid'])){
    include "D:/os/OSPanel/domains/ichiru/templates/modules/header.php";
}
else if (empty($_SESSION['userclass'])) {
	include "D:/os/OSPanel/domains/ichiru/templates/modules/createcharacter.php";
}
else{
	include "D:/os/OSPanel/domains/ichiru/engine/main/main.php";
}
?>