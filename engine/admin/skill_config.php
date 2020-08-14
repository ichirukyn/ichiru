<?php 
session_start();
include "D:/os/OSPanel/domains/ichiru/bd_connect.php";

$skill_title = $_POST["skill_title"];
$skill_desc = $_POST["skill_desc"];
$skill_point = $_POST["skill_point"];


$skill_name = array(
	'str' => 0,
	'speed' => 0,
	'dexterity' => 0,
	'stamina' => 0,
	'durability' => 0,
	'reflexes' => 0,
	'accuracy' => 0,
	'intelligence' => 0,
	'wisdom' => 0,
	'intuition' => 0,
	'memory' => 0,
	'charisma' => 0,
	'mind' => 0,
	'lucky' => 0,
);

foreach ($skill_point as $key => $value) {
	$key = 1;
	$skill_name[$value] = $key;
    //echo "\$skill_name[$value] => $key.\n<br>";
    //echo "$skill_name[$key] = 1;";

	
}
unset($value);

$str = $skill_name["str"];
$speed = $skill_name["speed"];
$dexterity = $skill_name["dexterity"];
$stamina = $skill_name["stamina"];
$durability = $skill_name["durability"];
$reflexes = $skill_name["reflexes"];
$accuracy = $skill_name["accuracy"];
$intelligence = $skill_name["intelligence"];
$wisdom = $skill_name["wisdom"];
$intuition = $skill_name["intuition"];
$memory = $skill_name["memory"];
$charisma = $skill_name["charisma"];
$mind = $skill_name["mind"];
$lucky = $skill_name["lucky"];


if (!empty($_POST["skill_title"])) {

	$q_add = mysqli_query($bd_connect,"INSERT INTO `skills` (`skill_title`, `skill_desc`, `str`, `speed`, `dexterity`, `stamina`, `durability`, `reflexes`, `accuracy`, `intelligence`, `wisdom`, `intuition`, `memory`, `charisma`, `mind`, `lucky`) VALUES ('$skill_title','$skill_desc','$str','$speed','$dexterity','$stamina','$durability','$reflexes','$accuracy','$intelligence','$wisdom','$intuition','$memory','$charisma','$mind','$lucky')");
	
}


/* 
$str' => 1,
'speed' => 1,
'dexterity' => 1,
'stamina' => 1,
'durability' => 1,
'reflexes' => 1,
'accuracy' => 1,
'intelligence' => 2,
'wisdom' => 2,
'intuition' => 1,
'memory' => 1,
'charisma' => 2,
'mind' => 3,
'lucky' => 1,
'hp' => 90,
'mp' => 120,
'st' => 90
*/
?>
<script type="text/javascript">
        window.location = "http://ichiru/engine/main/skill.php"
</script>