@extends('layouts.app_template')


<!-- BEGIN: Content-->
@section('content')
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12">
                    <div class="card">
                        <div class="card-body d-flex">
                            <h4>Add skill</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12">
                    <div class="card">
                        <div class="card-header">
                        </div>
                        <div class="card-body">

                            
                            @method('PUT')
                            <form method="post" action="/skills/create" enctype="multipart/form-data">
                            @csrf
                                <div class="form-group row">
                                    <label for="skill_name" class="col-sm-2 col-form-label">Skill name</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="skill_name" id="skill_name" placeholder="Enter skill name">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="skill_desc" class="col-sm-2">Skill description</label>
                                    <div class="col-sm-10">
                                        <textarea class="form-control" name="skill_desc" id="skill_desc" rows="5" placeholder="Enter skill description"></textarea>
                                    </div>
                                </div>
                                <!-- <div class="form-group row">
                                    <label for="project_start_date" class="col-sm-2 col-form-label">Project start at</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="project_start_date" id="project_start_date" placeholder="Choose start date">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="project_end_date" class="col-sm-2 col-form-label">Project end at</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="project_end_date" id="project_end_date" placeholder="Choose end date">
                                    </div>
                                </div> -->

                                <div class="form-group row">
                                    <div class="col-sm-10">
                                        <button type="submit" class="btn btn-primary">บันทึก</button>
                                        <a class="btn btn-danger" href="{{ URL::to("projects") }}"><i></i>
                                            ยกเลิก
                                        </a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
<!-- END: Content-->



