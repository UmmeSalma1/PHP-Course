<?php 
class example{
    public function dishplay($string){
        $result = explode("-","$string");
        $arr = array_values($result);
        $final_result = "$arr[2]"."-"."$arr[0]"."-"."$arr[1]";
        print_r($final_result);
    }
}
$obj = new example();
$string = '12-08-2004';
$obj->dishplay($string);
?>