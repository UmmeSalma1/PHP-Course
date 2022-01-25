<?php
class example{

    public function dishplay($numbers){
        sort($numbers);
        print_r($numbers);
    }
}
$numbers = array(11, -2, 4, 35, 0, 8, 9);
$obj = new example();
$obj->dishplay($numbers);
?>