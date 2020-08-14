<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="http://ichiru/templates/css/styles.css">
</head>
<body>

	<form enctype="multipart/form-data" action="/engine/user/player.add.php" method="post" name="form_addplayer" class="form_addplayer" id="form_addplayer">
	<ul class="form-add">
		<label>Имя:</label>
		<input type="text" name="name" placeholder="Имя персонажа:" class="input" data-validate>
		<label>раса:</label>
		<select name="race" form="form_addplayer" size = "1" required>
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
		<label>Внешность:</label>
		<input type="file" name="avatar" required>
		<div>
			<a href='http://ichiru/engine/user/exit.php' class='HeaderUserNickname'>Назад</a>
			<input type="submit" class="submit" />
		</div>
	</ul>
	</form>

</body>
</html>
<style type="text/css">
	.form_addplayer{
		width: 100%;
		display: flex;
		flex-direction: column;
		align-items: center;
		justify-content: center;
		padding: 5px;
	}
	.form-add{
		background: #23232f;
		display: flex;
		flex-direction: column;
		align-content: center;
		justify-content: center;
		padding: 5px;
	}
	label,input,select{
		background: #23232f!important;	
		padding: 5px;
	}

	/* Убрать фон автозаполнения 2 способа*/
	input:-webkit-autofill {
	    -webkit-box-shadow: inset 0 0 0 50px #23232f !important; /* Цвет фона */
	    -webkit-text-fill-color: #fff !important; /* цвет текста */
	    color: #fff !important; /* цвет текста */
	}

	@-webkit-keyframes autofill {
		to {
		color: inherit;
		background: transparent;
		}
	}

	input:-webkit-autofill {
		-webkit-animation-name: autofill;
		-webkit-animation-fill-mode: both;
	} 
	/**/


</style>