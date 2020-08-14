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

//Page Spells

function user_spells(){
	$spell_bd = mysqli_query($bd_connect, "SELECT * FROM user_spells WHERE user_id = '$id' ORDER BY `spell_id` ASC");
	return $spell_bd;

}


function user_skills(){
	
	$skill_bd = mysqli_query($bd_connect, "SELECT * FROM user_skill WHERE user_id = '$id' ORDER BY `skill_id` ASC");
	return $skill_bd;
}


function avatar_check($user_data){
	$avatar = $_SESSION['avatar'];
	$avatar_bd = $user_data['user_avatar'];

	if (!isset($avatar_bd)) {
		if (empty($avatar_bd)) {
			$_SESSION["avatar"] = $avatar_bd;
			$avatar = $_SESSION['avatar'];
		}
		else{
			$avatar = 'uploads/avatars/356-3566579_nico-nii-anonymous-nico-kiznaiver.png';
		}
	}
	
	
	return $avatar;	
}




function roll ($sides) {
    return mt_rand(1,$sides);
}


//Quest

$user_quest_main_query = mysqli_query($bd_connect, "SELECT * FROM `quest` ORDER BY `quest_id` ASC");
$quest_row = mysqli_num_rows($user_quest_main_query);

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