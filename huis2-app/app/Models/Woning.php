<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Woning extends Model
{
    use HasFactory;

    public function woningTypes()
    {
        return $this->hasMany(WoningType::class , 'woning_id' , 'id');
    }

    public function voorziningen()
    {
        return $this->hasMany(Voorziningen::class , 'woning_id' , 'id');
    }

    public function technisches()
    {
        return $this->hasOne(Technisch::class , 'woning_id' , 'id');
    }
    public function indeling()
    {
        return $this->hasOne(Indeling::class , 'woning_id' , 'id');
    }

    public function favorite()
    {
        return $this->hasOne(Favorite::class);
    }
    
}
