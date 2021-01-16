<?php

namespace App\Http\Controllers;


use App\MatchingTaskModel;
use App\SkillModel;
use App\TasksModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MatchingTaskController extends Controller
{
    public function index()
    {
//        $result_matching_tasks = MatchingTaskModel::orderBy('created_at', 'desc')->get()->toArray();
        return view("matching_task.index");
//        return view("matching_task.index", compact('result_matching_tasks'));
    }


    public function add()
    {

        $skills = SkillModel::where('is_delete', '0')->orderBy('created_at', 'desc')->get()->toArray();
        $tasks = TasksModel::where('is_delete', '0')->orderBy('created_at', 'desc')->get()->toArray();

        $data['skills'] = $skills;
        $data['tasks'] = $tasks;

//        $users = DB::table('users')
//            ->join('contacts', 'users.id', '=', 'contacts.user_id')
//            ->join('orders', 'users.id', '=', 'orders.user_id')
//            ->select('users.*', 'contacts.phone', 'orders.price')
//            ->get();

        return view("matching_task.add", ['data' => $data]);
    }


    public function edit($id)
    {
//        $result_matching_task = MatchingTaskModel::where('task_id', '=', $id)->orderBy('created_at', 'desc')->first();
        return view("matching_task.edit");
//        return view("matching_task.edit", compact('result_matching_task'));
    }


    public function detail($id)
    {
//        $result_matching_task = MatchingTaskModel::where('task_id', '=', $id)->orderBy('created_at', 'desc')->first();
        return view("matching_task.detail");
//        return view("matching_task.edit", compact('result_matching_task'));
    }


    public function getQaByCriteria(Request $request)
    {
        $task_exp = $request->task_exp;
        $skill_criteria = implode(',', $request->task_exp);
        $results = DB::select(DB::raw("SELECT
            *
        FROM
            tb_sys_users AS t1
        INNER JOIN(
            SELECT
                *
            FROM
                tb_skills_mapping_qa
        ) AS t2
        ON
            t1.sys_user_id = t2.user_id
        LEFT JOIN(
        SELECT
            *
        FROM
            tb_skills
        ) AS t3
        ON
            t3.skill_id = t2.skill_id
        INNER JOIN(
            SELECT
                *
            FROM
                tb_task_skill_mapping
        ) AS t4
        ON
            t3.skill_id = t4.skill_id
        WHERE
            1 AND t4.skill_id IN('1', '2')"), array());
        var_dump($results);
        exit();
    }
}
