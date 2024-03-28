@extends('components.layout')
 
@section('title', 'Detalhes do usuário')
 
@section('content')
<div>
        <div class="row justify-content-end">
            <div class="col">
                <a type="button" 
                    class="btn  btn-primary"
                    href="/users"
                >
                    voltar
                </a> 
            </div>
        </div>
    <form method="POST" action="/users/update/{{ $user->id }}">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" class="form-control" id="nome" name="nome" value="{{ $user->nome }}">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">E-mail</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}">
        </div>
        <button type="submit" class="btn btn-primary">Atualizar</button>
    </form>
    <form method="POST" action="/users/delete/{{ $user->id }}">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Excluir</button>
    </form>
</div>
@endsection