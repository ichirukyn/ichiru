<?php
session_start();
include "bd.php";




if (empty($_SESSION['userid'])){
    include "D:/os/OSPanel/domains/ichiru/templates/modules/header.php";
}
else if (empty($_SESSION['user_name'])) {
	include "D:/os/OSPanel/domains/ichiru/templates/modules/createcharacter.php";
}
else{
	include "templates/html/main.php";
}



$RequestURI = $_SERVER['REQUEST_URI']; // Узнаем где находиться пользователь
$RequestURI = str_replace('/', '', $RequestURI); // Убираем не нужное
$RequestApiArray = explode('?', $RequestURI);
$RequestApi = $RequestApiArray[0];


//Скрипт который переносит пользователя куда нужно
switch ($RequestApi) {
	//Полезные модули
	case 'modules':
        include_once 'engine/main/modules/modules.php';
        break;

	//Взаимодействие с пользователями
    //Форма регистрации
    case 'register':
        include_once 'templates/user/register.php';
        break;
    case 'register':
        include_once 'templates/user/register.php';
        break;
    //Скрипт регистрации
    case 'user.register':
            include_once 'engine/user/user.register.php';
        break;
    // Форма авторизаии
    case 'auth':
        include_once 'templates/user/auth.php';
        break;
    // Скрипт авторизации
    case 'user.auth':
        include_once 'engine/user/user.auth.php';
        break;
    // Скрипт выхода
    case 'user.exit':
        include_once 'engine/user/user.exit.php';
        break;
    // Страниа пользователя
    case 'user.profile':
        include_once 'templates/user/user.profile.php';
        break;



    //Админпанель 
    // Главная страниа админпанели    
    case 'admin.panel':
        include_once 'templates/admin/adminpanel.php';
        break;
    // API для получения списка пользователя
    case 'user.get':
        include_once 'templates/admin/user.get.php';
        break;
    case 'user.sort':
        include_once 'templates/admin/user.sort.php';
        break;
    case 'game.test':
        include_once 'templates/user/game.test.php';
        break;


    default:
	    //include 'engine/main/modules/modules.php';
        include_once 'templates/html/main.php';        
    break;
}

// модули
//include "modules";

