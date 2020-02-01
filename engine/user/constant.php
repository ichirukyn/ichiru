<?php
session_start();
//include "D:/os/OSPanel/domains/ichiru/engine/constants.php";
//INC_BD();
include "D:/os/OSPanel/domains/ichiru/bd_connect.php";
include "D:/os/OSPanel/domains/ichiru/engine/user/exp_config.php";
include "D:/os/OSPanel/domains/ichiru/engine/user/stats_config.php";



//stats
$user_stats_query = mysqli_query($bd_connect, "SELECT * FROM `stats`");
$user_stats = mysqli_fetch_array($user_stats_query);
$user_stats_main_query = mysqli_query($bd_connect, "SELECT * FROM `user`");
$user_stats_main = mysqli_fetch_array($user_stats_main_query);
$id = $_SESSION['userid'];

if (!empty($user_stats['scorestats'])) {
	
}



//useravatar
/*
if (!empty($_SESSION['avatar'])) {
	$avatar = $avatarrow;
}
*/




//exp
$user_exp_query = mysqli_query($bd_connect, "SELECT * FROM `exp` WHERE `user_id` = $id");
$user_exp = mysqli_fetch_array($user_exp_query);

$exp = $user_exp['user_exp'];
$lvl_u = $exp = $user_exp['user_exp'];

$q = mysqli_query($bd_connect,"SELECT MAX(t.lvl) FROM (SELECT lvl FROM levels WHERE exp_total - $exp <= 0) t");
$q_2 = mysqli_query($bd_connect,"SELECT `levels`.`exp_to_lvl` FROM levels JOIN exp ON exp.user_lvl = levels.lvl WHERE exp.user_id = $id");


$lv11 = mysqli_fetch_array($q);
$lv1 = $lv11["MAX(t.lvl)"];
$q_2_array = mysqli_fetch_array($q_2);
$exp_to_lvl = $q_2_array["exp_to_lvl"];
$uplvl = mysqli_query($bd_connect,"UPDATE `exp` SET `user_lvl`= $lv1 WHERE `user_id` = $id");
$expbar = round(($exp/$exp_to_lvl) * 100);

//"SELECT * FROM skills JOIN user_skills ON skills.skill_id = user_skills.user_id WHERE user_skills.user_id = 2"

//skill

$skill_bd = mysqli_query($bd_connect, "SELECT * FROM user_skill WHERE user_id = $id");
$skill_bd_check = mysqli_fetch_array($skill_bd);
$skiil_id_main = $skill_bd_check["skill_id"];
$skiil_bd_main = mysqli_query($bd_connect, "SELECT * FROM skills WHERE  skill_id = $skiil_id_main");
$q_skill_array = mysqli_fetch_array($skiil_bd_main);





//Бросание кубика
/*function roll ($sides) {
    return mt_rand(1,$sides);
}
 
echo roll(6);
*/

?>