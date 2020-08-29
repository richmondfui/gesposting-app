@extends('layouts.app', ['pageTitle' => ' - Roles'])

@section('content')

<div class="app-main">
    @include('layouts.includes.backend.sidebar', ['activePage' => 'roles'])

    <div class="app-main__outer">
        <div class="app-main__inner">
            <div class="app-page-title">
                <div class="page-title-wrapper">
                    <div class="page-title-heading">
                        <div class="page-title-icon">
                            <i class="fas fa-lock icon-gradient bg-mean-fruit">
                            </i>
                        </div>
                        <div>Roles
                        </div>
                    </div>
                    <div class="page-title-actions">
                        <div class="d-inline-block dropdown">
                            <div class="font-icon-wrapper font-icon-md">
                                <a href="{{route('admin.roles.create')}}">
                                    <i class="fas fa-plus-circle icon-gradient bg-warm-flame"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Status Message --}}
            <div class="row justify-content-center">
                <div class="col-md-12 text-center">
                   @if (session('status'))
                   <div class="alert alert-success alert-dismissible bg-success text-white">
                    <button type="button" class="close" aria-label="Close"><span data-dismiss="alert" aria-hidden="true">×</span></button>
                    {{ session('status') }}
                    </div>
                   @endif
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-12">
                    <div class="main-card mb-3 card">
                        <div class="card-header">Roles
                        </div>
                        <div class="table-responsive">
                            <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th class="text-center">#</th>
                                        <th>Name</th>
                                        <th class="text-center">Permissions</th>
                                        <th class="text-center">Description</th>
                                        <th class="text-center">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($roles as $role)
                                    <tr>
                                        <td class="text-center text-muted">{{$role->id}}</td>
                                        <td>{{$role->name}}</td>
                                        <td class="text-center">{{implode(',' ,$role->permissions->pluck('name')->toArray())}}</td>
                                        <td class="text-center">{{$role->description}}</td>
                                        <td class="text-center">
                                            <form action="{{ route('admin.roles.destroy', $role->id) }}"
                                                method="post">
                                                @csrf
                                                @method('delete')

                                            <a href="{{route('admin.roles.edit', $role->id)}}" type="button"
                                                id="PopoverCustomT-1" class="btn btn-danger btn-sm">Edit</a>

                                                <button type="button" id="PopoverCustomT-1"
                                                    class="btn btn-primary btn-sm"
                                                    onclick="confirm('{{ __("Are you sure you want to delete this role?") }}') ? this.parentElement.submit() : ''">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="app-wrapper-footer">
            <div class="app-footer">
                <div class="app-footer__inner">
                    <div class="app-footer-left">
                        <ul class="nav">
                            <li class="nav-item">
                                <a href="javascript:void(0);" class="nav-link">
                                    Footer Link 1
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="javascript:void(0);" class="nav-link">
                                    Footer Link 2
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="app-footer-right">
                        <ul class="nav">
                            <li class="nav-item">
                                <a href="javascript:void(0);" class="nav-link">
                                    Footer Link 3
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="javascript:void(0);" class="nav-link">
                                    <div class="badge badge-success mr-1 ml-0">
                                        <small>NEW</small>
                                    </div>
                                    Footer Link 4
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
