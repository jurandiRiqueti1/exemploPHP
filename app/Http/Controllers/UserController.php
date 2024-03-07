<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    /**
     * Retorna o detalhe de cada usuário.
     */
    public function details(User $user): View
    {
        return view('user.details', ['user' => $user]);
    }


    public function getAll(): View {

        //$users = User::all();
        $users = DB::table('users')->get();

        return view('user.listagem', ['users' => $users]);
    }
}
