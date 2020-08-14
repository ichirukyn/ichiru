<?php 
session_start();
include "D:/os/OSPanel/domains/ichiru/bd_connect.php";

$skill_id_check = $_SESSION['get']["skill_id"];
$id = $_SESSION['userid'];



$query = mysqli_query($bd_connect,"SELECT * FROM `skills` WHERE `skill_id` = $skill_id_check");
$q = mysqli_fetch_assoc($query);
$i = 1;


$query_user_skill = mysqli_query($bd_connect,"SELECT * FROM `user_skill` WHERE `skill_id` = $skill_id_check");
$query_user_skill_lvl = mysqli_fetch_assoc($query_user_skill);
$query_user = mysqli_query($bd_connect,"SELECT * FROM `stats` WHERE `user_id` = $id");
$query_stats = mysqli_fetch_assoc($query_user);

$stats_array = $query_stats;
$stats_point_lvl = $query_user_skill_lvl['skill_lvl'];
unset($stats_array['user_id'],$stats_array['hp'],$stats_array['mp'],$stats_array['st'],$stats_array['stats_point']);
unset($q['skill_id'],$q['skill_title'],$q['skill_desc'],$q['skill_avatar']);
$skill_lvl = $q['skill_lvl'];
unset($q['skill_lvl']);
$stats_point_exp = intval($query_user_skill_lvl['skill_exp']);






$lucky = $_SESSION['get']["lucky"];
$stats_1 = $_SESSION['get']["stats_1"];
$stats_2 = $_SESSION['get']["stats_2"];
$stats_2_1 = $_SESSION['get']["stats_2_1"];
/*
if (isset($stats_2)) {
	$stats_2 = $_SESSION['get']["stats_2"];
}

if (isset($stats_2_1)) {
	$stats_2_1 = $_SESSION['get']["stats_2_1"];
}
*/
//Формулы!!


function roll ($sides) {
    return mt_rand(1,$sides);
}
$d24 = roll(24);

$stats_point_1 = $stats_point_lvl/10;

if (isset($stats_2_1)) {
	$stats_3 = $stats_1 + $stats_2 + $stats_2_1;
}
elseif (isset($stats_2))
{
	$stats_3 = $stats_1 + $stats_2;
}
else{
	$stats_3 = $stats_1;
}
$stats_4 = $stats_3/2;
$stats_5 = $stats_4 + $stats_point_1;
$stats_6 = $stats_5 + $lucky;
$result = 24 - $stats_6;
$res = round($result, 0);

var_dump($d24);


$skill_crit = array(1,2,3,4,5,6,7);


if (9 >= $stats_point) {
	$array_3 = $skill_crit;
	$check = true;
	//var_dump($array_3);
}
elseif(19 >= $stats_point){
	$array_3 = array_pop($skill_crit);
}
elseif(29 >= $stats_point){
	$array_3 = array_pop($skill_crit);
}
elseif(39 >= $stats_point){
	$array_3 = array_pop($skill_crit);
	$array_3 = array_pop($skill_crit);
}
elseif(49 >= $stats_point){
	$array_3 = array_pop($skill_crit);
	$array_3 = array_pop($skill_crit);
}
elseif(59 >= $stats_point){
	$array_3 = array_pop($skill_crit);
	$array_3 = array_pop($skill_crit);
	$array_3 = array_pop($skill_crit);
}
elseif(69 >= $stats_point){
	$array_3 = array_pop($skill_crit);
	$array_3 = array_pop($skill_crit);
	$array_3 = array_pop($skill_crit);
	$array_3 = array_pop($skill_crit);
}
elseif(79 >= $stats_point){
	$array_3 = array_pop($skill_crit);
	$array_3 = array_pop($skill_crit);
	$array_3 = array_pop($skill_crit);
	$array_3 = array_pop($skill_crit);
}
elseif(89 >= $stats_point){
	$array_3 = array_pop($skill_crit);
	$array_3 = array_pop($skill_crit);
	$array_3 = array_pop($skill_crit);
	$array_3 = array_pop($skill_crit);
	$array_3 = array_pop($skill_crit);
}
elseif(99 >= $stats_point){
	$array_3 = array_pop($skill_crit);
	$array_3 = array_pop($skill_crit);
	$array_3 = array_pop($skill_crit);
	$array_3 = array_pop($skill_crit);
	$array_3 = array_pop($skill_crit);
}
elseif(100 >= $stats_point){
	$array_3 = array_pop($skill_crit);
	$array_3 = array_pop($skill_crit);
	$array_3 = array_pop($skill_crit);
	$array_3 = array_pop($skill_crit);
	$array_3 = array_pop($skill_crit);
	$array_3 = array_pop($skill_crit);
}




if ($res <= $d24) {
	/*echo "<br>Удача<br>";
	echo "$res <= $d24";*/
	$stats_point_exp = $stats_point_exp + 1;//UPDATE `stats` SET `str`= 4  WHERE 1
	$query_stats_1 = mysqli_query($bd_connect,"SELECT MAX(t.lvl) FROM (SELECT lvl FROM skill_lvl WHERE total_exp - $stats_point_exp <= 0) t");
	$skill_lvl_array = mysqli_fetch_assoc($query_stats_1);
	$lvl_up = $skill_lvl_array["MAX(t.lvl)"];
	if (empty($lvl_up)) {
		$lvl_up = 1;
	}
	$q_exp_up = mysqli_query($bd_connect,"UPDATE `user_skill` SET `skill_exp`= $stats_point_exp, `skill_lvl`= $lvl_up WHERE `skill_id` = $skill_id_check");
	echo "1";
	var_dump($q_exp_up);
	

}
else{
	/*echo "Не удача<br>";
	echo "$res > $d24";*/

	$newarray = array_flip($skill_crit);
	$array_3_1 = array_flip($array_3);
	$crit_min = array_intersect_key($newarray,$array_3_1);
	$ld24 = array("$d24" => 1);	

	if (array_intersect_key($crit_min,$ld24)) {
		if ($stats_point_exp >= 1) {
			$stats_point_exp_1 = $stats_point_exp - 1;
			$q_exp_up_1 = mysqli_query($bd_connect,"UPDATE `user_skill` SET `skill_exp`= $stats_point_exp_1 WHERE `skill_id` = $skill_id_check");
			echo "2";
			var_dump($stats_point_exp_1);
			var_dump($stats_point_exp);
		}
		else{
			
		}
		
	}

}

	

unset($_SESSION["get"])



?>

    <script type="text/javascript">
        window.location = "http://ichiru"
    </script> -->