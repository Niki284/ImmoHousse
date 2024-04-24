<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Voorziningen extends Model
{
    use HasFactory;

    public function woning()
    {
        return $this->belongsToMany(Woning::class );
    }
}
