@extends('layouts.app', ['pageTitle' => ' - Districts'])

@section('content')

<div class="app-main">
    @include('layouts.includes.backend.sidebar', ['activePage' => 'districts'])

            <div class="app-main__outer">
                <div class="app-main__inner">
                    <div class="app-page-title">
                        <div class="page-title-wrapper">
                            <div class="page-title-heading">
                                <div class="page-title-icon">
                                    <i class="pe-7s-car icon-gradient bg-mean-fruit">
                                    </i>
                                </div>
                                <div>Districts
                                </div>
                            </div>
                        </div>
                    </div>
               
                    <div class="row">
                        <div class="col-md-12">
                         <div class="main-card mb-3 card">
                              <div class="card-body"><h5 class="card-title">Update District</h5>
                                  <form method="POST" action="{{route('admin.districts.update', $district)}}" class="needs-validation" novalidate>
                                   @csrf
                                   @method('put')
                                      <div class="position-relative row form-group"><label for="districtName" class="col-sm-2 col-form-label">District Name</label>
                                          <div class="col-sm-10"><input name="name" value="{{old('name',$district->name)}}" id="districtName" placeholder="Gomoa District" type="text" class="form-control" required></div>
                                      </div>
                                      <div class="position-relative row form-group"><label for="schoolDistID" class="col-sm-2 col-form-label">District</label>
                                        <div class="col-sm-10">
                                            <select name="region_id" id="schoolDistID" class="form-control">
                                                @foreach ($regions as $region)
                                                  <option value="{{$region->id}}" {{($region->id == $district->region_id) ? 'selected' : ''}}>{{ $region->name.' Region' }}</option>
                                                @endforeach
                                            </select>
                                          </div>
                                    </div>
                                      <div class="position-relative row form-group"><label for="districtLocation" class="col-sm-2 col-form-label">Location</label>
                                          <div class="col-sm-10"><input name="location"  value="{{old('location',$district->location)}}" id="districtLocation" placeholder="" type="text" class="form-control" required></div>
                                      </div>
                                      <div class="position-relative row form-group"><label for="districtDesc" class="col-sm-2 col-form-label">Description</label>
                                          <div class="col-sm-10"><textarea name="description" id="districtDesc" class="form-control">{{$district->description}}</textarea></div>
                                      </div>
                                      <div class="position-relative row form-check">
                                          <div class="col-sm-10 offset-sm-2">
                                              <button class="btn btn-primary" type="submit">Update</button>
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
