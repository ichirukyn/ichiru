<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="http://ichiru/templates/css/styles.css">
</head>
<body style="background: #343436;">
	<form enctype="multipart/form-data" action="/engine/user/addcharacter_config.php" method="post" name="form_addcharacter" class="form_addcharacter" id="form_addcharacter">
	<ul class="form-add">
		<li>
			<label>Имя</label>
			<input type="text" name="name" placeholder="Имя персонажа" class="input" data-validate>
		</li>
		<li>
			<label>Возраст</label>
			<input type="text" name="age" placeholder="Фамилия персонажа" class="input" data-validate>
		</li>
		<li>
			<label>Пол</label>
			<select name="genre" form="form_addcharacter" size = "1" required>
			    <option value="Мужчина">Мужчина</option>
			    <option value="Женщина">Женщина</option>
		   </select>
		</li>
		<li class="select">
			<label>раса</label>
			<select name="race" form="form_addcharacter" size = "1" required>
			    <option value="high elf">Высший Эльф</option>
			    <option value="forest elf">Лесной эльф</option>
			    <option value="night elf">Ночной эльф</option>
			    <option value="dark elf">Тёмный эльф</option>
			    <option value="grey elf">Серый Эльф</option>
			    <option value="sun elf">Солнечный эльф</option>
			    <option value="sand elf">Песчаный эльф</option>
			    <option value="sea elf">Морской эльф</option>
			    <option value="snow elf">Снежный эльф</option>
			    <option value="blood elf">Кровавый Эльф</option>
			    <option value="ork">Орк</option>
			    <option value="dvorf">Дворф</option>
			    <option value="gnom">Гном</option>
			    <option value="semicircular">Полурослик</option>
			    <option value="semicircular">Гоблин</option>
		   </select>
		</li>
		<li>
			<label>Характер</label>
			<select name="character" form="form_addcharacter" size = "1" required>
			    <option value="Добропорядочный">Добропорядочный</option>
			    <option value="Нейтральный">Нейтральный</option>
			    <option value="Злонамерный">Злонамерный</option>
		   </select>
		</li>
		<li>
			<label>Внешность</label>
			<input type="file" name="avatar" required>
		</li>
		<li>
			<label>Мировозрение</label>
			<select name="worldview" form="form_addcharacter" size = "1" required>
			    <option value="научное">научное</option>
			    <option value="суеверное">суеверное</option>
			    <option value="обыденное">обыденное</option>
			    <option value="религиозное">религиозное</option>
			    <option value="философское">философское</option>
		   </select>
		</li>
 		 <li>
			<label>Жизненная цель</label>
			<select name="life goal" form="form_addcharacter" size = "1" required>
			    <option value="Убить всех">Убить всех</option>
			    <option value=""></option>
			    <option value=""></option>
			    <option value=""></option>
		   </select>
		</li>
 		 <li>
			<label>Хобби</label>
			<select name="hobby" form="form_addcharacter" size = "1" required>
			    <option value="Работать в кузне">Работать в кузне</option>
			    <option value="Читать книги">Читать книги</option>
			    <option value="Торговать">Торговать</option>
			    <option value="Нападать на путников">Нападать на путников</option>
		   </select>
		</li>
  		<li>
			<label>Снаряжение</label>
			<select name="equipment" form="form_addcharacter" size = "1" required>
			    <option value="Тяжелый воин">Тяжелый воин</option>
			    <option value="Обычный воин">Обычный воин</option>
			    <option value="Рейнджер">Рейнджер</option>
			    <option value="Маг">Маг</option>
			    <option value="Обычное">Обычное</option>
		   </select>
		</li>
  		<li>
			<label>Магия, активные способности, пассивные способности, расовые способности</label>
			<select size="6" name="skill" form="form_addcharacter" required>
			    <option value="5">Одноручное дробящее оружие</option>
			    <option value="Парирование">Парирование</option>
			    <option value="Магическое мастерство">Магическое мастерство</option>
			    <option value="Скрытность">Скрытность</option>
		   </select>
		</li>
 		 <li>
			<label>Языки</label>
			<select multiple name="language" form="form_addcharacter" required>
			    <option value="1">1</option>
			    <option value="2">2</option>
			    <option value="3">3</option>
			    <option value="4">4</option>
		   </select>
		</li>
 		 <li>
			<label>Отношения с другими расами</label>
			<select name="relations" form="form_addcharacter" size = "1" required>
			    <option value="Доверие">Доверие</option>
			    <option value="Дружба">Дружба</option>
			    <option value="Нейтральное">Нейтральное</option>
			    <option value="Вражда">Вражда</option>
		   </select>
		</li>
  		<li>
			<label>Предыстория</label>
			<select name="prehistory" form="form_addcharacter" size = "1" required>
			    <option value="Ученик академии">Ученик академии</option>
			    <option value="Сын кузнеца">Сын кузнеца</option>
			    <option value="Бежавший дворянин">Бежавший дворянин</option>
			    <option value="Родился жил умер..">Родился жил умер..</option>
		   </select>
		</li>
		<li class="exit_add">
		  	<a href='http://ichiru/engine/user/exit.php' class='HeaderUserNickname'>Назад</a>
  			<input type="submit" class="submit" />
		</li>
	</ul>
	</form>
</body>
</html>