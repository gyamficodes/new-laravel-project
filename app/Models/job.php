<?php

namespace App\Models;

use Illuminate\Support\Arr;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Job extends Model
{
    use HasFactory;
   protected $table = "job_listings";
   protected $fillable = ["title", "salary"];

   public function Employer()
   {
       return $this->belongsTo(Employer::class);
   }
   public function Tag() 
   {
    return $this->BelongsToMany(Tag::class , foreignPivotKey: "job_listing_id");
   }
}










