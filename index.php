<?php
session_start();
if (empty($_SESSION['user_class'])){    
    include "D:/os/OSPanel/domains/ichiru/templates/header.php";
}
else{
    include "D:/os/OSPanel/domains/ichiru/php/page/main.php";
}
?>