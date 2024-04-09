<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class categories extends Model
{
    use HasFactory;


    public function getProjet(){
        return $this->hasMany(projets::class, "categorie_id","id");
    }
}
