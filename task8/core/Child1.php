<?php
namespace Core;
class Child1 extends Ancestor
{
    public function getExponent(int $a, int $b): int
    {
    return pow($a, $b);
    }

    public array $one1 = [];
    public function getOne1 ($key){
     if (array_key_exists($key, $this->one1)){
        return $this->one1[$key];
        }else{
        return null;
        }
    }
    public function setOne1 ($key, $value): void{
     $this->one1[$key] = $value;
    }
    public function getArrSum (){
        return array_sum ($this->one1);
    }
}