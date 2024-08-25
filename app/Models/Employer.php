<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employer extends Model
{
    use HasFactory;
     protected $table = 'employers'; // Ensure this matches your actual table name
     protected $fillable = ['name']; // Add any other attributes
     
}
