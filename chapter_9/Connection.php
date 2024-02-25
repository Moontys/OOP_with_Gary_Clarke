<?php

class Connection
{
    private static int $count = 0;

    // public int $count = 0;

    public function __construct()
    {
        self::$count++;
    }

    // public function __construct()
    // {
    //     $this->count++;
    // }

    public static function getConnectionCount(): int
    {
        return self::$count;
    }
}
