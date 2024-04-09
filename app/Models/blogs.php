<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class blogs extends Model
{
    use HasFactory;


    // count all visite for article un vistors tables
    public function GetVisites(){
        return $this->hasMany(visitors::class, "id_article","id");
    }
}
