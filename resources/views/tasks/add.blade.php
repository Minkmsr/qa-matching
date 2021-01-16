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
                            <h4>Add task</h4>
                        </div>
                    </div>

                    @if ($errors->all())
                        <div class="card alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>
                                    {{$error}}
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12">
                    <div class="card">
                        <div class="card-header">
                        </div>
                        <div class="card-body">

                           
                            @method('PUT')
                            <form method="post" action="/tasks/create" enctype="multipart/form-data">
                            @csrf
                                <div class="form-group row">
                                    <label for="task_name" class="col-sm-2 col-form-label">Task name</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="task_name" id="task_name" placeholder="Enter project name" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="task_desc" class="col-sm-2">Task description</label>
                                    <div class="col-sm-10">
                                        <textarea class="form-control" name="task_desc" id="task_desc" rows="5" placeholder="Enter project description"></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="task_start_date" class="col-sm-2 col-form-label">Task start at</label>
                                    <div class="col-sm-10">
                                        <input type="date" class="form-control" name="task_start_date" id="task_start_date" placeholder="Choose start date" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="task_end_date" class="col-sm-2 col-form-label">Task end at</label>
                                    <div class="col-sm-10">
                                        <input type="date" class="form-control" name="task_end_date" id="task_end_date" placeholder="Choose end date" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-10">
                                        <button type="submit" class="btn btn-primary">บันทึก</button>
                                        <a class="btn btn-danger" href="{{ URL::to("tasks") }}"><i></i>
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



