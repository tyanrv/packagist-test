<?php

declare(strict_types=1);

namespace App;

class HelloWorld
{
    public static function getRandInt(): int
    {
        return rand(10000, 99999);
    }
}