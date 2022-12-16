<?php
namespace Core;
final class Child3 extends Ancestor
{
    public function getExponent(int $a, int $b): int
    {
        return pow($a, $b);
    }

    public array $one3 = [];
    public function getOne3 ($key){
        if (array_key_exists($key, $this->one3)){
            return $this->one3[$key];
        }else{
            return null;
        }
    }
    public function setOne3 ($key, $value): void{
        $this->one3[$key] = $value;
    }
    public function getArrSum2 (){
        return array_sum($this->one3);
    }
}