<?php 
session_start();
include "D:/os/OSPanel/domains/ichiru/bd_connect.php";

$skill_id_check = $_GET['skill_id'];
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


do {
	$l = array_search(1,$q);
	unset($q[$l]);
	$i++;

} while ($i < 5);

$stats_new = array_diff_key($stats_array,$q);





$lucky = array_pop($stats_new);

$stats_1 = array_shift($stats_new);

if (isset($stats_new)) {
	$stats_2 = array_shift($stats_new);
}

if (isset($stats_new)) {
	$stats_2_1 = array_shift($stats_new);
}




function roll ($sides) {
    return mt_rand(1,$sides);
}
$d16 = roll(16);

$res = 16 - ($stats_1 + $lucky);

if ($res <= $d16) {
	echo "Удача1<br>";
	$_GET["stats_1"] = $stats_1;
}
$d161 = roll(16);
$res2 = 16 - ($stats_2 + $lucky);

if ($res2 <= $d161) {
	echo "Удача2<br>";
	$_GET["stats_2"] = $stats_2;
}
$d162 = roll(16);
$res2_1 = 16 - ($stats_1 + $lucky);

if ($res2_1 <= $d162) {
	echo "Удача3<br>";
	$_GET["stats_2_1"] = $stats_2_1;
}
$_GET["lucky"] = $lucky;
$_SESSION["get"] = $_GET;

//var_dump($_SESSION);
?>

    <script type="text/javascript">
        window.location = "http://ichiru/engine/user/check_skill.php"
    </script> -->
