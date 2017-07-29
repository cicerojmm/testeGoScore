@extends('template')


@section('titulo_secao')
    Problema 1
@stop

@section('conteudo')

    <p>
        A biblioteca de uma universidade deseja fazer um algoritmo que leia o nome
        do livro que será emprestado, o tipo de usuário (professor ou aluno) e possa
        imprimir um recibo conforme mostrado a seguir. Considerar que o professor tem
        10 dias para devolver o livro o aluno somente 3 dias.
    </p>

    <br>

    @if(count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form id="form_livro_empretado"  name="form_livro_empretado" data-parsley-validate class="form-horizontal form-label-left" method="post">
        {{ csrf_field() }}

        <div class="form-group">
            <label class="col-md-3 col-sm-3 col-xs-12" for="livro_nome">Nome do Livro <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" maxlength="250" id="livro_nome" name="livro_nome" value="{{ old('livro_nome') }}" placeholder="Nome do Livro" class="form-control col-md-7 col-xs-12">
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 col-sm-3 col-xs-12" for="livro_usuario">Nome do Usuário <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" maxlength="100" id="livro_usuario" name="livro_usuario" value="{{ old('livro_usuario') }}" placeholder="Nome do Usuário" class="form-control col-md-7 col-xs-12">
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 col-sm-3 col-xs-12" for="livro_tipo_usuario">Tipo do Usuário <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="radio" id="livro_tipo_usuario" name="livro_tipo_usuario" value="1"> Aluno
                <input type="radio" id="livro_tipo_usuario2" name="livro_tipo_usuario" value="2"> Professor
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                <button type="submit" class="btn btn-success">&nbsp;Concluir&nbsp;</button>
            </div>
        </div>

    </form>


@stop