<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class job
{

    public static function all(): array {
        return  [
            [
                "id" => 1,
                "title" => "Director",
                 "salary" => "$50,000"
            ],
            [
                "id" => 2,
                "title" => "Deveeloper",
                 "salary" => "$20,000"
            ],
            [
                "id" => 3,
                "title" => "Teacher",
                 "salary" => "$10,000"
            ],
        ];
       }
}


