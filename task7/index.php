<?php
include 'task7/child1.php';
include 'task7/child2.php';
include 'task7/child3.php';
include 'task7/grandchild1_1.php';
include 'task7/grandchild1_2.php';
include 'task7/grandchild2_1.php';
include 'task7/grandchild2_2.php';
$a = new Child1();
$a->setOne1(0, 1);
$a->getOne1(0);
var_dump($a->getOne1(0)).'<br>';
var_dump($a->getArrSum()).'<br>';
$a->getExponent(7, 2);
$b = new Child2();
$b->setOne2(0, 2);
$b->getOne2(0);
var_dump($b->getArrSum1()).'<br>';
$c = new Child3();
$c->setOne3(0, 3);
$c->getOne3(0);
var_dump($c->getArrSum2()).'<br>';
$d = new GrandChild1_1();
$d->push_int();
$d->sum();
$e = new GrandChild1_2();
$e->push_int1();
$e->sum1();
$j = new GrandChild2_1();
$j->push_int2();
$j->multi();
$f = new GrandChild2_2();
$f->push_int3();
$f->multi1();

