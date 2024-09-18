<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lezione extends Model
{
    protected $table='lezione'; 
    public $timestamps = false;

    public function corso(){
        return $this->belongsTo(Corso::class, 'corso_id');
    }
}
