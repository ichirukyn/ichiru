<?php
session_start();
include "D:/os/OSPanel/domains/ichiru/bd_connect.php";
include "D:/os/OSPanel/domains/ichiru/engine/main/race_list.php";

$id = $_SESSION['userid'];
$id = $_SESSION['userid'];
//$query_select_stats = mysqli_query($bd_connect,"SELECT * FROM `stats` WHERE user_id = $id");
//$query_select_user = mysqli_query($bd_connect,"SELECT * FROM `user` WHERE user_id = $id");
//$select_user = mysqli_fetch_array($query_select_user);

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
$age = $_POST["age"];
$user_class = $_POST["class"];
$user_race = $_POST["race"];
$user_genre = $_POST["genre"];
$user_face = $_POST["face"];
$user_character = $_POST["character"];
$user_worldview = $_POST["worldview"];
$user_life_goal = $_POST["life_goal"];
$user_hobby = $_POST["hobby"];
$user_language = $_POST["language"];
$user_relations = $_POST["relations"];
$user_prehistory = $_POST["prehistory"];
$_SESSION['user_class'] = $_POST["class"];;
$_SESSION['user_name'] = $_POST['name'];


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
        $AvatarName = $UploadDir._.basename($_FILES['avatar']['name']);
        $Mov = move_uploaded_file($_FILES['avatar']['tmp_name'], $AvatarName);
        $AvatarName = stripslashes(strip_tags(trim($AvatarName)));

        $UploadAvatarQuery = "UPDATE `user` SET `user_avatar` ='$AvatarName' WHERE user_id = '$id'";
        $UploadAvatarResult = mysqli_query($bd_connect, $UploadAvatarQuery);

        if ($UploadAvatarResult != null) {
        }
    }?>
    <!--<script type="text/javascript">
    window.location = "http://ichiru"
    </script>-->
    <?php

    

} else {
    echo 'Произошла ошибка при загрузке аватарки. Пожалуйста, попробуйте снова';
}

$input = "$AvatarName";
$toDelete = 16;
mb_internal_encoding("UTF-8");
$result_avatar = mb_substr( $input, $toDelete);

$query_avatar_add = mysqli_query($bd_connect, "UPDATE `user` SET `user_avatar` ='$result_avatar' WHERE user_id = '$id'");
var_dump($result_avatar);




$_SESSION['avatar'] = $result_avatar;



$query_update_stats = mysqli_query($bd_connect,"UPDATE `stats` SET `str`= $str,`speed`= $speed,`dexterity`= $dexterity,`stamina`= $stamina,`durability`=$durability,`reflexes`=$reflexes,`accuracy`=$accuracy,`intelligence`=$intelligence,`wisdom`=$wisdom,`intuition`=$intuition,`memory`=$memory,`charisma`=$charisma,`mind`=$mind,`lucky`=$lucky,`hp`=$hp,`mp`=$mp,`st`=$st WHERE user_id = $id");

$query_update_user = mysqli_query($bd_connect,"UPDATE `user` SET `name`= '$name',`age`='$age',`user_race`='$race2',`user_genre`='$user_genre', `character`='$user_character',`worldview`='$user_worldview',`life_goal`='$user_life_goal',`hobby`='$user_hobby',`language`='$user_language',`relations`='$user_relations',`prehistory`='$user_prehistory' WHERE user_id = '$id'");
//var_dump($_POST);

?>

<script type="text/javascript">
window.location = "http://ichiru"
</script>
-->
<?php


?>