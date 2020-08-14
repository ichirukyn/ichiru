<?php 
session_start();
?>
<head>
    <link rel="stylesheet" type="text/css" href="http://ichiru/templates/css/styles.css">
</head>
<div class="quest_wrap">
    <form class="form_quest" action="/engine/main/spells/add_spells_config.php" method="post" name="form_addcharacter" id="addquest">
        <label>Название заклинания</label>
        <input type="text" name="spells_title">
        <label>Описание</label>
        <textarea name="spells_desc" cols="40" rows="6" style="color:#000;"></textarea>
        <label>Мана</label>
        <input type="text" name="spells_mp">
        <label>Зависимые характеристики</label>
        <select name="spells_lvl" form="addquest" required>
            <option value="beginner">beginner</option>
            <option value="student">student</option>
            <option value="adept">adept</option>
            <option value="specialist">specialist</option>
            <option value="professional">professional</option>
            <option value="master">master</option>
            <option value="great">great</option>
            <option value="epic">epic</option>
            <option value="legendary">legendary</option>
            <option value="divine">divine</option>
        </select>
        <li class="exit_add">
        <a href='http://ichiru' class='HeaderUserNickname'>Назад</a>
        <input type="submit" class="submit1" />
        </li>
    </form>
</div>










