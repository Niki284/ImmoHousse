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
}
