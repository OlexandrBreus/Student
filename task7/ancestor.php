<?php
abstract class Ancestor
{
    abstract public function getExponent (int $a, int $b);

 public array $one = [];
 public int $two = 7;

 public function getOne ($key){
     if (array_key_exists ($key, $this->one)){
         return $this->one[$key];
     }else{
         return null;
     }
 }
 public function setOne ($key, $value): void{
     $this->one[$key] = $value;
 }

 public function getTwo (): int{
     return $this->two;
 }
 public function setTwo ($two): void{
     $this->two = $two;
 }
}