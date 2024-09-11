<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Icon extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'img'];

    // much to mucho with experiences
    public function experiences()
    {
        return $this->belongsToMany(Experience::class);
    }
}
