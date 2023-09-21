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
                            <h4 class="card-title">Tenants Data</h4>
                        </div>
                        <div class="card-body">
                            
                        </div>
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>TenantName</th>
                                        <th>Domain</th>
                                        <th>key</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($tenants as $tenant)
                                    <tr>
                                        <td>{{$tenant->name}}</td>
                                        <td>{{$tenant->domain}}</td>
                                        <td>{{$tenant->ApiKey }}
                                        </td>
                                        <td><span class="badge badge-pill badge-light-primary mr-1">Active</span></td>
                                        <td>
                                            <a href="/E?key={{$tenant->ApiKey}}">View Tenant Users</a> 
                                        </td>
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
