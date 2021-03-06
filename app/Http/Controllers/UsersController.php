<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use App\UsersModel;
use Illuminate\Support\Facades\DB;


class UsersController extends Controller
{
    public function index()
    {
        $users = UsersModel::orderBy('is_delete', 'asc')->get()->toArray();
//        dd($users);
//        var_dump(app()->make('renderMenu')['result']);exit();
        return view("users.index", compact('users'));
    }
}





