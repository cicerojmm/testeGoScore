@extends('template')


@section('titulo_secao')
    Problema 4
@stop

@section('conteudo')
    <p>
        Criar um algoritmos que entre com uma palavra e imprima conforme o exemplo
        ◦ Palavra: sonho
        ◦ SONHO
        ◦ SONHO SONHO
        ◦ SONHO SONHO SONHO
        ◦ SONHO SONHO SONHO SONHO
    </p>

    <form id="repete_palavra"  action="/problema4/mostraPalavra" name="repete_palavra" data-parsley-validate class="form-horizontal form-label-left" method="post">
        {{ csrf_field() }}

        <div class="form-group">
            <label class="col-md-3 col-sm-3 col-xs-12" for="palavra">Palavra<span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" maxlength="250" id="palavra" name="palavra" value="{{ old('palavra') }}" placeholder="Digite a Palavra" class="form-control col-md-7 col-xs-12" required>
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                <button type="submit" class="btn btn-success">&nbsp;Enviar&nbsp;</button>
            </div>
        </div>

    </form>

    @if(!empty($palavraRepetida))

        <table class="table table-condensed">
            @foreach($palavraRepetida as $palavra)
                <tr>
                    <td>
                        {{ $palavra }}
                    </td>
                </tr>
            @endforeach
        </table>

    @endif

@stop
