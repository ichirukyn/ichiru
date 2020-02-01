<!DOCTYPE html>
<html lang="ru">
<head>
    <title>Title</title>
    <link href="http://ichiru/templates/css/engine.css" type="text/css" rel="stylesheet">
    <link href="http://ichiru/templates/css/styles.css" type="text/css" rel="stylesheet">
</head>

<body>
    <div class="stats-wrapp">
	<div class="stats-wrapp-list">
        <div class="stats-list">
            <span>Статус:</span>
            <ul>
                <li class="class">Класс:</li> 
                <li class="inclass">Подкласс:</li>
                <li class="race">Раса:</li>
                <li class="lvl">Уровень:</li>
            </ul>
            <span>Основные:</span>
            <ul>
                <div class="text-status">
                    <li class="str">Сила:</li>
                    <li id="stats-1"><?php  echo $_SESSION['login']?></li> <button type="button" onClick="incrementClick()">+</button>
				</div>
                <div class="text-status">
                	<li class="stamina">Выносливость:<li>
                	<li class="stats-1"><?php  echo $_SESSION['login']?></li> <li class="plus-stats">+</li>
				</div>
				<div class="text-status">
                	<li class="dexterity">Ловкость:<li>
                	<li class="stats-1"><?php  echo $_SESSION['login']?></li> <li class="plus-stats">+</li>
				</div>
				<div class="text-status">
                	<li class="intelligence">Интелект:<li>
                	<li class="stats-1"><?php  echo $_SESSION['login']?></li> <li class="plus-stats">+</li>
				</div>
            </ul>
            <span>Побочные:</span>
            <ul>
                <li class="wisdom">Мудрость:</li>
                <li class="will">Воля:</li>
                <li class="charisma">Харизма:</li>
                <li class="lucky">Удача:</li>
            </ul>
            <span>Очки Характеристик:</span>
        </div>
	</div>
    <div class="general-stats">
		<ul>
            <li class="stats-link">Здоровье:</li>
            <li class="stats-link">Усталость:</li>
            <li class="stats-link">Физ. Атака:</li>
            <li class="stats-link">Маг. Атака:</li>
            <li class="stats-link">Шанс Крита:</li>
            <li class="stats-link">Крит. урон:</li>
            <li class="stats-link">Скорость Атаки:</li>
            <li class="stats-link">Уклонение:</li>
            <li class="stats-link">Точность:</li>
            <li class="stats-link">Скорость:</li>
            <li class="stats-link">Сопростивление физ. урону:</li>
            <li class="stats-link">Сопростивление маг. урону:</li>
            <li class="stats-link">Сопростивление к яду:</li>
            <li class="stats-link">Сопростивление контролю:</li>
		</ul>
	</div>
</div>
<script>
var clicks = 0;
    function incrementClick() {
        clicks += 1;
        document.getElementById("stats-1").innerHTML = clicks;
    };
    
    function createCookie(name, value, days) {
    var expires;
    if (days) {
        var date = new Date();
        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
        expires = "; expires=" + date.toGMTString();
    }
    else {
        expires = "";
    }
    document.cookie = name + "=" + value + expires + "; path=/";
};
    
    
    function getCookie(c_name) {
    if (document.cookie.length > 0) {
        c_start = document.cookie.indexOf(c_name + "=");
        if (c_start != -1) {
            c_start = c_start + c_name.length + 1;
            c_end = document.cookie.indexOf(";", c_start);
            if (c_end == -1) {
                c_end = document.cookie.length;
            }
            return unescape(document.cookie.substring(c_start, c_end));
        }
    }
    return "";
};
</script>
</bode>