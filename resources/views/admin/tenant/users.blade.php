@extends('admin.layout.layout')
    <!-- END: Main Menu-->

    @section('content')
    <div class="app-content content ">

        <div class="content-body">
             <!-- Striped rows start -->
             <div class="row" id="table-striped">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">{{$tenant->name}}</h4>
                        </div>
                        <div class="card-body">

                        </div>
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>TenantName</th>
                                        <th>Api key</th>
                                        <th>User Name</th>
                                        <th>Email</th>
                                        <th>status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($tenant->users as $user)
                                    <tr>
                                        <td>{{$tenant->name}}</td>
                                        <td>{{$user->ApiKey}}</td>
                                        <td>{{$user->name }}</td>
                                        <td>{{$user->email }}</td>
                                        <td><span class="badge badge-pill badge-light-danger mr-1">DisActive</span></td>

                                    </tr>
                                    @endforeach


                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Striped rows end -->
      </div>
    </div>
@endsection
