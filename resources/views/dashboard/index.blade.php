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
                            <h4 class="m-0">DashBoard</h4>
                            <a type="button" href="{{ url('/tasks/add') }}" class="btn btn-primary ml-auto"><i
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
                                <table class="table table-borderless" id="task-table">
                                    <thead>
                                    <tr>
                                        <th>Task name</th>
                                        <th>Task description</th>
                                        <th>Start date - End date</th>
                                        <th>Operator</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @if(!empty($result_tasks))
                                    @foreach($result_tasks as $key => $data_task)
                                    <tr>
                                        <td><span class="d-block td-text-oneline">{{ $data_task['task_name'] }}</span>
                                        </td>
                                        <td><span class="d-block td-text-oneline">{{ $data_task['task_desc'] }}</span>
                                        </td>
                                        <td>{{ date('d/m/Y H:i', strtotime($data_task['task_start_date'])).' -
                                            '.date('d/m/Y H:i', strtotime($data_task['task_end_date'])) }}
                                        </td>
                                        <td>
                                            <a type="button"
                                               href="{{ url('/tasks/edit/'.$data_task['task_id']) }}"
                                               class="btn btn-sm btn-primary ml-auto"><i class="fas fa-pencil-alt"></i></a>
                                            <button class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
                                        </td>
                                    </tr>
                                    @endforeach
                                    @else
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
        $('#task-table').DataTable({
        });
    });

</script>

@endsection

