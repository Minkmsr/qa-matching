<?php

namespace App\Http\Controllers;

use App\ProjectModel;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public function index()
    {
        $result_projects = ProjectModel::orderBy('created_at', 'desc')->get()->toArray();
        return view("projects.index", compact('result_projects'));
    }


    public function add()
    {
        return view("projects.add");
    }


    public function edit($id)
    {
        $result_project = ProjectModel::where('project_id', '=', $id)->orderBy('created_at', 'desc')->first();
        return view("projects.edit", compact('result_project'));
    }
}
