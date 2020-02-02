<?php
session_start();
include "D:/os/OSPanel/domains/ichiru/bd_connect.php";
include "D:/os/OSPanel/domains/ichiru/engine/main/race_list.php";

$id = $_SESSION['userid'];
//$query_select_stats = mysqli_query($bd_connect,"SELECT * FROM `stats` WHERE user_id = $id");
//$query_select_user = mysqli_query($bd_connect,"SELECT * FROM `user` WHERE user_id = $id");
//$select_user = mysqli_fetch_array($query_select_user);




$query_update_stats = mysqli_query($bd_connect,"UPDATE `stats` SET `user_id`=[value-1],`str`=[value-2],`speed`=[value-3],`dexterity`=[value-4],`stamina`=[value-5],`durability`=[value-6],`reflexes`=[value-7],`accuracy`=[value-8],`intelligence`=[value-9],`wisdom`=[value-10],`intuition`=[value-11],`memory`=[value-12],`charisma`=[value-13],`mind`=[value-14],`lucky`=[value-15],`hp`=[value-16],`mp`=[value-17],`st`=[value-18] WHERE user_id = $id");






var_dump($diff)
//var_dump($select_user);
?>