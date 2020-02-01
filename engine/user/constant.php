<?php
session_start();
//include "D:/os/OSPanel/domains/ichiru/engine/constants.php";
//INC_BD();
include "D:/os/OSPanel/domains/ichiru/bd_connect.php";
include "D:/os/OSPanel/domains/ichiru/engine/user/exp_config.php";
include "D:/os/OSPanel/domains/ichiru/engine/user/stats_config.php";
//stats
$user_stats_query = mysqli_query($bd_connect, "SELECT * FROM `stats`");
$user_stats = mysqli_fetch_array($user_stats_query);
$user_stats_main_query = mysqli_query($bd_connect, "SELECT * FROM `user`");
$user_stats_main = mysqli_fetch_array($user_stats_main_query);

if (!empty($user_stats['scorestats'])) {
	
}

//useravatar
/*
if (!empty($_SESSION['avatar'])) {
	$avatar = $avatarrow;
}
*/
//exp
$user_exp_query = mysqli_query($bd_connect, "SELECT * FROM `exp`");
$user_exp = mysqli_fetch_array($user_exp_query);

$currentExp = $user_exp['user_exp'];
 
for ($i=1; $i < 100; $i *= 3) { 
	if(($i*50 > $currentExp) && ($i < ($i+1)*$currentExp))
		{ 
			$currentLevel = $i/3; break;
		} 

}

class Model
{
    static protected $_exp;
    static protected $_data;
    
    function __construct($user)
    {
        self::$_exp = $user->exp;
        self::$_data = array_reverse(array(
            1 => 0,
            2 => 50,
            3 => 200,
            4 => 500
        ), true);
    }
    
    function GetLevel()
    {
        foreach(self::$_data AS $level => $max_exp)
        {
            if($max_exp <= self::$_exp)
            {
                return sprintf('%s уровень', $level);
            }
        }
    }
    
    function GetMaxLevel()
    {
        return max(array_keys(self::$_data));
    }
    
    function GetExp()
    {
        foreach(self::$_data AS $level => $max_exp)
        {
            if($this->GetMaxLevel() == $this->GetLevel())
            {
                return self::$_exp;
            }
            elseif($this->GetLevel() == $level)
            {
                return self::$_exp - $max_exp;
            }
        }
    }
    
    function GetMaxExp()
    {
        foreach(self::$_data AS $level => $max_exp)
        {
            if($this->GetLevel() + 1 == $level OR $this->GetMaxLevel() == $this->GetLevel())
            {
                return $max_exp;
            }
        }
    }
    
    function GetPercent()
    {
        return ($this->GetExp() * 100 / $this->GetMaxExp());
    }
} 



?>