<?php 
session_start();
include "D:/os/OSPanel/domains/ichiru/bd_connect.php";
$login = $_SESSION['userlogin'];
if(empty($_POST['submit'])) {

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

        $UploadDir = 'D:/os/OSPanel/domains/ichiru/uploads/avatar/';
        $AvatarName = $UploadDir.$login._.basename($_FILES['avatar']['name']);
        $Mov = move_uploaded_file($_FILES['avatar']['tmp_name'], $AvatarName);
        $AvatarName = stripslashes(strip_tags(trim($AvatarName)));

        $UploadAvatarQuery = "UPDATE `user` SET `user_avatar` ='$AvatarName' WHERE login = '$login'";
        $UploadAvatarResult = mysqli_query($bd_connect, $UploadAvatarQuery);
        if ($UploadAvatarResult != null) {
        }
    }?>
    <!--<script type="text/javascript">
    window.location = "http://ichiru"
    </script>-->
    <?php
    $_SESSION['avatar'] = $AvatarName;

} else {
    echo 'Произошла ошибка при загрузке аватарки. Пожалуйста, попробуйте снова';
}
var_dump($UploadAvatarResult);

?>