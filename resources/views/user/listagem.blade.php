<div>
    <h1>Lista de usuários</h1>
    <ul>
        @foreach ($users as $u) 
            <li>
                {{$u->nome}}
                <a href="/user/{{ $u->id }}">detalhes</a>
            </li>
        @endforeach
    </ul>
</div>
