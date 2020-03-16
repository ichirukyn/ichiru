<?php
session_start();
include "D:/os/OSPanel/domains/ichiru/engine/user/constant.php";
$point = $_GET["point"];

if ($user_stats['stats_point'] == 0) {
	$q = mysqli_query($bd_connect,"UPDATE `stats` SET `stats_point`= NULL");
}
if (!empty($user_stats['stats_point'])) {
	$addpoint = $user_stats["$point"];
	$minpoint = $user_stats['stats_point'];
	$addpoint += 1;
	$minpoint -= 1;
	$q_add = mysqli_query($bd_connect,"UPDATE `stats` SET `$point`= $addpoint, `stats_point` = $minpoint WHERE `user_id` = $id");
}
else{
	echo "error";	
}


var_dump($minpoint);


?>
<script type="text/javascript">
window.location = "http://ichiru"
</script>
 ;