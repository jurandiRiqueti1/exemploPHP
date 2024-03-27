@extends('components.layout')
 
@section('title', 'Usuários')
 
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
    <form method="POST" action="/users/store">
        @csrf
        <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" class="form-control" id="nome" name="nome">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">E-mail</label>
            <input type="email" class="form-control" id="email" name="email">
        </div>
        <button type="submit" class="btn btn-primary">Salvar</button>
    </form>
</div>
@endsection