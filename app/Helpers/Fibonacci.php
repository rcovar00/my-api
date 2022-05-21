<?php

namespace App\Helpers;

class Fibonacci
{
    public static function getNumber(int $n): int {
        if ($n == 0)
            return 0;

        if ($n == 1)
            return 1;
        else
            return self::getNumber($n - 1) + self::getNumber($n - 2);
    }
}
