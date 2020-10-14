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
                        <div class="card-body">
                            <h5 class="card-title">Create District</h5>
                            <form method="POST" action="{{route('admin.districts.store')}}" class="">
                                @csrf
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="position-relative form-group">
                                            <label for="districtName" class="col-form-label">District Name</label>
                                            <input name="name" id="districtName" placeholder="Gomoa District"
                                                type="text" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="position-relative form-group"><label for="schoolDistID"
                                                class="col-form-label">Region</label>
                                                <select name="region_id" id="schoolDistID" class="form-control">
                                                    @foreach ($regions as $region)
                                                        <option value="{{$region->id}}">{{ $region->name.' Region' }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="position-relative form-group"><label for="districtLocation"
                                                class="col-form-label">Location</label>
                                            <input name="location" id="districtLocation"
                                                    placeholder="Gomoa" type="text" class="form-control" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="position-relative form-group">
                                            <label for="districtEmail" class="col-form-label">District Email</label>
                                            <input name="email" id="districtEmail" placeholder="gomoages@live.com"
                                                type="email" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="position-relative form-group"><label for="districtPhone"
                                                class="col-form-label">District Phone</label>
                                                <input name="phone" id="districtPhone" placeholder="030 626 2212"
                                                type="text" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="position-relative form-group"><label for="districtRef"
                                                class="col-form-label">District Ref</label>
                                            <input name="ref" id="districtRef"
                                                    placeholder="DEO/GD/PF" type="text" class="form-control" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="position-relative form-group"><label for="districtDirector"
                                            class="col-form-label">Name of Director</label>
                                        <input name="director" id="districtDirector"
                                                placeholder="Director of education" type="text" class="form-control"
                                                required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="position-relative form-group"><label for="distAddress"
                                            class="col-form-label">District Address</label>
                                       <textarea name="address" id="distAddress"
                                                class="form-control"></textarea>
                                    </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="position-relative form-group"><label for="districtDesc"
                                            class="col-form-label">Description</label>
                                       <textarea name="description" id="districtDesc"
                                                class="form-control"></textarea>
                                    </div>
                                    </div>
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
