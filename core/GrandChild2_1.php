<?php
class GrandChild2_1 extends Child2
{
    public int $one2_1 = 15;
    public function getOne2_1 (): int{
        return $this->one2_1;
    }
    public function setOne2_1 (int $one2_1){
        $this->one2_1 = $one2_1;
    }
    public function push_int2 (){
        var_dump(array_push($this->one2, $this->one2_1));
    }
    public function multi (){
        var_dump($this->two * $this->one2_1);
    }
}