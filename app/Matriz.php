<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Matriz extends Model {
    protected $table = 'matriz';

    protected $fillable = ['matriz_posicao', 'matriz_conteudo'];

    public $timestamps = false;


}
