<?php
session_start();
include "D:/os/OSPanel/domains/ichiru/engine/constants.php";
if (empty($_SESSION['userid'])){
    include "D:/os/OSPanel/domains/ichiru/templates/modules/header.php";
}
else if (empty($_SESSION['1userclass'])) {
	include "D:/os/OSPanel/domains/ichiru/templates/modules/createcharacter.php";
}
?>