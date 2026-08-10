<?php

namespace App\Models;

class Job{
    public static function all(): array {
        return [
            [
                'id' => 1,
                'title' => 'Director',
                'salary' => '$80,000'
            ],

            [
                'id' => 2,
                'title' => 'Sale Manager',
                'salary' => '$90,000'
            ],

            [
                'id' => 3,
                'title' => 'Programmer',
                'salary' => '$45,000'
            ]
        ];

    }
}
