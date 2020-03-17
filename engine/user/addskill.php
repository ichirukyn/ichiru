<?php 
session_start();


include "D:/os/OSPanel/domains/ichiru/engine/user/constant.php";
$skill_id_check = $_GET['skill_id'];


$query = mysqli_query($bd_connect,"SELECT * FROM `skills` WHERE `skill_id` = $skill_id_check");
$q = mysqli_fetch_assoc($query);
$i = 1;

$query_user_skill = mysqli_query($bd_connect,"SELECT `skill_exp` FROM `user_skill` WHERE `skill_id` = $skill_id_check");
$query_user_skill_lvl = mysqli_fetch_assoc($query_user_skill);
$query_user = mysqli_query($bd_connect,"SELECT * FROM `stats` WHERE `user_id` = $id");
$query_stats = mysqli_fetch_assoc($query_user);
$stats_array = $query_stats;
$stats_point = $query_user_skill_lvl['skill_exp'];
unset($stats_array['user_id'],$stats_array['hp'],$stats_array['mp'],$stats_array['st'],$stats_array['stats_point']);
unset($q['skill_id'],$q['skill_title'],$q['skill_desc'],$q['skill_avatar']);
$skill_lvl = $q['skill_lvl'];
unset($q['skill_lvl']);

do {
	$l = array_search(1,$q);
	unset($q[$l]);
	$i++;
} while ($i < 5);


$stats_new = array_diff_key($stats_array,$q);


$lucky = array_pop($stats_new);

$stats_1 = array_shift($stats_new);

if (isset($stats_2)) {
	$stats_2 = array_shift($stats_new);
}

if (isset($stats_new)) {
	$stats_2_1 = array_shift($stats_new);
}

//Формулы!!

$d24 = roll(24);
extract($stats_new);

$stats_point_1 = $stats_point/10;

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


if ($res >= $d24) {
	echo "Не удача";
	echo "$res < $d24";
}
else{
	echo "Удача";
	echo "$res > $d24";
}

$skill_crit = array(1,2,3,4,5,6,7);

//$_GET[] = $roll_skill = array('roll_skill' => $res); 

if (9 >= $stats_point) {
	$array_3 = $skill_crit;
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

$stats_new1 = array_diff_key($d24,$array_3);

var_dump($stats_new1);

?>
    <!--
    <script type="text/javascript">
        window.location = "http://ichiru"
    </script> -->