<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WoningType extends Model
{
    use HasFactory;

    public function woningen()
    {
        return $this->belongsTo(Woning::class, 'woning_type_id' , 'id');
    }
}
