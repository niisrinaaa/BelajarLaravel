<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class court extends Model
{
    // use HasFactory;
    public function type(){
        return $this->belongsTo(courttype::class);
    }
}
