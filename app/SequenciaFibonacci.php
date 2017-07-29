<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SequenciaFibonacci extends Model {
    protected $table = 'numeros_sequencia_fibonacci';

    protected $fillable = ['numeros_sequencia_aleatoria', 'numeros_sequencia_fibonacci'];
    protected $guarded = ['numeros_id'];

    public $timestamps = false;
}
