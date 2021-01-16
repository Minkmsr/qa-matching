<?php

namespace App\Http\Controllers;


use App\MatchingTaskModel;
use Illuminate\Http\Request;

class DashboadController extends Controller
{
    public function index()
    {
//        $result_dashboard = MatchingTaskModel::orderBy('created_at', 'desc')->get()->toArray();
        return view("dashboard.index");
//        return view("dashboard.index", compact('result_matching_tasks'));
    }

}
