<?php
namespace Core;
class GrandChild1_2 extends Child1
{
    public int $one1_2 = 10;
    public function getOne1_2 (): int{
        return $this->one1_2;
    }
    public function setOne1_2 (int $one1_2){
        $this->one1_2 = $one1_2;
    }
    public function push_int1 (){
        var_dump(array_push($this->one1, $this->one1_2));
    }
    public function sum1 (){
        var_dump($this->two + $this->one1_2);
    }
}