@extends('template')


@section('titulo_secao')
    Problema 1
@stop

@section('conteudo')

    <p>
        Criar um algoritmo com uma matriz 5x5 e imprima: toda a matriz, a matriz gerada só com números
        ímpares e outra só com números pares
    </p>

    <br>

    <h2>Matriz Completa</h2>
    <table class="table table-striped">
        @for($i =0; $i < count($matriz[0]); $i++)
            <tr>
                @for($j =0; $j < count($matriz[0]); $j++)
                        <td>{{ $matriz[$i][$j] }}</td>
                @endfor
            </tr>
        @endfor
    </table>

    <h2>Matriz de Números Par</h2>
    <table class="table table-striped">
        @for($i =0; $i < count($matriz[0]); $i++)
            <tr>
                @for($j =0; $j < count($matriz[0]); $j++)
                    @if(isset($matrizPar[$i][$j]))
                    <td>{{ $matrizPar[$i][$j] }}</td>
                    @endif
                @endfor
            </tr>
        @endfor
    </table>

    <h2>Matriz de Números Impar</h2>
    <table class="table table-striped">
        @for($i =0; $i < count($matriz[0]); $i++)
            <tr>
                @for($j =0; $j < count($matriz[0]); $j++)
                    @if(isset($matrizImpar[$i][$j]))
                     <td>{{ $matrizImpar[$i][$j] }}</td>
                    @endif
                @endfor
            </tr>
        @endfor
    </table>

@stop