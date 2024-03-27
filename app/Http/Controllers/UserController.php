<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{

    public function update($id) {
        
        $nome = $_POST['nome'];
        $email = $_POST['email'];

        DB::table('users')->where('id',"=", $id)->update([
            'nome' => $nome,
            'email' => $email
        ]);

        return redirect('/users');
    }

    public function store()
    {
        $nome = $_POST['nome'];
        $email = $_POST['email'];

        DB::table('users')->insert([
            'nome' => $nome,
            'email' => $email
        ]);

        return redirect('/users');
    }

    public function createView(): View 
    {
        return view('user.formCadastro');
    }

    /**
     * Retorna o detalhe de cada usuário.
     */
    public function details(User $user): View
    {
        return view('user.details', ['user' => $user]);
    }

    /**
     * Retorna todos os usuários
     */
    public function getAll(): View {

        //$users = User::all();
        $users = DB::table('users')->get();

        return view('user.listagem', ['users' => $users]);
    }
}
