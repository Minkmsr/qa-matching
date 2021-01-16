<?php

namespace App\Http\Controllers;


use App\TasksModel;
use Illuminate\Http\Request;

class TasksController extends Controller
{
    public function index()
    {
        $result_tasks = TasksModel::orderBy('created_at', 'desc')->get()->toArray();
        return view("tasks.index", compact('result_tasks'));
    }


    public function add()
    {
        return view("tasks.add");
    }

    public function create(Request $request)
    {
    //    dd($request->all());
    // $input = $request->all();
    // $request->validate([
    //     'task_name' => 'required',
    //     'task_start_date' => 'required',
    //     'task_end_date' => 'required'
    // ]);

    $task = new TasksModel;
    $task->task_name = $request->task_name;
    $task->task_desc = $request->task_desc;
    $task->task_start_date = $request->task_start_date;
    $task->task_end_date = $request->task_end_date;
    $task->save();
    return redirect('/tasks');


    // TasksModel::create($request->all());

    //    return TasksModel::create([
    //     'project_name' => $input['project_name'],
    //     'project_desc' => $input['project_desc'],
    // ]);

    }

    public function update(Request $request)
    {
        //dd($request->all());
        TasksModel::where('task_id', $request->task_id)->update(array(
            'task_name' => $request->task_name,
            'task_desc' => $request->task_desc,
            'task_start_date' => $request->task_start_date,
            'task_end_date' => $request->task_end_date
        ));
        return redirect()->back();
    }



    public function edit($id)
    {
        $result_task = TasksModel::where('task_id', '=', $id)->orderBy('created_at', 'desc')->first();
//        dd($result_task);
        return view("tasks.edit", compact('result_task'));
    }



}
