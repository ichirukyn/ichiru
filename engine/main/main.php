<?php
session_start();
include "D:/os/OSPanel/domains/ichiru/engine/user/constant.php";
//"INNER JOIN 'table1' ..."
$avatar = $_SESSION['avatar'];
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <base href="http://ichiru">
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
                            <img src="uploads/logo/logo.jpg" />
                        </form>
                        <?php
                        }
                        else{
                            ?>
                            <img src='<?php echo $avatar?>' />
                            <?php
                        }

                        ?>
                        <div class="nick-name"><h2><?php  echo $_SESSION['userlogin']?></h2></div>
                    </div>
                    <div class="hp-mp-st-bar">
                        <div class="hp-bar">hp 10/10</div>
                        <div class="mp-bar">mp 10/10</div>
                        <div class="st-bar">st 10/10</div>
                        <div><?php echo "$expbar%/100%";?></div>
                    </div>

                </div>
                <div class="map-wrapp">
                    <div class="map"><img src="{theme}/images/img/map.jpg"></div>
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
                                <ul>
                                    <li class="class">Класс: <?php  echo $user_stats_main['user_class']?></li> 
                                    <li class="inclass">Подкласс: <?php  echo $user_stats_main['user_subclass']?></li>
                                    <li class="race">Раса: <?php  echo $user_stats_main['user_race']?></li>
                                    <li class="lvl">Уровень: <?php  echo "$lv1 ($exp/$exp_total)"?></li>
                                </ul>
                                <span>Характеристики:</span>
                                <ul>
                                    <li class="specifications">Сила: <?php  $user_stats['str']?></li>
                                    <li class="specifications">Скорость: <?php  echo $user_stats_main['user_class']?></li>
                                    <li class="specifications">Ловкость: <?php  echo $user_stats['dexterity']?></li>
                                    <li class="specifications">Выносливость: <?php  echo $user_stats['stamina']?></li>
                                    <li class="specifications">Стойкость: <?php  echo $user_stats_main['user_class']?></li>
                                    <li class="specifications">Рефлексы: <?php  echo $user_stats_main['user_class']?></li>
                                    <li class="specifications">Меткость: <?php  echo $user_stats_main['user_class']?></li>
                                    <li class="specifications">Интеллект: <?php  echo $user_stats['intelligence']?></li>
                                    <li class="specifications">Мудрость: <?php  echo $user_stats['wisdom']?></li>
                                    <li class="specifications">Интуиция: <?php  echo $user_stats_main['user_class']?></li>
                                    <li class="specifications">Память: <?php  echo $user_stats_main['user_class']?></li>
                                    <li class="specifications">Харизма: <?php  echo $user_stats['charisma']?></li>
                                    <li class="specifications">Дух: <?php  echo $user_stats['will']?></li>
                                    <li class="specifications">Удача: <?php  echo $user_stats['lucky']?></li>
                                </ul>
                            </div>
                        </div>
                        <div class="general-stats">
                            <ul>
                                <li class="stats-link">Здоровье:</li>
                                <li class="stats-link">Усталость:</li>
                                <li class="stats-link">Физ. Атака:</li>
                                <li class="stats-link">Маг. Атака:</li>
                                <li class="stats-link">Шанс Крита:</li>
                                <li class="stats-link">Крит. урон:</li>
                                <li class="stats-link">Скорость Атаки:</li>
                                <li class="stats-link">Уклонение:</li>
                                <li class="stats-link">Точность:</li>
                                <li class="stats-link">Скорость:</li>
                                <li class="stats-link">Сопростивление физ. урону:</li>
                                <li class="stats-link">Сопростивление маг. урону:</li>
                                <li class="stats-link">Сопростивление к яду:</li>
                                <li class="stats-link">Сопростивление контролю:</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- skills-->

            <div class="tabs_container">
                <input class="hide" type="radio" name="tabs" id="tab2"/>
                <label for="tab2">Скиллы</label>
                <div class="tab_content" id="tab_content_2">
                    <div class="skill-wrapp">
                        <?php
                        $i = 9;
                        $w1 = $q_skill_array['1'];
                        $w2 = $q_skill_array['2'];
                        $w3 = $q_skill_array['3'];
                        $w4 = $q_skill_array['4'];
                        while ( $i <= 10) {
                            $i++;
                            echo "
                            <div class='skill-list'>
                                <div class='skill-name'>
                                    <span>$w1</span>
                                </div>
                                    <div class='skill-list-desc'>
                                    <div class='skill-desc'>
                                        <span>$w2 <br>$w3 $w4</span>
    
                                    </div>
                                </div>
                            </div>";
                            }//var_dump($skiil_bd_main["num_rows"]);

                        ?>
                        </div>
                    <a href='http://ichiru/engine/user/addskill.php' class='HeaderUserNickname'>Add Skill</a>
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
                                <div class="guild-name">
                                    <span>{name-skill}</span>
                                </div>
                                <div class="guild-name">
                                    <span>Название</span>
                                </div>
                                <div class="guild-name">
                                    <span>Название</span>
                                </div>
                                <div class="guild-name">
                                    <span>Название</span>
                                </div>
                            </div>
                            <div class="guild-list-desc">
                                <div class="guild-desc">
                                    <span>Очень длинное описание любого скилла из игры</span>
                                </div>
                                <div class="guild-desc">
                                    <span>Очень длинное описание любого скилла из игры</span>
                                </div>
                                <div class="guild-desc">
                                    <span>Очень длинное описание любого скилла из игры</span>
                                </div>
                                <div class="guild-desc">
                                    <span>Очень длинное описание любого скилла из игры</span>
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
                            <div class="friend-list">
                                <div class="friend-name">
                                    <span>{name-skill}</span>
                                </div>
                                <div class="friend-name">
                                    <span>Имя</span>
                                </div>
                                <div class="friend-name">
                                    <span>Название</span>
                                </div>
                                <div class="friend-name">
                                    <span>Название</span>
                                </div>
                            </div>
                            <div class="friend-list-desc">
                                <div class="friend-desc">
                                    <span>Очень длинное описание игрока</span>
                                </div>
                                <div class="friend-desc">
                                    <span>Очень длинное описание любого скилла из игры</span>
                                </div>
                                <div class="friend-desc">
                                    <span>Очень длинное описание любого скилла из игры</span>
                                </div>
                                <div class="friend-desc">
                                    <span>Очень длинное описание любого скилла из игры</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            <!-- Quest -->

            
                <div class="tabs_container">
                    <input class="hide" type="radio" name="tabs" id="tab7"/>
                    <label for="tab7">Квесты</label>
                    <div class="tab_content" id="tab_content_7">
                          
                    </div>
                </div>

                <!-- Map -->

                <div class="tabs_container">
                    <input class="hide" type="radio" name="tabs" id="tab8"/>
                    <label for="tab8">Карта</label>
                    <div class="tab_content" id="tab_content_8">
                          
                    </div>
                </div>

                <!-- Map -->

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
</html>