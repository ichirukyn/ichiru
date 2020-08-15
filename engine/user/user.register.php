<?php
session_start();

$login = checkRowRegister($_POST['login']);
$password = checkRowRegister($_POST['password']);
$password1 = checkRowRegister($_POST['password1']);
$mail = checkRowRegister($_POST['mail']);



if($password == $password1){
    $password2 = $password1;
}
else{
    $password2 = 1;
    echo "Error password";
}

if (($login == 1) or ($password == 1) or ($password1 == 1) or ($mail == 1) or ($password2 == 1)){
    exit("Ошибка в данных");
}
if (($password2 != 1)) {
    /*
    $checkid2 = mysqli_query($bd_connect, "SELECT * FROM `user` WHERE login='$login'");
    $checkuserid2 = mysqli_fetch_array($checkid2);
    if ($login != $checkuserid2['login']) {
    $q = mysqli_query($bd_connect,"INSERT INTO `user`(`login`, `password`, `mail`) VALUES ('$login','$password2','$mail')");
    $_SESSION['userlogin'] = $login;
    $_SESSION['userpass'] = $password;
    
    //exp
    $checkid = mysqli_query($bd_connect, "SELECT * FROM `user` WHERE login='$login'");
    $checkuserid = mysqli_fetch_array($checkid);
    $userid = $checkuserid['user_id'];
    $_SESSION['userid'] = $checkuserid['user_id'];
    $_SESSION['user_name'] = $checkuserid['name'];

    $q_exp = mysqli_query($bd_connect, "INSERT INTO `exp` (`user_id`) VALUES ($userid)");
    
    //stats
    $q_stats = mysqli_query($bd_connect, "INSERT INTO `stats` (`user_id`) VALUES ($userid)");

    }
    else{
        echo "Error Login";
    }
    */
    //$API->api_result($response_error['e'], $response, $http_response_code);

}
else{
    echo "Error";
}


?>