<?php
namespace Core;
class GrandChild1_1 extends Child1
{
    public int $one1_1 = 5;
    public function getOne1_1 (): int{
        return $this->one1_1;
    }
    public function setOne1_1 (int $one1_1){
        $this->one1_1 = $one1_1;
    }
    public function push_int (){
        var_dump(array_push($this->one1, $this->one1_1));
    }
    public function sum (){
        var_dump($this->two + $this->one1_1);
    }
}