<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Avvisi extends Model
{
    protected $table = 'avvisi';
    public $timestamps = false;

    public function corso(){
        return $this->belongsTo(Corso::class, 'corso_id');
    }
}
