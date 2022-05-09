<?php
define('pi', 3.14);
interface shape
{
    function calc_area($r, $h);
}

class triangle implements shape
{
    function calc_area($r, $h)
    {
        return (1 / 2) * $r * $h;
    }
}

class square implements shape
{
    function calc_area($s, $h)
    {
        return $s * $s;
    }
}

class rectangle implements shape
{
    function calc_area($w, $h)
    {
        return $w * $h;
    }
}

class circle implements shape
{
    function calc_area($r, $h)
    {
        return pi * $r * $r;
    }
}

$op = $_GET['op'];

switch ($op) {
    case 1:
        $b = $_GET['b'];
        $h = $_GET['h'];
        $t = new triangle();
        echo "Area : " . $t->calc_area($b, $h);
        break;

    case 2:
        $s = $_GET['s'];
        $ob = new square();
        echo "Area : " . $ob->calc_area($s, $s);
        break;

    case 3:
        $w = $_GET['w'];
        $h = $_GET['h'];
        $ob = new rectangle();
        echo "Area : " . $ob->calc_area($w, $h);
        break;

    case 4:
        $r = $_GET['r'];
        $ob = new circle();
        echo "Area : " . $ob->calc_area($r, $r);
        break;
}
