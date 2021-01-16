<?php

namespace App\Http\Controllers;


use App\LoginModel;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        // $result_login = LoginModel::orderBy('created_at', 'desc')->get()->toArray();
        return view("login.index");
    }

}
