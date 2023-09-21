<div>
    <div class="row" id="table-borderless">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Borderless Table</h4>
                </div>
                <div class="card-body">
                    <p class="card-text">
                        Add <code>.table-borderless</code> for a table without borders. It can also be used on dark tables.
                    </p>
                </div>
                <div class="table-responsive">
                    <table class="table table-borderless">
                        <thead>
                            <tr>
                                <th>Project</th>
                                <th>Client</th>
                                <th>Users</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($tenants as $tenant)
                            <tr>
                                <td>
                                    <span class="font-weight-bold">Angular Project</span>
                                </td>
                                <td>Peter Charls</td>
                                <td>
                                   here
                                </td>
                                <td><span class="badge badge-pill badge-light-primary mr-1">Active</span></td>
                                <td>
                                    swech
                                </td>
                            </tr>
                            @endforeach
                           
         
                    </table>
                </div>
            </div>
        </div>
    </div></div>
