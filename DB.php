<?php

declare(strict_types=1);

class DB
{
    public static function connect(): PDO
    {
        return new PDO(
            "mysql:host=localhost;dbname=work_off_tracker",
            'umarov',
            '2505');
    }
}