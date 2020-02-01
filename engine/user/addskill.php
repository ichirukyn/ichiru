<?php 
session_start();
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
?>