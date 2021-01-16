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
                            <!--                            <h4 class="card-title">Default Input text</h4>-->
                        </div>
                        <div class="card-body">
                            <form method="post" action="#" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="first_name">First name</label>
                                        <input type="text" class="form-control" id="first_name" name="first_name">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="last_name">Last name</label>
                                        <input type="text" class="form-control" id="last_name" name="last_name">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="line_id">Line ID</label>
                                        <input type="text" class="form-control" id="line_id" name="line_id">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="email">E-mail</label>
                                        <input type="email" class="form-control" id="email" name="email">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="telephone">Tel No.</label>
                                        <input type="tel" class="form-control" id="telephone" name="telephone">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="username">Username</label>
                                        <input type="text" class="form-control" id="username" name="username">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="password">Password</label>
                                        <input type="password" class="form-control" id="password" name="password">
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Sign in</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div>


            </div>
        </div>
    </div>
</div>
@endsection
<!-- END: Content-->



