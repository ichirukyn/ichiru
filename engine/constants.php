<?php

//Подключение шапки
function INC_Header() {
    include_once 'D:/os/OSPanel/domains/ichiru/templates/modules/header.php';
}

//Подключение шаблона
function INC_Main() {
    include_once 'D:/os/OSPanel/domains/ichiru/engine/main/main.php';
}

//Подключение БД
function INC_BD() {
    include_once 'D:/os/OSPanel/domains/ichiru/bd_connect.php';
}