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
                        <div class="card-header">
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-borderless">
                                    <thead>
                                    <tr>
                                        <th>Menu name</th>
                                        <th>Icon</th>
                                        <th>Class name</th>
                                        <th>Operator</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @if(!empty($result_menu))
                                    @foreach($result_menu as $key => $data_menu)
                                    <tr>
                                        <td>{{ $data_menu['sys_menu_name'] }}</td>
                                        <td><i class="{{ $data_menu['sys_menu_icon'] }}"></td>
                                        <td>{{ $data_menu['sys_menu_class_name'] }}</td>
                                        <td>
                                            <button class="btn btn-sm btn-warning"><i class="fas fa-pencil-alt"></i></button>
                                            <button class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
                                        </td>
                                    </tr>
                                    @endforeach
                                    @else
                                    <tr>
                                        <td colspan="4">No data!</td>
                                    </tr>
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



