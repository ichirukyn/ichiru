<?php
session_start();
include "D:/os/OSPanel/domains/ichiru/engine/constants.php";
INC_BD();
include "D:/os/OSPanel/domains/ichiru/php/user/exp_config.php";
include "D:/os/OSPanel/domains/ichiru/php/user/stats_config.php";
//stats
$user_stats_query = mysqli_query($bd_connect, "SELECT * FROM `stats`");
$user_stats = mysqli_fetch_array($user_stats_query);
$user_stats_main_query = mysqli_query($bd_connect, "SELECT * FROM `user`");
$user_stats_main = mysqli_fetch_array($user_stats_main_query);
$user_exp_query = mysqli_query($bd_connect, "SELECT * FROM `exp`");
$user_exp_ = mysqli_fetch_array($user_exp_query);
if (!empty($user_stats['scorestats'])) {
	?>
	<script type="text/javascript">
		
	</script>
	<?php
}

//useravatar
/*
if (!empty($_SESSION['avatar'])) {
	$avatar = $avatarrow;
}
*/
//exp



?>