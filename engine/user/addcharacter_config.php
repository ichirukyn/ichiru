<?php
session_start();
include "D:/os/OSPanel/domains/ichiru/bd_connect.php";
include "D:/os/OSPanel/domains/ichiru/engine/main/race_list.php";

$id = $_SESSION['userid'];
//$query_select_stats = mysqli_query($bd_connect,"SELECT * FROM `stats` WHERE user_id = $id");
//$query_select_user = mysqli_query($bd_connect,"SELECT * FROM `user` WHERE user_id = $id");
//$select_user = mysqli_fetch_array($query_select_user);



$query_update_stats = mysqli_query($bd_connect,"UPDATE  FROM `stats` WHERE user_id = $id");






var_dump($race)
//var_dump($select_user);
?>