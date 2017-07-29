@extends('template')


@section('titulo_secao')
    Problema 5
@stop

@section('conteudo')
    <p>
        Criar algoritmos com um campo que possa receber apenas números e virgulas, separe os valores enviados e valide aqueles que são um número válido da Sequência de Fibonacci e imprima os números de forma crescente, conforme o exemplo:
        <br> ◦ INPUT RECEBE: 1,13,55,21,5,83
        <br> ◦ Imprimi: 1,5,21,55
    </p>

    <br>

    <form id="form_sequencia_fibonacci" name="form_sequencia_fibonacci" data-parsley-validate class="form-horizontal form-label-left" >
        {{ csrf_field() }}

        <div class="form-group">
            <label class="col-md-3 col-sm-3 col-xs-12" for="numeros">Números<span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" maxlength="250" id="numeros" name="numeros" value="{{ old('numeros') }}" placeholder="Digite os números" class="form-control col-md-7 col-xs-12" required>
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                <button type="submit" class="btn btn-success">&nbsp;Enviar&nbsp;</button>
            </div>
        </div>

    </form>


    <bR>
    <table id="tabelaMostraConteudo" class="table table-condensed" style="display: none">
        <tr><td>Resultado</td></tr>

    </table>
@stop