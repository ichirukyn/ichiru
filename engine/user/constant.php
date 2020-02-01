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

if (!empty($user_stats['scorestats'])) {
	
}

//useravatar
/*
if (!empty($_SESSION['avatar'])) {
	$avatar = $avatarrow;
}
*/
//exp
$user_exp_query = mysqli_query($bd_connect, "SELECT * FROM `exp`");
$user_exp = mysqli_fetch_array($user_exp_query);

$currentExp = $user_exp['user_exp'];
 
for ($i=1; $i < 100; $i *= 3) { 
	if(($i*50 > $currentExp) && ($i < ($i+1)*$currentExp))
		{ 
			$currentLevel = $i/3; break;
		} 

}
?>