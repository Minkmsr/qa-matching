<?php

namespace App\Http\Controllers;

use App\SkillModel;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    public function index()
    {
        $result_skills = SkillModel::orderBy('created_at', 'desc')->get()->toArray();
        return view("skills.index", compact('result_skills'));
    }


    public function add()
    {
        return view("skills.add");
    }

    public function create(Request $request)
    {
        //dd($request->all());

        $skill = new SkillModel;
        $skill->skill_name = $request->skill_name;
        $skill->skill_desc = $request->skill_desc;
        $skill->save();
        return redirect('/skills');
    

    }

    public function update(Request $request)
    {
        //dd($request->all());



        //$skill = new SkillModel;
       
        SkillModel::where('skill_id', $request->skill_id)->update(array(
            'skill_name' => $request->skill_name,
            'skill_desc' => $request->skill_desc
        ));
        return redirect()->back();
        //$skill->skill_name = $request->skill_name;
       // $skill->skill_desc = $request->skill_desc;
       // $skill->save();
       // return redirect('/skills');
    

    }


    public function edit($id)
    {
     $result_skill = SkillModel::where('skill_id', '=', $id)->orderBy('created_at', 'desc')->first();
        return view("skills.edit", compact('result_skill'));
    }

    public function destroy($id)
    {
        dd($id);
        //$skill = SkillModel::find($id);
        //$skill->delete();
        //return redirect('/skills');
    }
}
