<?php
session_start();
include "D:/os/OSPanel/domains/ichiru/engine/constants.php";
if (empty($_SESSION['user_class'])){
    INC_Header();
}
else{
    INC_Main();
}
?>