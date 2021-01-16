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
                            <h4>Add project</h4>
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

                            @csrf
                            @method('PUT')
                            <form method="post" action="#" enctype="multipart/form-data">
                                <div class="form-group row">
                                    <label for="project_name" class="col-sm-2 col-form-label">Project name</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="project_name" id="project_name" placeholder="Enter project name">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="project_desc" class="col-sm-2">Project description</label>
                                    <div class="col-sm-10">
                                        <textarea class="form-control" name="project_desc" id="project_desc" rows="5" placeholder="Enter project description"></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
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
                                </div>

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



