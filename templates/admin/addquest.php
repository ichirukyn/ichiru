<?php 
session_start();
?>
<head>
	<link rel="stylesheet" type="text/css" href="http://ichiru/templates/css/styles.css">
</head>
<div class="quest_wrap">
	<form class="form_quest" action="/engine/main/quest_config.php" method="post" name="form_addcharacter" id="addquest">
		<label>Название квеста</label>
		<input type="text" name="quest_title">
		<label>Описание</label>
		<textarea name="quest_desc" cols="40" rows="6" style="color:#000;"></textarea>
		<label>Задача</label>
		<input type="text" name="quest_progress">
		<label>Ранг</label>
		<select name="quest_rang" form="addquest" multiple required>
			    <option value="S+">S+</option>
			    <option value="S">S</option>
			    <option value="A">A</option>
			    <option value="B">B</option>
			    <option value="С">С</option>
			    <option value="D">D</option>
		   </select>
		<label>Минимальный уровень</label>
		<input type="text" name="quest_lvl">
		<li class="exit_add">
		  	<a href='http://ichiru' class='HeaderUserNickname'>Назад</a>
  			<input type="submit" class="submit1" />
		</li>
	</form>
</div>