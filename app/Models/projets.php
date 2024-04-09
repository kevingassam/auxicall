<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class projets extends Model
{
    use HasFactory;


    public function getCategorie(){
        return $this->belongsTo(categories::class, "categorie_id","id");
    }
}
