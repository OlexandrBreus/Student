<?php
class GrandChild2_2 extends Child2
{
    public int $one2_2 = 20;
    public function getOne2_2 (): int{
        return $this->one2_2;
    }
    public function setOne2_2 (int $one2_2){
        $this->one2_2 = $one2_2;
    }
    public function push_int3 (){
        var_dump(array_push($this->one2, $this->one2_2));
    }
    public function multi1 (){
        var_dump($this->two * $this->one2_2);
    }
}