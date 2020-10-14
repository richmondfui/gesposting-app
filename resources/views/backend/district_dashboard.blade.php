@extends('layouts.app', ['pageTitle' => ' - District Dashboad'])

@section('content')

<div class="app-main">
    @include('layouts.includes.backend.sidebar', ['activePage' => 'd-dashboard'])

    <div class="app-main__outer">
        <div class="app-main__inner">
            <div class="app-page-title">
                <div class="page-title-wrapper">
                    <div class="page-title-heading">
                        <div class="page-title-icon">
                            <i class="fas fa-tachometer-alt icon-gradient bg-mean-fruit"></i>
                        </div>
                        <div>Dashboard
                            <div class="page-title-subheading">Welcome to your Dashboard
                            </div>
                        </div>
                    </div>
                    {{-- <div class="page-title-actions">
                        <div class="d-inline-block dropdown">
                            <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                class="btn-shadow dropdown-toggle btn btn-info">
                                <span class="btn-icon-wrapper pr-2 opacity-7">
                                    <i class="fa fa-business-time fa-w-20"></i>
                                </span>
                                Buttons
                            </button>
                            <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a href="javascript:void(0);" class="nav-link">
                                            <i class="nav-link-icon lnr-inbox"></i>
                                            <span>
                                                Inbox
                                            </span>
                                            <div class="ml-auto badge badge-pill badge-secondary">86</div>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="javascript:void(0);" class="nav-link">
                                            <i class="nav-link-icon lnr-book"></i>
                                            <span>
                                                Book
                                            </span>
                                            <div class="ml-auto badge badge-pill badge-danger">5</div>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="javascript:void(0);" class="nav-link">
                                            <i class="nav-link-icon lnr-picture"></i>
                                            <span>
                                                Picture
                                            </span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a disabled href="javascript:void(0);" class="nav-link disabled">
                                            <i class="nav-link-icon lnr-file-empty"></i>
                                            <span>
                                                File Disabled
                                            </span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
            <div class="row">

                <div class="col-md-6 col-xl-6">
                    <div class="card mb-3 widget-content bg-arielle-smile">
                        <div class="widget-content-wrapper text-white">
                            <div class="widget-content-left">
                                <div class="widget-heading">Total Schools</div>
                                <div class="widget-subheading">All schools in the district</div>
                            </div>
                            <div class="widget-content-right">
                                <div class="widget-numbers text-white"><span>{{$schools->count()}}</span></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-6">
                    <div class="card mb-3 widget-content bg-grow-early">
                        <div class="widget-content-wrapper text-white">
                            <div class="widget-content-left">
                                <div class="widget-heading">Total Teachers</div>
                                <div class="widget-subheading">All teachers in the district</div>
                            </div>
                            <div class="widget-content-right">
                                <div class="widget-numbers text-white"><span>{{ $teachers->count() }}</span></div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="main-card mb-3 card">
                        <div class="card-header">Tabbed Overview
                            <div class="btn-actions-pane-right">
                                <ul class="tabs-animated-shadow tabs-animated nav mt-3">
                                    <li class="nav-item">
                                        <a role="tab" class="nav-link active show" id="tab-c-0" data-toggle="tab"
                                            href="#tab-teachers" aria-selected="true">
                                            <span>Teachers</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a role="tab" class="nav-link show" id="tab-c-1" data-toggle="tab"
                                            href="#tab-schools" aria-selected="false">
                                            <span>Schools</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="tab-content">
                                <div class="tab-pane active show" id="tab-teachers" role="tabpanel">
                                    <div class="table-responsive">
                                        <table id="teacherTable" class="align-middle mb-0 table table-borderless table-striped table-hover">
                                            <thead>
                                                <tr>
                                                    <th class="text-center">#</th>
                                                    <th>Staff ID</th>
                                                    <th>Name</th>
                                                    <th class="text-center">School</th>
                                                    <th class="text-center">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($teachers as $teacher)
                                                <tr>
                                                    <td class="text-center text-muted">{{$teacher->id}}</td>
                                                    <td class="">{{$teacher->staff_id}}</td>
                                                    <td>{{$teacher->title.' '.$teacher->firstname.' '.$teacher->lastname}}</td>
                                                    <td class="text-center">{{$teacher->school->name ?? ''}}</td>
                                                    <td class="text-center">
                                                        <a href="{{route('admin.district.teachers.show', $teacher->id)}}" type="button"
                                                            id="PopoverCustomT-1" class="btn btn-primary btn-sm">View</a>
                                                    </td>
                                                </tr>
                                                @endforeach

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="tab-pane show" id="tab-schools" role="tabpanel">
                                    <div class="table-responsive">
                                        <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                                            <thead>
                                                <tr>
                                                    <th class="text-center">#</th>
                                                    <th>Name</th>
                                                    <th>Headteacher</th>
                                                    <th>District</th>
                                                    <th class="text-center"># of Teachers</th>
                                                    <th class="text-center">Location</th>
                                                    <th class="text-center">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($schools as $school)
                                                <tr>
                                                    <td class="text-center text-muted">{{$school->id}}</td>
                                                    <td>{{$school->name}}</td>
                                                    <td>{{$school->headteacher}}</td>
                                                    <td>{{$school->district->name}}</td>
                                                    <td class="text-center">{{$school->teachers()->count()}}</td>
                                                    <td class="text-center">{{$school->location}}</td>
                                                    <td class="text-center">
                                                        <a href="{{route('admin.district.schools.edit', $school->id)}}"
                                                            type="button" id="PopoverCustomT-1"
                                                            class="btn btn-success btn-sm">Manage</a>
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
