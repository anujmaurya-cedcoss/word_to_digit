<?php
$arr = [];
$arr['zero'] = 0;
$arr['one'] = 1;
$arr['two'] = 2;
$arr['three'] = 3;
$arr['four'] = 4;
$arr['five'] = 5;
$arr['six'] = 6;
$arr['seven'] = 7;
$arr['eight'] = 8;
$arr['nine'] = 9;

$string = explode(';', $_POST['input']);

foreach ($string as $value) {
    echo $arr[$value];
}
