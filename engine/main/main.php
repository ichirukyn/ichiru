<?php
session_start();
include "D:/os/OSPanel/domains/ichiru/engine/user/constant.php";
//"INNER JOIN 'table1' ..."
$avatar = $_SESSION['avatar'];
?>
<!DOCTYPE html>
<html lang="ru">
<head>
</head>
<body>
<link href="http://ichiru/templates/css/styles.css" type="text/css" rel="stylesheet">

<header class="header">

    <div class="header-wrapper">

        <div class="header-menu-wrapper">

            <div class="head-menu">
                <div class="avatar-wrapp">
                    <div class="avatar"> 
                        <?php 
                        if (empty($avatar)) {
                            ?>
                            <img src="<?php  echo $avatar; ?>"/>
                        <?php
                        }
                        else{
                            ?>
                            <img src='<?php echo $avatar?>' />
                            <?php
                        }

                        ?>
                        <div class="nick-name"><h2><?php  echo $user_stats_main['name']?></h2></div>
                    </div>
                    <div class="hp-mp-st-bar">
                        <div class="hp-bar">hp <?php  echo $user_stats["hp"]?></div>
                        <div class="mp-bar">mp <?php  echo $user_stats["mp"]?></div>
                        <div class="st-bar">st <?php  echo $user_stats["st"]?></div>
                    </div>

                </div>
                <div class="map-wrapp">
                    <div class="map"><img src="uploads/logo/map.jpg"></div>
                </div>
            </div>

        </div>

    </div>

</header>
<div class="content-wrapper">
    <div class="menu-wrapper">
            
            <!-- Stats -->

            <div class="tabs_container">
                <input class="hide" type="radio" name="tabs" id="tab1"/>
                <label for="tab1">Статус</label>
                <div class="tab_content" id="tab_content_1">
                    <div class="stats-wrapp">
                        <div class="stats-wrapp-list">
                            <div class="stats-list">
                                <span>Статус:</span>
                                <ul class="stats_ul">
                                    <li class="stats-link">Имя: <?php  echo $user_stats_main['name']?></li> 
                                    <li class="stats-link">Возраст: <?php  echo $user_stats_main['age']?></li>
                                    <li class="stats-link">Пол: <?php  echo $user_stats_main['user_genre']?></li>
                                    <li class="stats-link">Уровень: <?php  echo $user_stats_main["lvl"] //"$lv1 ($exp/$exp_total)"?></li>
                                    <li class="stats-link">Раса: <?php  echo $user_stats_main['user_race']?></li>
                                    <li class="stats-link">Характер: <?php  echo $user_stats_main['character']?></li>
                                    <li class="stats-link">Мировозрение: <?php  echo $user_stats_main['worldview']?></li>
                                    <!--<li class="stats-link">Жизненная цель: <?php  echo $user_stats_main['life_goal']?><li>-->
                                    <li class="stats-link">Хобби: <?php  echo $user_stats_main['hobby']?></li>
                                    <!--<li class="stats-link">Языки: <?php  echo $user_stats_main['language']?></li>-->
                                    <li class="stats-link">Отношения с другими расами: <?php  echo $user_stats_main['relations']?></li>
                                    <li class="stats-link">Предыстория: <?php  echo $user_stats_main['prehistory']?></li>
                                </ul>
                            </div>
                        </div>
                        <div class="general-stats">
                            <span>Характеристики:</span>
                            <ul class="stats_ul">
                                <li class="specifications">Сила: <?php  echo $user_stats["str"]?> 
                                    <a href='http://ichiru/engine/main/addpoint.php?point=str'>+</a>
                                </li>
                                <li class="specifications">Скорость: <?php  echo $user_stats['speed']?>
                                    <a href='http://ichiru/engine/main/addpoint.php?point=speed'>+</a>
                                </li>
                                <li class="specifications">Ловкость: <?php  echo $user_stats['dexterity']?>
                                    <a href='http://ichiru/engine/main/addpoint.php?point=dexterity'>+</a>
                                </li>
                                <li class="specifications">Выносливость: <?php  echo $user_stats['stamina']?>
                                    <a href='http://ichiru/engine/main/addpoint.php?point=stamina'>+</a>
                                </li>
                                <li class="specifications">Стойкость: <?php  echo $user_stats['durability']?>
                                    <a href='http://ichiru/engine/main/addpoint.php?point=durability'>+</a>
                                </li>
                                <li class="specifications">Рефлексы: <?php  echo $user_stats['reflexes']?>
                                    <a href='http://ichiru/engine/main/addpoint.php?point=reflexes'>+</a>
                                </li>
                                <li class="specifications">Меткость: <?php  echo $user_stats['accuracy']?>
                                    <a href='http://ichiru/engine/main/addpoint.php?point=accuracy'>+</a>
                                </li>
                                <li class="specifications">Интеллект: <?php  echo $user_stats['intelligence']?>
                                    <a href='http://ichiru/engine/main/addpoint.php?point=intelligence'>+</a>
                                </li>
                                <li class="specifications">Мудрость: <?php  echo $user_stats['wisdom']?>
                                    <a href='http://ichiru/engine/main/addpoint.php?point=wisdom'>+</a>
                                </li>
                                <li class="specifications">Интуиция: <?php  echo $user_stats['intuition']?>
                                    <a href='http://ichiru/engine/main/addpoint.php?point=intuition'>+</a>
                                </li>
                                <li class="specifications">Память: <?php  echo $user_stats['memory']?>
                                    <a href='http://ichiru/engine/main/addpoint.php?point=memory'>+</a>
                                </li>
                                <li class="specifications">Харизма: <?php  echo $user_stats['charisma']?>
                                    <a href='http://ichiru/engine/main/addpoint.php?point=charisma'>+</a>
                                </li>
                                <li class="specifications">Дух: <?php  echo $user_stats['mind']?>
                                    <a href='http://ichiru/engine/main/addpoint.php?point=mind'>+</a>
                                </li>
                                <li class="specifications">Удача: <?php  echo $user_stats['lucky']?>
                                    <a href='http://ichiru/engine/main/addpoint.php?point=lucky'>+</a>
                                </li>
                                <li class="specifications">Свободные очки характеристик: <?php  echo $user_stats['stats_point']?></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- skills-->

            <div class="tabs_container">
                <input class="hide" type="radio" name="tabs" id="tab2"/>
                <label for="tab2">Навыки</label>
                <div class="tab_content" id="tab_content_2">
                    <div class="skill-wrapp">
                        <?php
                        /* */
                        

                        do{
                            $skill_bd_main = mysqli_query($bd_connect, "SELECT * FROM skills WHERE  skill_id = '{$skill_bd_check['skill_id']}' ORDER BY `skills`.`skill_id` ASC");
                            $q_skill_array = mysqli_fetch_array($skill_bd_main);
                            if (!isset($q_skill_array)) {
                                
                            }
                            else{ 
                            echo "
                            <div class='skill-list'>
                                <div class='skill-name' style='background: url({$q_skill_array['skill_avatar']});background-size: cover;'>
                                    <span>{$q_skill_array['skill_title']}</span>
                                </div>
                                    <div class='skill-list-desc'>
                                    <div class='skill-desc'>
                                        <span>{$q_skill_array['skill_desc']}<br>Уровень:{$skill_bd_check['skill_lvl']}</span>
                                        <span>Проверка на <a href='http://ichiru/engine/user/check_skill.php?skill_id={$q_skill_array['skill_id']}'>Характеристики</a>
                                    </div>
                                </div>
                            </div>";
                        }
                            //print_r($skill_bd_main);
                        }
                        while ($skill_bd_check = mysqli_fetch_array($skill_bd));
                        ?>
                        </div>
                    <a href='http://ichiru/engine/main/skill.php' class='HeaderUserNickname'>Add Skill</a>
                    <a href='http://ichiru/engine/user/addskill.php' class='HeaderUserNickname'>Add Skill To Player</a>
                    </div>
                </div>
            </div>

        <!-- Inventory -->
        
            
                <div class="tabs_container">
                    <input class="hide" type="radio" name="tabs" id="tab3"/>
                    <label for="tab3">Инвентарь</label>
                    <div class="tab_content" id="tab_content_3">
                          <div class="inventory-wrapp">
                            <span>Инвентарь</span>
                            <div class="inventory-list">
                                <div class="inventory-slot">
                                    <img src="">
                                    <span>title</span>
                                </div>
                                <div class="inventory-slot">
                                </div>
                                <div class="inventory-slot">
                                </div>
                                <div class="inventory-slot">
                                </div>
                                <div class="inventory-slot">
                                </div>
                                <div class="inventory-slot">
                                </div>
                                <div class="inventory-slot">
                                </div>
                                <div class="inventory-slot">
                                </div>
                                <div class="inventory-slot">
                                </div>
                                <div class="inventory-slot">
                                </div>
                                <div class="inventory-slot">
                                </div>
                                <div class="inventory-slot">
                                </div>
                                <div class="inventory-slot">
                                </div>
                                <div class="inventory-slot">
                                </div>
                                <div class="inventory-slot">
                                </div>
                                <div class="inventory-slot">
                                </div>
                                <div class="inventory-slot">
                                </div>
                                <div class="inventory-slot">
                                </div>
                                <div class="inventory-slot">
                                </div>
                                <div class="inventory-slot">
                                </div>
                                <div class="inventory-slot">
                                </div>
                                <div class="inventory-slot">
                                </div>
                                <div class="inventory-slot">
                                </div>
                                <div class="inventory-slot">
                                </div>
                                <div class="inventory-slot">
                                </div>
                                <div class="inventory-slot">
                                </div>
                                <div class="inventory-slot">
                                </div>
                                <div class="inventory-slot">
                                </div>
                                <div class="inventory-slot">
                                </div>
                                <div class="inventory-slot">
                                </div>
                                <div class="inventory-slot">
                                </div>
                                <div class="inventory-slot">
                                </div>
                                <div class="inventory-slot">
                                </div>
                                <div class="inventory-slot">
                                </div>
                                <div class="inventory-slot">
                                </div>
                                <div class="inventory-slot">
                                </div>
                                <div class="inventory-slot">
                                </div>
                                <div class="inventory-slot">
                                </div>
                                <div class="inventory-slot">
                                </div>
                                <div class="inventory-slot">
                                </div>
                                <div class="inventory-slot">
                                </div>
                                <div class="inventory-slot">
                                </div>
                                <div class="inventory-slot">
                                </div>
                                <div class="inventory-slot">
                                </div>
                                <div class="inventory-slot">
                                </div>
                                <div class="inventory-slot">
                                </div>
                                <div class="inventory-slot">
                                </div>
                                <div class="inventory-slot">
                                </div>
                                <div class="inventory-slot">
                                </div>
                                <div class="inventory-slot">
                                </div>
                                <div class="inventory-slot">
                                </div>
                                <div class="inventory-slot">
                                </div>
                                <div class="inventory-slot">
                                </div>
                                <div class="inventory-slot">
                                </div>
                                <div class="inventory-slot">
                                </div>
                                <div class="inventory-slot">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- equipment -->

                <div class="tabs_container">
                    <input class="hide" type="radio" name="tabs" id="tab4"/>
                    <label for="tab4">Экипировка</label>
                    <div class="tab_content" id="tab_content_4">
                          <div class="equipment-wrapp">
                            <div class="equipment-list">
                                <div class="equipment-list-main">
                                    <div class="equipment-link">
                                    </div>
                                    <div class="equipment-link">
                                    </div>
                                    <div class="equipment-link">
                                    </div>
                                    <div class="equipment-link">
                                    </div>
                                    <div class="equipment-link">
                                    </div>
                                    <div class="equipment-link">
                                    </div>
                                </div>
                                <div class="equipment-list-art">
                                </div>
                                <div class="equipment-list-side">
                                    <div class="equipment-link">
                                    </div>
                                    <div class="equipment-link">
                                    </div>
                                    <div class="equipment-link">
                                    </div>
                                    <div class="equipment-link">
                                    </div>
                                    <div class="equipment-link">
                                    </div>
                                    <div class="equipment-link">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Guild -->
            
                <div class="tabs_container">
                    <input class="hide" type="radio" name="tabs" id="tab5"/>
                    <label for="tab5">Гильдия</label>
                    <div class="tab_content" id="tab_content_5">
                        <div class="guild-wrapp">
                            <div class="guild-list">
                                <div class="guild-item">
                                    <div class="guild-name">
                                        <span>{name-skill}</span>
                                    </div>
                                    <div class="guild-desc">
                                        <span>Очень длинное описание любого скилла из игры</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Friend -->
                
                <div class="tabs_container">
                    <input class="hide" type="radio" name="tabs" id="tab6"/>
                    <label for="tab6">Друзья</label>
                    <div class="tab_content" id="tab_content_6">
                            <div class="friend-wrapp">
                                <div class="tabs_container">
                                    <input class="hide11" type="radio" name="tabs" id="tab12"/>
                                    <label for="tab12">Мои друзья</label>
                                    <div class="tab_content1" id="tab_content_12">
                                        <?php
                                        $i = 1;
                                        $friend_id = $friend_check["user_id"];
                                        $friend_name = $friend_check["name"];
                                        $friend_age = $friend_check["age"];
                                        $friend_genre = $friend_check["user_genre"];
                                        $friend_lvl = $friend_check["lvl"];
                                        $friend_race = $friend_check["user_race"];

                                        while ($i <= $friend_check_row) {
                                            $i++;
                                            echo "
                                            <ul class='friend'>
                                              <span>$friend_name</span>
                                                <li>
                                                  Возраст:$friend_age<br>Пол:$friend_genre<br>Уровень:$friend_lvl<br>Раса:$friend_race
                                                </li>
                                            </ul>
                                            <ul class='line'>
                                            </ul>";
                                        }
                                        ?>
                                    </div>
                                </div>
                                <div class="tabs_container">
                                    <input class="hide11" type="radio" name="tabs" id="tab13"/>
                                    <label for="tab13">Заявки в друзья</label>
                                    <div class="tab_content1" id="tab_content_13">
                                        <div class="tabs_container">
                                            <input class="hide11" type="radio" name="tabs" id="tab13"/>
                                            <label for="tab13">Входящие</label>
                                            <div class="tab_content1" id="tab_content_13">
                                                <?php
                                                $i = 1;
                                                $friend_id1 = $friend_check1["user_id"];
                                                $friend_name1 = $friend_check1["name"];
                                                $friend_age1 = $friend_check1["age"];
                                                $friend_genre1 = $friend_check1["user_genre"];
                                                $friend_lvl1 = $friend_check1["lvl"];
                                                $friend_race1 = $friend_check1["user_race"];

                                                while ($i <= $friend_check_row1) {
                                                    $i++;
                                                    echo "
                                                    <ul class='friend'>
                                                      <span>$friend_name1</span>
                                                        <li>
                                                          Возраст: $friend_age1<br>Пол: $friend_genre1<br>Уровень: $friend_lvl1<br>Раса: $friend_race1
                                                        </li>
                                                    </ul>
                                                    <ul class='line'>
                                                    </ul>";
                                                }
                                                ?>
                                            </div>
                                        </div>
                                        <div class="tabs_container">
                                            <input class="hide11" type="radio" name="tabs" id="tab13"/>
                                            <label for="tab13">Исходящие</label>
                                            <div class="tab_content1" id="tab_content_13">
                                                <?php
                                                $i = 1;
                                                $friend_id2 = $friend_check2["user_id"];
                                                $friend_name2 = $friend_check2["name"];
                                                $friend_age2 = $friend_check2["age"];
                                                $friend_genre2 = $friend_check2["user_genre"];
                                                $friend_lvl2 = $friend_check2["lvl"];
                                                $friend_race2 = $friend_check2["user_race"];

                                                while ($i <= $friend_check_row2) {
                                                    $i++;
                                                    echo "
                                                    <ul class='friend'>
                                                      <span>$friend_name2</span>
                                                        <li>
                                                          Возраст:$friend_age2<br>Пол:$friend_genre2<br>Уровень:$friend_lvl2<br>Раса:$friend_race2
                                                        </li>
                                                    </ul>
                                                    <ul class='line'>
                                                    </ul>";
                                                }
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <ul>
                                    <li>
                                        <div class="tabs_container">
                                            <input type="radio"name="tabs" id="tab11" class="hide1" name="friend">
                                            <label class="labal1" for="tab11">AddFriend</label>
                                            <div class="tab_content1" id="tab_content_11">
                                                <form class="form_quest" action="/engine/main/friend_config.php" method="get" name="form_addfriend" id="addfriend">
                                                    <input type="text" name="friend_name" class="input" placeholder="friend_name">
                                                    <input type="submit" placeholder="Поиск" class="submit">
                                                </form>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

            <!-- Quest -->

            
                <div class="tabs_container">
                    <input class="hide" type="radio" name="tabs" id="tab7"/>
                    <label for="tab7">Квесты</label>
                    <div class="tab_content" id="tab_content_7">
                          <div class="quest_wrap">
                            <?php
                            do {

                                 if (!isset($user_quest_main)) {
                                
                                }
                                else{

                                $quest_id = $user_quest_main["quest_id"];
                                $quest_title = $user_quest_main["quest_title"];
                                $quest_desc = $user_quest_main["quest_desc"];
                                $quest_lvl = $user_quest_main["quest_lvl"];
                                $quest_progress = $user_quest_main["quest_progress"];
                                $quest_rang = $user_quest_main["quest_rang"];

                                echo "
                                <ul class='quest_1'>
                                  <span>$quest_title</span>
                                    <li>
                                      Ранг:$quest_rang<br>Минимальный уровень:$quest_lvl<br>Описание:$quest_desc<br>Прогресс:$quest_progress
                                      <a href='http://ichiru/engine/main/addquest.php'>Приступить к выполнению</a>
                                    </li>
                                </ul>
                                <li></li>
                                ";
                                }
                            }
                            while ($user_quest_main = mysqli_fetch_array($user_quest_main_query));

                              ?>
                              <ul>
                                  <li>
                                      <a href='http://ichiru/engine/main/addquest.php'>Add quest</a>
                                  </li>
                              </ul>
                          </div>
                    </div>
                </div>

                <!-- Map -->

                <div class="tabs_container">
                    <input class="hide" type="radio" name="tabs" id="tab8"/>
                    <label for="tab8">Карта</label>
                    <div class="tab_content" id="tab_content_8">
                        <div class="map-wrapp1">
                            
                            <a href="http://ichiru/templates/location/first_location.php">First Location</a>
                        </div>
                          
                    </div>
                </div>

                <!-- Options -->

                <div class="tabs_container">
                    <input class="hide" type="radio" name="tabs" id="tab9"/>
                    <label for="tab9">Настройки</label>
                    <div class="tab_content" id="tab_content_9">
                        <div class="option_wrap">
                            <a href='http://ichiru/engine/user/exit.php' class='HeaderUserNickname'>Выход</a>
                        </div>
                    </div>
                </div>
    <?php
    ?>
<!--
{include file="startgame.php"}
{include file="createpers.php"}
{include file="mainmenu.php"}
-->


<!-- Stats -->


</div>


<script src="js/lib.js"></script>
<script>
    jQuery(function($){
        $.get("{THEME}/images/sprite.svg", function(data) {
            var div = document.createElement("div");
            div.innerHTML = new XMLSerializer().serializeToString(data.documentElement);
            document.body.insertBefore(div, document.body.childNodes[0]);
        });
    });

</script>
</body>
<footer>
    <dir>
        
    </dir>
</footer>
</html>