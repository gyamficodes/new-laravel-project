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
   protected $fillable = [ "title", "salary","employer_id"];

   //One to one Relations
   public function employer()
   {
       return $this->belongsTo(Employer::class);
   }

   //Many to Many relations
   public function tags() 
   {
    return $this->BelongsToMany(Tag::class , foreignPivotKey: "job_listing_id");
   }
}










