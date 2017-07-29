@extends('template')



@section('titulo_secao')
    Relatório do Emprestimo do Livro
@stop

@section('conteudo')

    <table class="table table-condensed">
        <tr>
            <td>Livro</td>
            <td>Reponsável</td>
            <td>Cargo</td>
            <td>Inicio do Emprestimo</td>
            <td>Fim do Emprestiomo</td>
        </tr>

        <tr>
            <td>{{ $livroEmprestado->livro_nome }}</td>
            <td>{{ $livroEmprestado->livro_usuario }}</td>
            <td>@if($livroEmprestado->livro_tipo_usuario == 1)  {{'Aluno'}} @else {{'Professor'}} @endif </td>
            <td>{{ $livroEmprestado->livro_data_emprestimo }}</td>
            <td>{{ $livroEmprestado->livro_data_entrega }}</td>
        </tr>
    </table>

@stop