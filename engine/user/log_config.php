<?php
session_start();
include "D:/os/OSPanel/domains/ichiru/bd_connect.php";
//INC_BD();

if(empty($_POST['login'])){
    $login = 1;
}
else{
    $login = $_POST['login'];
}

if(empty($_POST['password'])){
    $password = 1;
}
else{
    $password = $_POST['password'];
}

$query = mysqli_query($bd_connect, "SELECT * FROM `user` WHERE login='$login'");
$CheckUserLoginRow = mysqli_fetch_array($query);
$bd = $CheckUserLoginRow;

if(($password == $bd['password']) & ($login == $bd['login'])){
    $_SESSION['userlogin'] = $bd['login'];
    $_SESSION['userpass'] = $bd['password'];
    $_SESSION['userid'] = $bd['user_id'];
    $_SESSION['userclass'] = $bd['user_class'];
    ?>
    
    <script type="text/javascript">
        window.location = "http://ichiru"
    </script> -->
    <?php
}
else{
    echo "Error";
}
var_dump($_SESSION);
?>