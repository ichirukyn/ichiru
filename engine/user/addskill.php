<?php 
session_start();
/*session_start();
include "D:/os/OSPanel/domains/ichiru/engine/user/constant.php";
$skill_id = 1;
$query = mysqli_query($bd_connect,"INSERT INTO `user_skill`(`user_id`, `skill_id`) VALUES ($id,$skill_id)");
var_dump($query);
?>
    <!--
    <script type="text/javascript">
        window.location = "http://ichiru"
    </script> -->
    <?php
    */
include "D:/os/OSPanel/domains/ichiru/engine/user/constant.php";
$query = mysqli_query($bd_connect,"SELECT * FROM `skills` WHERE `skill_id` = 1");
$q = mysqli_fetch_assoc($query);
$i = 0;


unset($q['skill_id'],$q['skill_title'],$q['skill_desc'],$q['skill_avatar']);
$skill_lvl = $q['skill_lvl'];
unset($q['skill_lvl']);

//var_dump(count($q));


do {

	$i++;
	

} while ($l = array_search(1,$q));


print_r($l);

/*foreach ($variable as $key => $value) {
 	# code...
 } ($skill_point as $key => $value) {
	$key = 1;
	$skill_name[$value] = $key;
    //echo "\$skill_name[$value] => $key.\n<br>";
    //echo "$skill_name[$key] = 1;";

	
}
*/
?>