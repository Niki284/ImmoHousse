<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Woning extends Model
{
    use HasFactory;

    public function woningTypes()
    {
        return $this->belongsTo(WoningType::class , 'woning_type_id' , 'id');
    }

    public function voorziningen()
    {
        return $this->belongsToMany(Voorziningen::class);
    }

    public function technisches()
    {
        return $this->hasOne(Technisch::class , 'woning_id' , 'id');
    }
}
