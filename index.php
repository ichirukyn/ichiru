<?php
session_start();
if (empty($_SESSION['userlogin'])){    
    include "D:/os/OSPanel/domains/ichiru/templates/modules/header.php";
}
else if (empty($_SESSION['userclass'])) {
	include 'D:/os/OSPanel/domains/ichiru/templates/modules/createcharacter.php';
}
else
{
    include "D:/os/OSPanel/domains/ichiru/php/page/main.php";
}
?>