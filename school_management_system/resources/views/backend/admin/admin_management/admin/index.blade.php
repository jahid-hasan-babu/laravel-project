@extends('backend.admin.layouts.master',['page_slug'=>'admin'])

@section('title','Admin List')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h4 class="card-title">
                    Admin List
                </h4>
                <a href="{{ route('am.admin.create') }}">Add New</a>
            </div>
            <div class="card-body table-responsive table-striped">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Sl</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Created Date</th>
                            <th>Updated Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($admins as $admin)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $admin->name }}</td>
                                <td>{{ $admin->email }}</td>
                                <td>{{ date('d M, Y', strtotime($admin->created_at)) }}</td>
                                <td>{{ date('d M, Y', strtotime($admin->updated_at)) }}</td>
                                <td>
                                    <!-- Add action buttons or links here -->
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
