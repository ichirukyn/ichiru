<?php 
session_start();
include "D:/os/OSPanel/domains/ichiru/bd_connect.php";

$quest_title = $_POST["quest_title"];
$quest_desc = $_POST["quest_desc"];
$quest_progress = $_POST["quest_progress"];
$quest_rang = $_POST["quest_rang"];
$quest_lvl = $_POST["quest_lvl"];


if (!empty($_POST["quest_title"])) {
	$q = mysqli_query($bd_connect,"INSERT INTO `quest`(`quest_title`, `quest_desc`, `quest_lvl`, `quest_progress`, `quest_rang`) VALUES ('$quest_title','$quest_desc','$quest_lvl','$quest_progress','$quest_rang')");
}

var_dump($_GET);
?>