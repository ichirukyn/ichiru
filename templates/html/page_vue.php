<?
function stats_vue($user_stats,$user_data){

echo"
<div class='stats__player-date'>
    <div class='player-stats'>
        <ul class='stats'>
            <li class='stats-link'><span>Имя:</span>{$user_data['name']}</li> 
            <li class='stats-link'><span>Раса:</span> {$user_data['user_race']}</li>
            <li class='stats-link'><span>Класс:</span> {$user_data['user_class']}</li>
        </ul>
    </div>
    <div class='player-lvl'>
        <li class='stats-link'>Уровень: {$user_data['lvl']}</li>
    </div>
</div>
<div class='stats-first'>
    <div>
        <ul class='stats'>
            <li class='><span>HP:</span> {$user_stats['hp']}</li>
            <li class='><span>MP:</span> {$user_stats['mp']}</li>
            <li class='><span>ST:</span> {$user_stats['st']}</li>
            <li class='><span>KP:</span> {$user_stats['st']}</li>
        </ul>
    </div>
    <div>
        <ul class='stats'>
            <li><span>Физ. защита:</span> {$user_stats['hp']}</li>
            <li><span>Маг. защита:</span> {$user_stats['mp']}</li>
            <li><span>Золото:</span> {$user_stats['st']}</li>
        </ul>
    </div>
</div>
<div class='stats-list'>
    <h4>Характеристики</h4>
    <ul class='stats'>
        <li class='specifications'>Сила: {$user_stats['str']} 
            <a href='http://ichiru/engine/main/addpoint.php?point=str'>+</a>
        </li>
        <li class='specifications'>Скорость: {$user_stats['speed']}
            <a href='http://ichiru/engine/main/addpoint.php?point=speed'>+</a>
        </li>
        <li class='specifications'>Ловкость: {$user_stats['dexterity']}
            <a href='http://ichiru/engine/main/addpoint.php?point=dexterity'>+</a>
        </li>
        <li class='specifications'>Выносливость: {$user_stats['stamina']}
            <a href='http://ichiru/engine/main/addpoint.php?point=stamina'>+</a>
        </li>
        <li class='specifications'>Стойкость: {$user_stats['durability']}
            <a href='http://ichiru/engine/main/addpoint.php?point=durability'>+</a>
        </li>
        <li class='specifications'>Рефлексы: {$user_stats['reflexes']}
            <a href='http://ichiru/engine/main/addpoint.php?point=reflexes'>+</a>
        </li>
        <li class='specifications'>Меткость: {$user_stats['accuracy']}
            <a href='http://ichiru/engine/main/addpoint.php?point=accuracy'>+</a>
        </li>
        <li class='specifications'>Интеллект: {$user_stats['intelligence']}
            <a href='http://ichiru/engine/main/addpoint.php?point=intelligence'>+</a>
        </li>
        <li class='specifications'>Мудрость: {$user_stats['wisdom']}
            <a href='http://ichiru/engine/main/addpoint.php?point=wisdom'>+</a>
        </li>
        <li class='specifications'>Интуиция: {$user_stats['intuition']}
            <a href='http://ichiru/engine/main/addpoint.php?point=intuition'>+</a>
        </li>
        <li class='specifications'>Память: {$user_stats['memory']}
            <a href='http://ichiru/engine/main/addpoint.php?point=memory'>+</a>
        </li>
        <li class='specifications'>Харизма: {$user_stats['charisma']}
            <a href='http://ichiru/engine/main/addpoint.php?point=charisma'>+</a>
        </li>
        <li class='specifications'>Дух: {$user_stats['mind']}
            <a href='http://ichiru/engine/main/addpoint.php?point=mind'>+</a>
        </li>
        <li class='specifications'>Удача: {$user_stats['lucky']}
            <a href='http://ichiru/engine/main/addpoint.php?point=lucky'>+</a>
        </li>
        <li class='specifications'>Свободные очки характеристик: {$user_stats['stats_point']}</li>
    </ul>                
</div>";
    return $vue;
}


function inventory_vue(){
    
}