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
                                    <i class="pe-7s-car icon-gradient bg-mean-fruit">
                                    </i>
                                </div>
                                <div>Roles
                                </div>
                            </div>
                        </div>
                    </div>
               
                    <div class="row">
                        <div class="col-md-12">
                         <div class="main-card mb-3 card">
                              <div class="card-body"><h5 class="card-title">Create Role</h5>
                                  <form method="POST" action="{{route('admin.roles.store')}}" class="">
                                   @csrf
                                   @method('post')
                                   
                                      <div class="position-relative row form-group"><label for="roleName" class="col-sm-2 col-form-label">Role Name</label>
                                          <div class="col-sm-10"><input name="name" id="roleName" placeholder="Role name" type="text" class="form-control" required></div>
                                      </div>
                                      <div class="position-relative row form-group"><label for="" class="col-sm-2 col-form-label">Permissions</label>
                                        <div class="col-sm-10">
                                          @foreach ($permissions as $permission)
                                              <div class="form-check form-check-inline">
                                                  <input class="form-check-input" name="permission_id[]" type="checkbox" value="{{$permission->id}}">
                                                  <label class="form-check-label" for="inlineCheckbox1">{{$permission->name}}</label>
                                              </div>
                                          @endforeach
                                        </div>
                                    </div>
                                      <div class="position-relative row form-group"><label for="roleDesc" class="col-sm-2 col-form-label">Description</label>
                                          <div class="col-sm-10"><textarea name="description" id="roleDesc" class="form-control"></textarea></div>
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
