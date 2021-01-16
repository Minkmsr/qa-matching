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
                            <h4 class="m-0">Skill ส่วนในการเพิ่มข้อมูลทักษะของ QA</h4>
                            <a type="button" href="{{ url('/skills/add') }}" class="btn btn-primary ml-auto"><i
                                    class="fas fa-plus"></i></a>
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
                            <div class="table-responsive">
                                <table class="table table-borderless" id="project-table">
                                    <thead>
                                    <tr>
                                        <th>Skills name</th>
                                        <th>Skills description</th>
                                        <!-- <th>Start date - End date</th> -->
                                        <th>Operator</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @if(!empty($result_skills))
                                    @foreach($result_skills as $key => $data_project)
                                    <tr>
                                        <td><span
                                                class="d-block td-text-oneline">{{ $data_project['skill_name'] }}</span>
                                        </td>
                                        <td><span
                                                class="d-block td-text-oneline">{{ $data_project['skill_desc'] }}</span>
                                        </td>
                                        <td>
                                            <a type="button"
                                               href="{{ url('/skills/edit/'.$data_project['skill_id']) }}"
                                               class="btn btn-sm btn-primary ml-auto">
                                               <i class="fas fa-pencil-alt"></i>
                                            </a>

                                            <a type="button"
                                               href="{{ url('/skills/destroy/'.$data_project['skill_id']) }}"
                                               class="btn btn-sm btn-danger">
                                               <i class="fas fa-trash"></i>
                                            </a>
                                            
                                        </td>
                                    </tr>
                                    @endforeach
                                    @endif
                                    </tbody>
                                </table>
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
        $('#project-table').DataTable({
        });
    });

</script>

@endsection

