<?php 
session_start();
include "D:/os/OSPanel/domains/ichiru/bd_connect.php";
$id = $_SESSION['userid'];
$spells_title = $_POST['spells_title'];
$spells_desc = $_POST['spells_desc'];
$spells_mp = $_POST['spells_mp'];
$spells_lvl = $_POST['spells_lvl'];

$queryCheckAddSpells = mysqli_query($bd_connect,"SELECT * FROM `spells_stats` WHERE `spells_title` = '$spells_title'");
$qCheck = mysqli_fetch_assoc($queryCheckAddSpells);


$CheckSpellsTitle = $qCheck['spells_title'];

//var_dump($spells_lvl);

if ($spells_title === $CheckSpellsTitle) {

}
else{
$queryAddSpells = mysqli_query($bd_connect,"INSERT INTO `spells_stats` (`spells_title`, `spells_desc`, `spells_mp`,`spells_lvl`) 
	VALUES('$spells_title','$spells_desc','$spells_mp','$spells_lvl')"); 
}

/*
for ($i=2; $i < 11; $i++) { 

    $q_skill_check = mysqli_query($bd_connect,"SELECT * FROM `spells_stats` WHERE `spells_id` = '$i'");
    $q_skill_check_1 = mysqli_fetch_assoc($q_skill_check);
    $skill_id_user = $q_skill_check_1['user_id'];
    $spells_mp = $q_skill_check_1['spells_mp'];
    
    if($skill_id_user1 === $id) {
        echo("Error");
    }
    else{
        $q_skill_all = mysqli_query($bd_connect,"INSERT INTO `user_spells`(`user_id`, `spell_id`, `spell_mp`) 
        	VALUES ('$id','$i','$spells_mp')");
    }
}*/
?>
    <script type="text/javascript">
        window.location = "http://ichiru/engine/main/spells/add_spells.php"
    </script> -->
