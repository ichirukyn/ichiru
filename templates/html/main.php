<?php
session_start();
//Module
include 'engine/main/modules/modules.php';
$id = $_SESSION['userid'];
//var_dump(stats($id,$bd_connect));


$user_stats = user_stats($id,$bd_connect);
$user_data = user_data($id,$bd_connect);
$avatar = avatar_check($user_data);




?>
<!DOCTYPE html>
<html lang="ru">
<head>
</head>
<body>
<link href="http://ichiru/templates/css/styles1.css" type="text/css" rel="stylesheet">


<div class="room room-wrap">
   <div class="room-menu">
      <div class="menu__room-info">
         <div class="menu__room-stats">
            <p>Страна: Королевство Квернерис</p>
            <p>Игроков: 2/8</p>
            <p>Гейммастер: Ichiru</p>
            <button>Выйти</button>
         </div>
      </div>
      <div class="menu__user-navigation">
         <li>Карта</li>
         <li>Статус</li>
         <li>Скиллы</li>
         <li>Инвентарь</li>
      </div>
   </div>
   <div class="room-block">
        <div class="block__stats-wrap">

            <div class="stats__player-date">
                <div class="player-stats">
                    <ul class="stats">
                        <li class="stats-link"><span>Имя:</span> <?php  echo $user_data['name']?></li> 
                        <li class="stats-link"><span>Раса:</span> <?php  echo $user_data['user_race']?></li>
                        <li class="stats-link"><span>Класс:</span> <?php  echo $user_data['user_class']?></li>
                    </ul>
                </div>
                <div class="player-lvl">
                    <li class="stats-link">Уровень: <?php  echo $user_data["lvl"] //"$lv1 ($exp/$exp_total)"?></li>
                </div>
            </div>
            <div class="stats-first">
                <div>
                    <ul class="stats">
                        <li class=""><span>HP:</span> <?php  echo $user_stats["hp"]?></li>
                        <li class=""><span>MP:</span> <?php  echo $user_stats["mp"]?></li>
                        <li class=""><span>ST:</span> <?php  echo $user_stats["st"]?></li>
                        <li class=""><span>KP:</span> <?php  echo $user_stats["st"]?></li>
                    </ul>
                </div>
                <div>
                    <ul class="stats">
                        <li class=""><span>Физ. защита:</span> <?php  echo $user_stats["hp"]?></li>
                        <li class=""><span>Маг. защита:</span> <?php  echo $user_stats["mp"]?></li>
                        <li class=""><span>Золото:</span> <?php  echo $user_stats["st"]?></li>
                    </ul>
                </div>
            </div>
            <div class="stats-list">
                <h4>Характеристики</h4>
                <ul class="stats">
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
   <div class="room-chat">
      <div class="chat-window">
         <li>Общий</li>
         <li>Флуд</li>
      </div>
      <div class="chat-block">
         <div class="chat__user-short">
            <div class="user-avatar">
               <img src="../../upload/img/IYrEEF.jpg">
               <div>
                  <span>ichiru</span><br>
                  <span>Гейммастер</span>
               </div>
            </div>
            <div class="user-text">
               <span>Проверка чата, нам нужно длинное сообщение, чтобы выявить все ошибки в верстке.</span>
            </div>
            <div class="line"></div>
         </div>
      </div>
      <div class="chat-input">
         <form>
            <textarea></textarea>
            <button>Отправить</button>
         </form>
      </div>
   </div>
</div>






<!--





<div class="stats-wrapp">
            <div class="stats-wrapp-list">
                <div class="stats-list">
                    <span>Статус:</span>
                    <ul class="stats_ul">
                        <li class="stats-link">Имя: <?php  echo $user_data['name']?></li> 
                        <li class="stats-link">Возраст: <?php  echo $user_data['age']?></li>
                        <li class="stats-link">Пол: <?php  echo $user_data['user_genre']?></li>
                        <li class="stats-link">Уровень: <?php  echo $user_data["lvl"] //"$lv1 ($exp/$exp_total)"?></li>
                        <li class="stats-link">Раса: <?php  echo $user_data['user_race']?></li>
                        <li class="stats-link">Характер: <?php  echo $user_data['character']?></li>
                        <li class="stats-link">Мировозрение: <?php  echo $user_data['worldview']?></li>
                        !--<li class="stats-link">Жизненная цель: <?php  echo $user_data['life_goal']?><li>--
                        <li class="stats-link">Хобби: <?php  echo $user_data['hobby']?></li>
                        !--<li class="stats-link">Языки: <?php  echo $user_data['language']?></li>--
                        <li class="stats-link">Отношения с другими расами: <?php  echo $user_data['relations']?></li>
                        <li class="stats-link">Предыстория: <?php  echo $user_data['prehistory']?></li>
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




















<header class="header">

    <div class="header-wrapper">

        <div class="header-menu-wrapper">

            <div class="head-menu">
                <div class="avatar-wrapp">
                    <div class="avatar"> 
                        <img src="<?php  echo $avatar;?>"/>
                        <div class="nick-name"><h2><?php  echo $user_data['name']?></h2></div>
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

            
            <!-- skills-->
<!--
            <div class="tabs_container">
                <input class="hide" type="radio" name="tabs" id="tab2"/>
                <label for="tab2">Навыки</label>
                <div class="tab_content" id="tab_content_2">
                    <div class="skill-wrapp">
                        <?php
                        /* */
                        /*

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
                                        <span>Проверка на <a href='http://ichiru/engine/user/check_stat.php?skill_id={$q_skill_array['skill_id']}'>Характеристики</a>
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
            <!-- Spells-->

            <div class="tabs_container">
                <input class="hide" type="radio" name="tabs" id="tab122"/>
                <label for="tab122">Заклинания</label>
                <div class="tab_content" id="tab_content_122">
                    <div class="skill-wrapp">
                        <?php         
                        do{
                            $spell_bd_main = mysqli_query($bd_connect, "SELECT * FROM `spells_stats` WHERE  spells_id = '{$spell_bd_check['spell_id']}' ORDER BY `spells_id` ASC");
                            $q_spell_array = mysqli_fetch_assoc($spell_bd_main);
                            //var_dump($q_spell_array);
                            if (!isset($q_spell_array)) {
                                
                            }
                            else{ 
                            echo "
                            <div class='skill-list'>
                                <div class='skill-name' style='background: url({$q_spell_array['spells_avatar']});background-size: cover;'>
                                    <span>{$q_spell_array['spells_title']}</span>
                                </div>
                                    <div class='skill-list-desc'>
                                    <div class='skill-desc'>
                                        <span>{$q_spell_array['spells_desc']}<br>Цена:{$q_spell_array['spells_mp']}</span>
                                        <span>Проверка на <a href='http://ichiru/engine/main/spells/spells_config.php?spell_lvl={$q_spell_array['spells_lvl']}'>Характеристики</a>
                                    </div>
                                </div>
                            </div>";
                        }
                            //print_r($skill_bd_main);
                        }
                        while ($spell_bd_check = mysqli_fetch_array($spell_bd));
                        ?>
                        </div>
                    <a href='http://ichiru/engine/main/spells/add_spells.php' class='HeaderUserNickname'>Add Spell</a>
                    <a href='http://ichiru/engine/main/spells/add_spells_config.php' class='HeaderUserNickname'>Add Skill To Player</a>
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


*/?>
-->
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


<style type="text/css">
    /*Stats*/
    span{
        padding: 2px;
        font-weight: bold;
    }
    .stats > li{
        padding: 5px;
    }
    .stats__player-date{
        display: flex;
        flex-direction: row;
        align-items: flex-start;
        justify-content: space-between;
    }
    .stats-first{
        display: flex;
        flex-direction: row;
        align-items: center;
        justify-content: space-between;
    }

    /**/
   *{
      font-size: 15px;
      margin: 0;
      padding: 0;
      outline: none;
      border: none;
      list-style: none;
      text-decoration: none;
      color: #fff;
      box-sizing: border-box;
      font-family: Roboto,sans-serif;
      transition: .2s ease;
   }
   body{
      height: 100%;
      width: 100%;
      display: flex;
      align-items: center;
      justify-content: flex-start;
      flex-direction: column;
      background: #100f15;
   }
   button{
      background: #23232f;
      padding: 5px;
      margin: 3px 0;
   }
   textarea{
   height: 14%;
    width: 99%;
    margin: 2px;
    background: #16161e;
   }
   /*Room*/
   .room{
      width: 100%;
      height: 99%;
      display: flex;
      flex-direction: row;
      align-items: flex-start;
      justify-content: center;
      padding: 5px;
   }
   .room-menu{
      width: 25%;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      padding: 5px;
      margin: 5px;
      background: #23232f;
   }
   .menu__room-stats{
      display: flex;
      flex-direction: column;
      /* align-items: flex-start; */
      justify-content: center;
      padding: 5;
   }
   .menu__room-info{
      width: 100%;
      background: #16161e;
      display: flex;
      flex-direction: row;
      align-items: center;
      justify-content: center;
      padding: 5px;
      margin: 5px;
   }
   
   .room-block{
      width: 50%;
      background: #23232f;
      height: 100%;
      margin: 5px;
      padding: 5px;
   }
   .room-chat{
      width: 25%;
      background: #23232f;
      height: 80%;
      margin: 5px;
      padding: 5px;
   }
   .chat-window{
      background: #16161e;
      display: flex;
      flex-direction: row;
      align-items: center;
      justify-content: space-around;
   }
   .chat-window > li{
    background: #23232f;
    padding: 0 10px;
    margin: 3px;
   }
   .chat-block{
    background: #16161e;
    width: 100%;
    height: 75%;
    margin: 5 0;
    padding: 5px;
   }
   .line{
      background: #fff;
   }


   .user-avatar{
    width: 50px;
    height: 50px;
    /* margin: 0 5px; */
    display: flex;
    align-items: center;
   }
   .user-avatar > img{
      width: 100%;
      height: 100%;
      object-fit: cover;
      border-radius: 50%;
      padding: 5px;
   }

   /*MainMenu*/

   .menu{
      width: 100%;
      display: flex;
      flex-direction: row;
      align-items: flex-start;
      justify-content: center;
      padding: 5px;
   }
   .menu-room-room{
      width: 100%;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      padding: 5px;
   }
   .menu-room-user{
      width: 40%;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      padding: 5px;
   }  
   .menu__user-info{
      width: 100%;
      background: #16161e;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      padding: 5px;
      margin: 5px;
   }
   .menu__user-navigation{
      width: 100%;
      background: #16161e;
      padding: 5px;
      margin: 5px;
   }
   .menu__user-navigation > li{
      background: #23232f;
      padding: 5px;
      margin: 5px;
   }
   .menu__user-profile{
      display: flex;
      flex-direction: row;
      align-items: center;
      justify-content: center;
   }
   .menu__user-update{
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
   }
   .menu__user-avatar{
      width: 100px;
      height: 100px;
      margin: 0 10px;
   }
   .menu__user-avatar > img{
      width: 100%;
      height: 100%;
      object-fit: cover;
      border-radius: 50%;
      padding: 5px;
   }
   .menu__room-title{
      display: flex;
      flex-direction: row;
      align-items: center;
      justify-content: center;
      width: 100%;
      margin: 5px;
      padding: 5px;
      background: #16161e;
   }
   .menu__room-list{
      width: 100%;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      margin: 5px;
      padding: 5px;
      background: #16161e;
   }
   .menu_room-short{
      width: 100%;
      background: #23232f;
      display: flex;
      flex-direction: row;
      align-items: center;
      justify-content: flex-start;
      padding: 5px;
   }
   .menu_room-short > li{
      margin-right: 10%;
      padding: 10px;

   }
</style>