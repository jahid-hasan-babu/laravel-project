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
                <a href="{{ route('am.admin.create') }}" class="btn btn-sm btn-primary">Add New</a>
            </div>
            <div class="card-body table-responsive table-striped">
                <table class="table">
                    <thead>
                        <tr>
                            <th>{{ __('SL') }}</th>
                            <th>{{ __('Name') }}</th>
                            <th>{{ __('Email') }}</th>
                            {{-- <th>{{ __('Status') }}</th> --}}
                            <th>{{ __('Created Date') }}</th>
                            <th>{{ __('Updated Date') }}</th>
                            {{-- <th>{{ __('Created By') }}</th> --}}
                            <th>{{ __('Action') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($admins as $admin)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $admin->name }}</td>
                                <td>{{ $admin->email }}</td>
                                <td>{{ date('d M, Y', strtotime($admin->created_at)) }}</td>
                                <td>{{ $admin->created_at != $admin->updated_at ? date('d M, Y', strtotime($admin->updated_at)) : 'Null' }}</td>
                                <td class="text-center">
                                    <div class="btn-group">
                                        <a href="javascript:void(0)" class="btn btn-primary btn-rounded "
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="icon-options-vertical"></i>
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <li><a href="javascript:void(0)" data-id="{{ $admin->id }}"
                                                    class="dropdown-item view">{{ __('Details') }}</a></li>
                                            <li><a href="{{ route('am.admin.edit', $admin->id) }}"
                                                    class="dropdown-item">{{ __('Edit') }}</a>
                                            </li>
                                            {{-- <li><a href="{{ route('am.admin.status', $admin->id) }}"
                                                    class="dropdown-item">{{ $admin->getStatusBtnTitle() }}</a>
                                            </li> --}}
                                            <li>
                                                <a class="dropdown-item" href="javascript:void(0)"
                                                    onclick="document.getElementById('delete-form').submit();">
                                                    {{ __('Delete') }}
                                                </a>

                                                <form id="delete-form"
                                                    action="{{ route('am.admin.destroy', $admin->id) }}" method="POST"
                                                    class="d-none">
                                                    @csrf
                                                    @method('DELETE')
                                                </form>
                                            </li>
                                        </ul>
                                    </div>
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
