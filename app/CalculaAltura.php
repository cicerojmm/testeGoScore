<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CalculaAltura extends Model {

    protected $table = 'pessoa_alturas';

    protected $fillable = ['pessoa_nome', 'pessoa_altura_m', 'pessoa_crescimento_cm'];
    protected $guarded = ['pessoa_id'];


    public $timestamps = false;

}
