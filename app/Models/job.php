<?php

namespace App\Models;

use Illuminate\Support\Arr;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class job
{

    public static function all(): array
    {
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

    public static function find(int $id): array
    {

        $job = Arr::first(static::all(), fn($job) => $job["id"] === $id);
        if (! $job) {
            abort(404);
        }
        return $job;
    }
}
