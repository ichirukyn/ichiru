<?php
session_start();



//Page Stats

function user_stats($id,$bd_connect){
	
	$user_stats_query = mysqli_query($bd_connect, "SELECT * FROM `stats` WHERE `user_id` = '$id'");
	$user_stats = mysqli_fetch_assoc($user_stats_query);
	
	return($user_stats);
}

function user_data($id,$bd_connect){
	
	$user_data_query = mysqli_query($bd_connect, "SELECT * FROM `user` WHERE `user_id` = '$id'");
	$user_data = mysqli_fetch_assoc($user_data_query);	
	
	return($user_data);
}

//Page 








function avatar_check($user_data){
	
	if (empty($_SESSION["avatar"])) {
		$avatar_bd = $user_data['user_avatar'];
		$_SESSION["avatar"] = $avatar_bd;
		$avatar = $_SESSION['avatar'];
	}
	else{
		$avatar = 'uploads/avatars/356-3566579_nico-nii-anonymous-nico-kiznaiver.png';
	}
	
	return $avatar;	
}



//

//useravatar


/*
if (!empty($_SESSION['avatar'])) {
	$avatar = $avatarrow;
}
*/




/*exp
$user_exp_query = mysqli_query($bd_connect, "SELECT * FROM `exp` WHERE `user_id` = '$id'");
$user_exp = mysqli_fetch_array($user_exp_query);

$exp = $user_exp['user_exp'];
$lvl_u = $exp = $user_exp['user_exp'];

$q = mysqli_query($bd_connect,"SELECT MAX(t.lvl) FROM (SELECT lvl FROM levels WHERE exp_total - $exp <= 0) t");


//$q_2 = mysqli_query($bd_connect,"SELECT `levels`.`exp_to_lvl` FROM levels JOIN exp ON exp.user_lvl = levels.lvl WHERE exp.user_id = '$id'");
//$q_2_array = mysqli_fetch_array($q_2);
//$exp_to_lvl = $q_2_array["exp_to_lvl"];


$lv11 = mysqli_fetch_array($q);
$lv1 = $lv11["MAX(t.lvl)"];
$uplvl = mysqli_query($bd_connect,"UPDATE `exp` SET `user_lvl`= $lv1 WHERE `user_id` = '$id'");
//$expbar = round(($exp/$exp_to_lvl) * 100);
$level = $lv1 + 1;
$q_3 = mysqli_query($bd_connect,"SELECT * FROM `levels` WHERE lvl = '$level'");
$q_3_array = mysqli_fetch_array($q_3);
$exp_total = $q_3_array["exp_total"];

*/
//skill
$skill_bd = mysqli_query($bd_connect, "SELECT * FROM user_skill WHERE user_id = '$id' ORDER BY `skill_id` ASC");


//var_dump($skill_bd_check);

/*$i = 21;
while ($i <= 50) {
	$l = (intdiv($i, 5));
	if($i % 5 == 0) {
 		$exp = $l*25;
	}
	else{
		$exp = ($l+1)*25;
	}
	$total_exp += $exp;

	echo "<br>$i $exp $total_exp</br>";
	//$skill_lvl_table = mysqli_query($bd_connect,"INSERT INTO `skill_lvl` (`lvl`, `exp_to_lvl`, `total_exp`) VALUES ( $i, $exp, $total_exp)");
	$i++;
}*/

//var_dump($l);
//Бросание кубика
/*function roll ($sides) {
    return mt_rand(1,$sides);
}

echo roll(6);
*/

//Quest

$user_quest_main_query = mysqli_query($bd_connect, "SELECT * FROM `quest` ORDER BY `quest_id` ASC");
//$user_quest_main = mysqli_fetch_array($user_quest_main_query);
$quest_row = mysqli_num_rows($user_quest_main_query);

//var_dump($user_quest_main);
//WHERE `quest_lvl` = '$user_lvl'





//die roll
function roll ($sides) {
    return mt_rand(1,$sides);
}
 
//echo roll(6);   // roll a six-sided die
//echo roll(10);  // roll a ten-sided die
//$d24 = roll(24);  // roll a twenty-sided die





//Friend

$friend_bd_check = mysqli_query($bd_connect, "SELECT * FROM `user` WHERE `user_id` IN (SELECT IF (`user_invited` = '$id', `user_inviter`, `user_invited`) FROM `users_status` WHERE `stat_val_id` = '2' ORDER BY `id`) ORDER BY `user_id` DESC");
$friend_check = mysqli_fetch_assoc($friend_bd_check); 
$friend_check_row = mysqli_num_rows($friend_bd_check);


$friend_bd_check1 = mysqli_query($bd_connect, "SELECT * FROM `user` WHERE `user_id` IN (SELECT IF (`user_invited`, `user_inviter` = '$id', `user_invited`) FROM `users_status` WHERE `stat_val_id` = '1') ORDER BY `user_id`");
$friend_check1 = mysqli_fetch_assoc($friend_bd_check1);
$friend_check_row1 = mysqli_num_rows($friend_bd_check1);


$friend_bd_check2 = mysqli_query($bd_connect, "SELECT * FROM `user` WHERE `user_id` IN (SELECT IF (`user_invited` = '$id', `user_inviter`, `user_invited`) FROM `users_status` WHERE `stat_val_id` = '1') ORDER BY `user_id` DESC");
$friend_check2 = mysqli_fetch_assoc($friend_bd_check2);
$friend_check_row2 = mysqli_num_rows($friend_bd_check2);



//Spells
$spell_bd = mysqli_query($bd_connect, "SELECT * FROM user_spells WHERE user_id = '$id' ORDER BY `spell_id` ASC");

//var_dump($friend_check);
/*$i_1 = 15;
$i_2 = 16;
$i_3 = 17;
$i_4 = 18;
$i_5 = 19;
$i_6 = 20;
$i_7 = 21;
$i_8 = 22;
$i_9 = 23;
$i_10 = 24;

for ($i = 10; $i <= 100; $i = $i + 10) { 
	$q_1 = mysqli_query($bd_connect,"INSERT INTO `spells` (`skill_lvl`,`beginner`, `student`, `adept`, `specialist`, `professional`, `master`, `great`, `epic`, `legendary`, `divine`) VALUES ('$i','$i_1','$i_2','$i_3','$i_4','$i_5','$i_6','$i_7','$i_8','$i_9','$i_10')");
	$i_1--;
	$i_2--;
	$i_3--;
	$i_4--;
	$i_5--;
	$i_6--;
	$i_7--;
	$i_8--;
	$i_9--;
	$i_10--;
}
*/


?>