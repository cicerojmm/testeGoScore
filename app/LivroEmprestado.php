<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LivroEmprestado extends Model {
    protected $table = 'livro_emprestados';

    protected $fillable = ['livro_nome', 'livro_usuario', 'livro_tipo_usuario', 'livro_data_emprestimo', 'livro_data_entrega'];
    protected $guarded = ['livro_id'];


    public $timestamps = false;

}
