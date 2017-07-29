@extends('template')

@section('titulo_secao')
    Menu Principal
@stop


@section('conteudo')
    @foreach($itensMenu as $item)
        <a href="problema{{ $item->menu_id }}">
            <button type="button" class="btn btn-warning btn-lg btn-block">{{ $item->menu_descricao }} </button>
        </a>

        <br>
    @endforeach

@stop