<?php
$items = rex_var::toArray('REX_VALUE[id=2]'); //wandle modulinput in ein array um
$out = ''; //$out als leeren string initiieren
foreach ($items as $item) { //durchlaufe alle eingaben aus dem modulinput
    $out .= '<li><a target="_blank" href="'.$item['url'].'" class="icon brands '.$item['icon'].'"><span class="label">'.$item['name'].'</span></a></li>';
    
}
?>
<nav>
    <ul>
        <?php
            echo $out; //Lis ausgeben
        ?>
    </ul>
</nav>

