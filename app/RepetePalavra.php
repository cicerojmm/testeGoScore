<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RepetePalavra extends Model {
    protected $table = 'repete_palavras';

    protected $fillable = ['palavra_original', 'palavra_repetida'];
    protected $guarded = ['id'];

    public $timestamps = false;
}
