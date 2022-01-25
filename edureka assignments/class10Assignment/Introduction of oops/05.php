<?php
class example{
    public $date1;
    public $date2;

    public function __construct($x, $y){
            $this->date1 = $x;
            $this->date2 = $y;
    }
    public function dishplay(){
$interval = $this->date1->diff($this->date2);
echo "difference : " . $interval->y . " years, " . $interval->m." months, ".$interval->d." days ";
      }
}
$date1 = new DateTime("1981-11-03");
$date2 = new DateTime("2013-09-04");
$obj = new example($date1,$date2);
$obj->dishplay();
?>