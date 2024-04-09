<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ligne_devis extends Model
{
    use HasFactory;


    public function getLignes(){
        return $this->hasMany(ligne_devis::class, "devis_id","id");
    }
}
