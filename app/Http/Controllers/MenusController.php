<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// USE MODEL
use App\MenusModel;

class MenusController extends Controller
{
    public function index() {
        $result_menu = MenusModel::where('is_delete', '=', '0')->orderBy('sys_menu_sort', 'asc')->get()->toArray();
//        dd($result_menu);
        return view("menus.index", compact('result_menu'));
    }



}
