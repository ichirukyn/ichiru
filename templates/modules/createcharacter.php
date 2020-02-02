<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="http://ichiru/templates/css/styles.css">
</head>
<body>
	<form action="/engine/user/addcharacter_config.php" method="post" name="form_addcharacter" class="form_addcharacter" id="form_addcharacter">
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
			    <option value="Эльф">Эльф</option>
			    <option value="Дворф">Дворф</option>
			    <option value="Гном">Гном</option>
			    <option value="Полурослик">Полурослик</option>
		   </select>
		</li>
		<li class="select">
			<label>Класс</label>
			<select name="class" form="form_addcharacter"size = "1" required>
			    <option value="Воин">Воин</option>
			    <option value="Маг">Маг</option>
			    <option value="Лучник">Лучник</option>
			    <option value="Вор">Вор</option>
		   </select>
		</li>
		<li>
			<label>Характер</label>
			<select name="character" form="form_addcharacter" size = "1" required>
			    <option value="1">1</option>
			    <option value="2">2</option>
			    <option value="3">3</option>
			    <option value="4">4</option>
		   </select>
		</li>
		<li>
			<label>Внешность</label>
			<select name="face" form="form_addcharacter" size = "1" required>
			    <option value="В ближайшем будущем..">В ближайшем будущем..</option>
		   </select>
		</li>
		<li>
			<label>Мировозрение</label>
			<select name="worldview" form="form_addcharacter" size = "1" required>
			    <option value="1">1</option>
			    <option value="2">2</option>
			    <option value="3">3</option>
			    <option value="4">4</option>
		   </select>
		</li>
 		 <li>
			<label>Жизненная цель</label>
			<select name="life goal" form="form_addcharacter" size = "1" required>
			    <option value="Стать богом">Стать богом</option>
			    <option value="Заработать много денег">Заработать много денег</option>
			    <option value="Гарем!!!">Гарем!!!</option>
			    <option value="Все выше перечисленное">Все выше перечисленное</option>
		   </select>
		</li>
 		 <li>
			<label>Хобби</label>
			<select name="hobby" form="form_addcharacter" size = "1" required>
			    <option value="Работать в кузне">Работать в кузне</option>
			    <option value="Читать книги">Читать книги</option>
			    <option value="Торговать">Торговать</option>
		   </select>
		</li>
  		<li>
			<label>Снаряжение</label>
			<select name="equipment" form="form_addcharacter" size = "1" required>
			    <option value="Тяжелый воин">Тяжелый воин</option>
			    <option value="Обычный воин">Обычный воин</option>
			    <option value="Рейнджер">Рейнджер</option>
			    <option value="Маг">Маг</option>
		   </select>
		</li>
  		<li>
			<label>Магия, активные способности, пассивные способности, расовые способности</label>
			<select multiple name="skill" form="form_addcharacter" required>
			    <option value="Боевые искусства">Боевые искусства</option>
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
			    <option value="Ангел спустившийся с небес">Ангел спустившийся с небес</option>
		   </select>
		</li>
  	<input type="submit"/>
	</ul>
	</form>
</body>
</html>