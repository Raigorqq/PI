<?php
$phones = array(
    "apple"=>array("iPhone5","iPhone5s","iPhone6"),
    "samsumg"=>array("Samsung Galaxy III", "Samsung Galaxy ACE II"),
    "nokia" => array("Nokia N9", "Nokia Lumia 930"),
    "sony" => array("Sony XPeria Z3", "Xperia Z3 Dual", "Xperia T2 Ultra")
);

foreach($phones as $key => $model) {
    echo "<fieldset> $key:";
    if(is_array($model)){
        foreach($model as $m => $value){
            echo "<ul><li>$value </li></ul>";
        }
    }
    echo "</fieldset>";
}
?>