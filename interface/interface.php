<?php

interface parent1
{
    public function calc($a, $b);
}

interface parent2
{
    public function sub($c, $d);
}

class childClass implements parent1, parent2
{
    public function calc($a, $b)
    {
        echo $a+$b;
    }

    public function sub($c, $d)
    {
        echo $c-$d;
    }
}

$obj = new childClass();
$obj->calc(2, 5);
echo"<br>";
$obj->sub(4, 2);
