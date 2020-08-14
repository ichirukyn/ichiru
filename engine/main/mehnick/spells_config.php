<?php 
session_start();
include "D:/os/OSPanel/domains/ichiru/bd_connect.php";
$id = $_SESSION['userid'];
$spells_lvls = $_GET['spell_lvl'];
$querySelectUserSkill = mysqli_query($bd_connect, "SELECT `skill_lvl` FROM user_skill WHERE user_id = '$id' AND skill_id = '27'");
$querySelectUserSkillArray = mysqli_fetch_assoc($querySelectUserSkill);
$skill_lvl = $querySelectUserSkillArray['skill_lvl'];

//$skill_lvl = '1';

for ($i=0; $skill_lvl >= $i ;$i = $i + 10) { 
	
	if ($skill_lvl >= $i) {
		if ($i <= 10) {
			$i = 10;
			$queryForBd = mysqli_query($bd_connect,"SELECT * FROM `spells` WHERE `skill_lvl` = $i");
			$spells_lvl = mysqli_fetch_assoc($queryForBd);
			$stats_3 = $i;
		}
		else{
			$queryForBd = mysqli_query($bd_connect,"SELECT * FROM `spells` WHERE `skill_lvl` = $i");
			$spells_lvl = mysqli_fetch_assoc($queryForBd);
			$stats_3 = $i;
		}
	}

}

$qSelectUsersStats = mysqli_query($bd_connect,"SELECT `mind`,`lucky` FROM `stats` WHERE `user_id` = '$id'");
$qUserStats = mysqli_fetch_assoc($qSelectUsersStats);
	
foreach ($spells_lvl as $k => $v) {
    if ($k === $spells_lvls) {
    	$spells_table = $v;
    }
}

$stats_1 = $qUserStats['mind'];
$stats_2 = $qUserStats['lucky'];

$stats_4 = $stats_3/10;
$stats_5 = $stats_1 + $stats_2 + $stats_4;
$stats_6 = 24 - $stats_5;
$stats_7 = $stats_6 + $spells_table;
$stats_8 = $stats_7/2;

$res = round($stats_8,0);

function roll ($sides) {
    return mt_rand(1,$sides);
}
$d24 = roll(24);

$_SESSION['spell_res'] = $res;
$_SESSION['d24_roll'] - $d24;
echo "$res<br>";
var_dump($d24);

