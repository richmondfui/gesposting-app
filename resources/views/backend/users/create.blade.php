@extends('layouts.app', ['pageTitle' => ' - Users'])

@section('content')

<div class="app-main">
    @include('layouts.includes.backend.sidebar', ['activePage' => 'users'])

    <div class="app-main__outer">
        <div class="app-main__inner">
            <div class="app-page-title">
                <div class="page-title-wrapper">
                    <div class="page-title-heading">
                        <div class="page-title-icon">
                            <i class="fas fa-users icon-gradient bg-mean-fruit">
                            </i>
                        </div>
                        <div>Users
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="main-card mb-3 card">
                        <div class="card-body">
                            <h5 class="card-title">Create User</h5>
                            <form method="POST" action="{{route('admin.users.store')}}" class="">
                                @csrf
                                <div class="position-relative row form-group"><label for="name"
                                        class="col-sm-2 col-form-label">User Name</label>
                                    <div class="col-sm-10"><input name="name" id="name" placeholder="Nii Amartey"
                                            type="text" class="form-control" required></div>
                                </div>
                                <div class="position-relative row form-group"><label for=""
                                        class="col-sm-2 col-form-label">Email</label>
                                    <div class="col-sm-10"><input name="email" id="" placeholder="admin@admin.com"
                                            type="email" class="form-control" required></div>
                                </div>
                                <div class="position-relative row form-group"><label for=""
                                        class="col-sm-2 col-form-label">Roles</label>
                                    <div class="col-sm-10">
                                        @foreach ($roles as $role)
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" name="role_id[]" type="checkbox"
                                                value="{{$role->id}}">
                                            <label class="form-check-label"
                                                for="inlineCheckbox1">{{$role->name}}</label>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="position-relative row form-group">

                                    <label for="" class="col-sm-2 col-form-label">District</label>
                                    <div class="col-sm-10">
                                        <select name="district_id" class="form-control" id="">
                                            <option value="">Choose District</option>
                                            @foreach ($regions as $region)
                                            <optgroup label="{{$region->name. __(' Region')}}">
                                                @foreach ($region->districts as $district)
                                                <option value="{{ $district->id }}">{{ $district->name }}</option>
                                                @endforeach
                                            </optgroup>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="position-relative row form-group"><label for=""
                                        class="col-sm-2 col-form-label">Password</label>
                                    <div class="col-sm-10"><input type="password" name="password" class="form-control"
                                            id=""></div>
                                </div>
                                <div class="position-relative row form-group"><label for=""
                                        class="col-sm-2 col-form-label">Confirm Password</label>
                                    <div class="col-sm-10"><input type="password" name="password_confirmation"
                                            class="form-control" id=""></div>
                                </div>
                                <div class="position-relative row form-check">
                                    <div class="col-sm-10 offset-sm-2">
                                        <button class="btn btn-primary" type="submit">Save</button>
                                    </div>
                                </div>
                            </form>
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
