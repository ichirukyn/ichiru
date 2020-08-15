<?php
session_start();
include "D:/os/OSPanel/domains/ichiru/bd.php";
include "D:/os/OSPanel/domains/ichiru/engine/main/mehnick/race_list.php";

$id = $_SESSION['userid'];


$race1 = $_POST["race"];
$race["$race1"];

$race2 = $race["$race1"]['race'];
$str = $race["$race1"]['str'];
$speed = $race["$race1"]['speed'];
$dexterity = $race["$race1"]['dexterity'];
$stamina = $race["$race1"]['stamina'];
$durability = $race["$race1"]['durability'];
$reflexes = $race["$race1"]['reflexes'];
$accuracy = $race["$race1"]['accuracy'];
$intelligence = $race["$race1"]['intelligence'];
$wisdom = $race["$race1"]['wisdom'];
$intuition = $race["$race1"]['intuition'];
$memory = $race["$race1"]['memory'];
$charisma = $race["$race1"]['charisma'];
$mind = $race["$race1"]['mind'];
$lucky = $race["$race1"]['lucky'];
$hp = $race["$race1"]['hp'];
$mp = $race["$race1"]['mp'];
$st = $race["$race1"]['st'];

$name = $_POST["name"];
$user_class = $_POST["class"];
$user_race = $_POST["race"];
$_SESSION['user_class'] = $_POST["class"];;
$_SESSION['user_name'] = $_POST['name'];

$skill_id_gob = $_POST['skill'];

if(!empty($_POST)) {

    if(empty($_FILES['avatar']['size'])){
        die('Вы не выбрали файл');
    }

    if($_FILES['avatar']['size'] > (10 * 1024 * 1024)) {
        die('Размер файла не должен превышать 5Мб');
    }

    $ImageInfo = getimagesize($_FILES['avatar']['tmp_name']);
    $Arr = array('image/jpeg','image/gif','image/png');
    if(!in_array($ImageInfo['mime'],$Arr)) {
        echo ('Картинка должна быть формата JPG, GIF или PNG');
    }
    if (!empty($Arr)) {

        $UploadDir = '../../../ichiru/uploads/avatars/';
        $AvatarName = $UploadDir.$id.'_'.'avatar';  //basename($_FILES['avatar']['name']);
        $Mov = move_uploaded_file($_FILES['avatar']['tmp_name'], $AvatarName);
        $AvatarName = stripslashes(strip_tags(trim($AvatarName)));

        $UploadAvatarQuery = "UPDATE `user` SET `user_avatar` ='$AvatarName' WHERE user_id = '$id'";
        $UploadAvatarResult = mysqli_query($bd_connect, $UploadAvatarQuery);

    } else {
        echo 'Произошла ошибка при загрузке аватарки. Пожалуйста, попробуйте снова';
    }

    $input = "$AvatarName";
    $toDelete = 16;
    mb_internal_encoding("UTF-8");
    $result_avatar = mb_substr( $input, $toDelete);

    $query_avatar_add = mysqli_query($bd_connect, "UPDATE `user` SET `user_avatar` ='$result_avatar' WHERE user_id = '$id'");
    $_SESSION['avatar'] = $result_avatar;



    $query_update_stats = mysqli_query($bd_connect,"UPDATE `stats` SET `str`= $str,`speed`= $speed,`dexterity`= $dexterity,`stamina`= $stamina,`durability`=$durability,`reflexes`=$reflexes,`accuracy`=$accuracy,`intelligence`=$intelligence,`wisdom`=$wisdom,`intuition`=$intuition,`memory`=$memory,`charisma`=$charisma,`mind`=$mind,`lucky`=$lucky,`hp`=$hp,`mp`=$mp,`st`=$st WHERE user_id = $id");

    $query_update_user = mysqli_query($bd_connect,"UPDATE `user` SET `name`= '$name',`user_race`='$race2' WHERE user_id = '$id'");
    }
    ?>
<!--
<script type="text/javascript">
window.location = "http://ichiru"
</script>
-->