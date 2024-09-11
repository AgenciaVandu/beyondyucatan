<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Experience extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    //Relacion uno a mucho de la base de datos de categories
    public function category()
    {
        return $this->belongsTo(category::class);
    }
}