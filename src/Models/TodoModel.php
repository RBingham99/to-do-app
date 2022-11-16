<?php

namespace App\Models;

class TodoModel
{
    public function getTasks(): array
    {
        $data = [
            ['id' => 1, 'description' => 'make waffles', 'status' => 0, 'due' => '16-11-2022'],
            ['id' => 2, 'description' => 'eat waffles', 'status' => 0, 'due' => '16-11-2022']
        ];
        return $data;
    }
}