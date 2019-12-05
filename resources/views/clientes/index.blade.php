@extends('layouts.principal')

@section('conteudo')
<h3>Listagem de todos os clientes</h3>
<a href="{{route('clientes.create')}}">Novo Cliente </a>

@if(count($clientes)>0)
<ul>
    @foreach ($clientes as $c)
    <li>
        {{ $c['nome'] }} |
        <a href="{{route('clientes.edit',$c['id'])}}">Editar | </a>
        <a href="{{route('clientes.show',$c['id'])}}"> Info </a>
        <form action="{{route('clientes.destroy',$c['id'])}}" method="POST">
            @csrf 
            @method('DELETE')
            <input type="submit" name="apagar">
        </form>
    </li>    
    @endforeach   
</ul>

@else
<h4>Não existem Clientes cadastrados</h4>
@endif

@endsection