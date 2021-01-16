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
                                <h4 class="m-0">Matching Task - Detail</h4>
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
                                <div class="row mb-3">
                                    <div class="col-12 col-md-12">
                                        <h5>Task Name</h5>
                                        <h4>Create HTML template</h4>
                                        <hr />
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-12 col-md-12">
                                        <h5>Responsible By</h5>
                                        <h4>John Doe</h4>
                                        <hr />
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-12 col-md-12">
                                        <h5>Skill (s)</h5>
                                        <h4>Front-End Skill</h4>
                                        <h4>Network</h4>
                                        <h4>Server</h4>
                                        <hr />
                                    </div>
                                </div>
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
                                <select class="form-control mb-1" name="skill[]" id="skill">
                                    <option value="" disabled selected>-- Choose skill for match task --
                                    </option>
                                    <option value="" disabled>Front-End Skill</option>
                                    <option value="" disabled>Back-End Skill</option>
                                    <option value="" disabled>Network</option>
                                    <option value="" disabled>Server</option>
                                    <option value="" disabled>Hosting Website</option>
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

    </script>

@endsection

