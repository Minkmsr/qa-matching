<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use App\UsersModel;


class UsersController extends Controller
{
    public function index()
    {


//        $user = UsersModel::find(1);
//        var_dump($user->sys_user_id);exit();


        $users = UsersModel::orderBy('is_delete', 'asc')->get()->toArray();
//        dd($users);
//        var_dump(app()->make('renderMenu')['result']);exit();
        return view("users.index", compact('users'));
    }
}





