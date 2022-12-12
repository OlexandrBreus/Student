<?php
class Child2 extends Ancestor
{
    public function getExponent(int $a, int $b): int
    {
        return pow($a, $b);
    }

    public array $one2 = [];
    public function getOne2 ($key){
        if (array_key_exists($key, $this->one2)){
            return $this->one2[$key];
        }else{
            return null;
        }
    }
    public function setOne2 ($key, $value): void{
        $this->one2[$key] = $value;
    }
    public function getArrSum1 (){
        return array_sum($this->one2);
    }
}