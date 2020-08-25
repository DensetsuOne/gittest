<?php class Xlobal {
    private $int1;
    private $int2;

    public function __construct($int1,$int2){
        $this->int1 = $int1;
        $this->int2 = $int2;
    }
    public function getGlobal1(){
        return $this->int1;
    }
    public function getGlobal2(){
        return $this->int2;
    }
}