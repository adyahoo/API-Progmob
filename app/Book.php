<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $table='books';

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function inventory(){
        return $this->hasMany(Inventories::class);
    }
}
