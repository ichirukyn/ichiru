<?php
session_start();
include "D:/os/OSPanel/domains/ichiru/engine/constants.php";
INC_BD();

if(!empty($_POST['login'])){
    $login = $_POST['login'];
}
else{
    $login = 1;
}
if(!empty($_POST['password'])){
    $password = $_POST['password'];
}
else{
    $password = 1;
}
if(!empty($_POST['password1'])){
    $password1 = $_POST['password1'];
}
else{
    $password1 = 1;
}
if(!empty($_POST['mail'])){
    $mail = $_POST['mail'];
}
else{
    $mail = 1;
}
if($password == $password1){
    $password2 = $password1;
}
else{
    $password2 = 1;
    echo "Error password";
}

/*if (($login == 1) or ($password == 1) or ($password1 == 1) or ($mail == 1) or ($password2 == 1)){
    exit("Ошибка в данных");
}*/
if (($password2 != 1)) {
    $query = "INSERT INTO `user` (`login`, `password`, `mail`) VALUES ('$login','$password2','$mail')";
    $q = mysqli_query($bd_connect, $query);
    $_SESSION['userlogin'] = $login;
    $_SESSION['userpass'] = $password;
    

    //exp
    $checkid = mysqli_query($bd_connect, "SELECT * FROM `user` WHERE login='$login'");
    $checkuserid = mysqli_fetch_array($checkid);
    $userid = $checkuserid['user_id'];
    $_SESSION['userid'] = $checkuserid['user_id'];
    $user_exp = 0;

    $q_exp = mysqli_query($bd_connect, "INSERT INTO `exp` (`user_id`, `user_exp`) VALUES ($userid, $user_exp)");
    
    //stats
    $q_stats = mysqli_query($bd_connect, "INSERT INTO `stats` (`user_id`) VALUES ($userid)");

    var_dump($q);
    ?>


    <script type="text/javascript">
    window.location = "http://ichiru"
    </script>
    -->
    <?php
}
else{
    echo "Error";
}
$checkuser = "SELECT * FROM `user`";
$checkq = mysqli_query($bd_connect, $checkuser);

?>