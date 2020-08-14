<?php 
session_start();
include "D:/os/OSPanel/domains/ichiru/bd_connect.php";
$id = $_SESSION['userid'];
$name = $_GET["friend_name"];

$q = mysqli_query($bd_connect, "SELECT * FROM `user` WHERE `name`= '$name'");
$q1 = mysqli_fetch_assoc($q);
$user_invited = $q1["user_id"];

if (!empty($q1["user_id"])) {

	$checked = mysqli_query($bd_connect, "SELECT * FROM `users_status` WHERE `user_inviter`= '$id'");
	$checked1 = mysqli_fetch_assoc($checked);

	$user_inviter_bd = $checked1["user_inviter"];
	$user_invited_bd = $checked1["user_invited"];

	if (empty($checked1)) {
		$checked_invited_bd = mysqli_query($bd_connect, "SELECT * FROM `users_status` WHERE `user_invited`= '$user_invited'");
		$checked_invited = mysqli_fetch_assoc($checked_invited_bd);

		$user_inviter_bd_2 = $checked_invited["user_inviter"];
		$user_invited_bd_2 = $checked_invited["user_invited"];

		if (empty($checked_invited)) {
			$accept = mysqli_query($bd_connect, "INSERT INTO `users_status` (`user_inviter`,`user_invited`,`stat_val_id`) VALUES ('$id', '$user_invited','1')");
		}
		else{
			if ($user_inviter_bd_2 == $id) {
				echo "Error";
			}
			else{
				$accept = mysqli_query($bd_connect, "INSERT INTO `users_status` (`user_inviter`,`user_invited`,`stat_val_id`) VALUES ('$id', '$user_invited','1')");
			}
		}
	}
	else{
		if ($user_invited_bd == $user_invited) {
			echo "Error";
		}
		else{
			$accept = mysqli_query($bd_connect, "INSERT INTO `users_status` (`user_inviter`,`user_invited`,`stat_val_id`) VALUES ('$id', '$user_invited','1')");
		}
	}

}
var_dump($checked_invited);








/*
	if (($user_inviter_bd == $id) && ($user_invited_bd == $user_invited)) {

		if (($user_inviter_bd == $user_invited) && ($user_invited_bd == $id)) {
			if (($user_inviter_bd == $id) && ($user_invited_bd == $id)) {
				$accept = mysqli_query($bd_connect, "INSERT INTO `users_status` (`user_inviter`,`user_invited`,`stat_val_id`) VALUES ('$id', '$user_invited','1')");
			}
			else{
				echo "Error3";
			}
		}
		else{
			echo "<br>Error";
		}
		
	}
	else{
		echo "Error";
	}

*/

/*
1 - пригласил
2 - принял
3 - отклонил
*/
?>
<!--
<script type="text/javascript">
window.location = "http://ichiru"
</script>
-->
<?php

?>