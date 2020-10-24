<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shopper extends Model
{
    public function sales(){
        return $this->hasMany(Sale::class);
    }
}
