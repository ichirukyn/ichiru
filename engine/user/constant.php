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


$exp = $user_exp['user_exp'];
$lvl_u = $exp = $user_exp['user_exp'];
$id = $_SESSION['user_id'];


$query = "SELECT MAX(t.lvl) FROM (SELECT lvl FROM levels WHERE exp_total - $exp <= 0) t";
$q_2 = mysqli_query($bd_connect,"SELECT `levels`.`exp_to_lvl` FROM `levels` JOIN `users` ON users.lvl = levels.lvl users.id = $id");
$q_3 = mysqli_query($bd_connect,"SELECT $exp - exp_total FROM levels WHERE lvl = $lvl_u");


$q = mysqli_query($bd_connect,$query);
$lv11 = mysqli_fetch_array($q);
$lv1 = $lv11["MAX(t.lvl)"];


$expbar = round(($exp_at_lvl/$exp_to_lvl) * 100);
/*
$lvl = 1;
$a = 1.4;
$totalexp = 0;

/*echo '<table border="1"><tr><td>Уровень</td><td>Всего опыта</td><td>Опыта до<br />следующего уровня</td></tr>';
while ($lvl < 100) {
    $y = round(pow(($lvl * 10), $a));
    echo '<tr><td>'.$lvl.'</td><td>'.$totalexp.'</td><td>'.$y.'</td></tr>';
    $totalexp += $y;
    $lvl++;
}*/
?>