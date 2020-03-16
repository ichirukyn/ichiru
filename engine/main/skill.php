<?php 
session_start();
?>
<head>
    <link rel="stylesheet" type="text/css" href="http://ichiru/templates/css/styles.css">
</head>
<div class="quest_wrap">
    <form class="form_quest" action="/engine/main/skill_config.php" method="post" name="form_addcharacter" id="addquest">
        <label>Название навыка</label>
        <input type="text" name="skill_title">
        <label>Описание</label>
        <textarea name="skill_desc" cols="40" rows="6" style="color:#000;"></textarea>
        <label>Зависимые характеристики</label>
        <select name="skill_point[]" form="addquest" multiple required>
                <option value="str">str</option>
                <option value="speed">speed</option>
                <option value="dexterity">dexterity</option>
                <option value="stamina">stamina</option>
                <option value="durability">durability</option>
                <option value="reflexes">reflexes</option>
                <option value="accuracy">accuracy</option>
                <option value="intelligence">intelligence</option>
                <option value="wisdom">wisdom</option>
                <option value="intuition">intuition</option>
                <option value="memory">memory</option>
                <option value="charisma">charisma</option>
                <option value="mind">mind</option>
                <option value="lucky">lucky</option>
           </select>
        <li class="exit_add">
            <a href='http://ichiru' class='HeaderUserNickname'>Назад</a>
            <input type="submit" class="submit1" />
        </li>
    </form>
</div>
