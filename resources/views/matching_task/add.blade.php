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
                            <div class="card-body d-flex justify-content-between align-items-center">
                                <h4 class="m-0">Matching Task </h4>
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
                                    <div class="form-group">
                                        <label for="task_id">Task</label>
                                        <select class="form-control mb-1" name="task_id" id="task_id">
                                            @foreach($data['tasks'] as $key => $task)
                                                <option value="{{ $task['task_id'] }}"
                                                        data-taskexp="{{ $task['task_exp'] }}">{{ $task['task_name'] }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <hr/>
                                    <div class="row mb-2">
                                        <div class="col-md-12 col-12 d-flex justify-content-between align-items-center">
                                            <label class="m-0">Skill</label>
                                            <button onclick="addSkill(); return false;" class="btn btn-primary btn-sm">
                                                <i class="fas fa-plus"></i></button>
                                        </div>
                                    </div>
                                    <div id="skill-select-group">
                                        <div class="row">
                                            <div
                                                class="col-md-11 col-11 d-flex pr-0 justify-content-between align-items-center">
                                                <select class="form-control mb-1 skill_select" name="skill[]"
                                                        id="skill">
                                                    @foreach($data['skills'] as $key => $skill)
                                                        <option
                                                            value="{{ $skill['skill_id'] }}">{{ $skill['skill_name'] }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-md-1 col-1 text-right">
                                                <button onclick="removeSkill(this); return false;"
                                                        class="btn btn-danger rounded-circle">
                                                    <i class="fas fa-times"></i></button>
                                            </div>
                                        </div>
                                    </div>


                                    <hr/>
                                    <div class="row">
                                        <div class="col-md-12 col-12">
                                            <label>Result search</label>
                                        </div>
                                        <div class="col-md-12 col-12">
                                            <div class="table-responsive">
                                                <table class="table table-borderless" id="task-table">
                                                    <thead>
                                                    <tr>
                                                        <th>QA name</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td>John Doe</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Jane Doe</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Foo Bar</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Bar Foo</td>
                                                    </tr>
                                                    {{--                                    @if(!empty($result_tasks))--}}
                                                    {{--                                    @foreach($result_tasks as $key => $data_task)--}}
                                                    {{--                                    <tr>--}}
                                                    {{--                                        <td><span class="d-block td-text-oneline">{{ $data_task['task_name'] }}</span>--}}
                                                    {{--                                        </td>--}}
                                                    {{--                                        <td><span class="d-block td-text-oneline">{{ $data_task['task_desc'] }}</span>--}}
                                                    {{--                                        </td>--}}
                                                    {{--                                        <td>{{ date('d/m/Y H:i', strtotime($data_task['task_start_date'])).' ---}}
                                                    {{--                                            '.date('d/m/Y H:i', strtotime($data_task['task_end_date'])) }}--}}
                                                    {{--                                        </td>--}}
                                                    {{--                                        <td>--}}
                                                    {{--                                            <a type="button"--}}
                                                    {{--                                               href="{{ url('/tasks/edit/'.$data_task['task_id']) }}"--}}
                                                    {{--                                               class="btn btn-sm btn-primary ml-auto"><i class="fas fa-pencil-alt"></i></a>--}}
                                                    {{--                                            <a type="button" data-toggle="tooltip" title="More detail"--}}
                                                    {{--                                               href="{{ url('/tasks/edit/'.$data_task['task_id']) }}"--}}
                                                    {{--                                               class="btn btn-sm btn-primary ml-auto"><i class="fas fa-search"></i></a>--}}
                                                    {{--                                            <button class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>--}}
                                                    {{--                                        </td>--}}
                                                    {{--                                    </tr>--}}
                                                    {{--                                    @endforeach--}}
                                                    {{--                                    @endif--}}
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group row mt-3">
                                        <div class="col-sm-10">
                                            <button type="button" class="btn btn-primary"
                                                    onclick="fetchUserFromCriteria(); return false;">Submit
                                            </button>
                                            <a class="btn btn-danger" href="{{ URL::to("matching_task") }}"><i></i>
                                                Cancel
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


@section('script')

    <script>


        $(document).ready(function () {

        });


        function addSkill() {
            var elemt = '';
            elemt += ` <div class="row">
                            <div class="col-md-11 col-11 d-flex pr-0 justify-content-between align-items-center">
                                <select class="form-control mb-1 skill_select" name="skill[]" id="skill">
                                    <option value="" disabled selected>-- Choose skill for match task --
                                    </option>
                                    <option value="">Front-End Skill</option>
                                    <option value="">Back-End Skill</option>
                                    <option value="">Network</option>
                                    <option value="">Server</option>
                                    <option value="">Hosting Website</option>
                                </select>
                            </div>
                            <div class="col-md-1 col-1 text-right">
                                <button onclick="removeSkill(this); return false;" class="btn btn-danger rounded-circle">
                                    <i class="fas fa-times"></i></button>
                            </div>
                        </div>`;
            $('#skill-select-group').append(elemt);
        }


        function removeSkill(obj) {
            $(obj).parent().parent().remove()
        }


        const fetchUserFromCriteria = () => {
            let formData = new FormData();
            formData.append('task_id', $('#task_id').val());
            $('#task_id').each(function () {
                if ($(this).is(':selected')) {
                    formData.append('task_exp', this.dataset.taskexp);
                }
            });
            let skillDOM = document.getElementsByClassName('skill_select');
            [...skillDOM].map((item, index) => {
                formData.append('skill[]', item.value);
            });
            formData.append('_token', $('meta[name="csrf-token"]').attr('content'));
            $.ajax({
                url: "/matching_task/getQaByCriteria",
                type: "POST",
                processData: false,
                contentType: false,
                data: formData,
                success: function (response) {
                    console.log(response);
                    // if(response) {
                    //     $('.success').text(response.success);
                    //     $("#ajaxform")[0].reset();
                    // }
                },
            });


            // const response = await fetch("/matching_task/getQaByCriteria", {
            //     method: 'POST', // *GET, POST, PUT, DELETE, etc.
            //     mode: 'cors', // no-cors, *cors, same-origin
            //     cache: 'no-cache', // *default, no-cache, reload, force-cache, only-if-cached
            //     headers: {
            //         'X-CSSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            //         // 'Content-Type': 'application/json'
            //         // 'Content-Type': 'application/x-www-form-urlencoded',
            //     },
            //     body: formData // body data type must match "Content-Type" header
            // });
            // const data = response.json(); // parses JSON response into native JavaScript objects
        }

    </script>

@endsection

