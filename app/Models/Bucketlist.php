<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Bucketlist extends Model
{
    use HasFactory;

    protected $guarded = ['id'];


    public function days():HasMany
    {
        return $this->hasMany(Day::class);
    }

    public function icons(){
        return $this->belongsToMany(Icon::class)->withPivot('icon_id');
    }

    public function getRouteKeyName(){
        if (session()->get('locale') == 'es') {
            return 'slug_es';
        }else{
            return 'slug_en';
        }
    }
}
