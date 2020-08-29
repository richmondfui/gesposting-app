@extends('layouts.app', ['pageTitle' => ' - Regional Dashboard'])

@section('content')

<div class="app-main">
    @include('layouts.includes.backend.sidebar', ['activePage' => 'dashboard'])

    <div class="app-main__outer">
        <div class="app-main__inner">
            <div class="app-page-title">
                <div class="page-title-wrapper">
                    <div class="page-title-heading">
                        <div class="page-title-icon">
                            <i class="fas fa-tachometer-alt icon-gradient bg-mean-fruit">
                            </i>
                        </div>
                        <div>Dashboard
                            <div class="page-title-subheading">Welcome to your Dashboard
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-xl-3">
                    <div class="card mb-3 widget-content bg-midnight-bloom">
                        <div class="widget-content-wrapper text-white">
                            <div class="widget-content-left">
                                <div class="widget-heading">Total Districts</div>
                                <div class="widget-subheading">All districts in the region</div>
                            </div>
                            <div class="widget-content-right">
                                <div class="widget-numbers text-white"><span>{{$districts->count()}}</span></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="card mb-3 widget-content bg-arielle-smile">
                        <div class="widget-content-wrapper text-white">
                            <div class="widget-content-left">
                                <div class="widget-heading">Total Schools</div>
                                <div class="widget-subheading">All schools in the region</div>
                            </div>
                            <div class="widget-content-right">
                                <div class="widget-numbers text-white"><span>{{$schools->count()}}</span></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="card mb-3 widget-content bg-grow-early">
                        <div class="widget-content-wrapper text-white">
                            <div class="widget-content-left">
                                <div class="widget-heading">Total Teachers</div>
                                <div class="widget-subheading">All teachers in the region</div>
                            </div>
                            <div class="widget-content-right">
                                <div class="widget-numbers text-white"><span>{{ $teachers->count() }}</span></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="card mb-3 widget-content bg-grow-early">
                        <div class="widget-content-wrapper text-white">
                            <div class="widget-content-left">
                                <div class="widget-heading">Total Applicants</div>
                                <div class="widget-subheading">All posting applicants</div>
                            </div>
                            <div class="widget-content-right">
                                <div class="widget-numbers text-white"><span>{{$applicants->count()}}</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="main-card mb-3 card">
                        <div class="card-header">Table Overview
                            <div class="btn-actions-pane-right">
                                <ul class="tabs-animated-shadow tabs-animated nav mt-3">
                                    <li class="nav-item">
                                        <a role="tab" class="nav-link active show" id="tab-c-0" data-toggle="tab"
                                            href="#tabDistricts" aria-selected="true">
                                            <span>Districts</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a role="tab" class="nav-link show" id="tab-c-1" data-toggle="tab"
                                            href="#tabSchools" aria-selected="false">
                                            <span>Schools</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a role="tab" class="nav-link show" id="tab-c-1" data-toggle="tab"
                                            href="#tabTeachers" aria-selected="false">
                                            <span>Teachers</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="tab-content">
                                <div class="tab-pane active show" id="tabDistricts" role="tabpanel">
                                    <div class="table-responsive">
                                        <table
                                            class="align-middle mb-0 table table-borderless table-striped table-hover">
                                            <thead>
                                                <tr>
                                                    <th class="text-center">#</th>
                                                    <th>Name</th>
                                                    <th class="text-center"># of Schools</th>
                                                    <th class="text-center"># of Teachers</th>
                                                    <th class="text-center">Location</th>
                                                    {{-- <th class="text-center">Actions</th> --}}
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($districts as $district)
                                                <tr>
                                                    <td class="text-center text-muted">{{$district->id}}</td>
                                                    <td>{{$district->name}}</td>
                                                    <td class="text-center">{{$district->schools()->count()}}</td>
                                                    <td class="text-center">{{$district->teachers()->count()}}</td>
                                                    <td class="text-center">{{$district->location}}</td>
                                                    {{-- <td class="text-center">
                                                        <form
                                                            action="{{ route('admin.districts.destroy', $district->id) }}"
                                                            method="post">
                                                            @csrf
                                                            @method('delete')

                                                            <a href="{{route('admin.districts.edit', $district->id)}}"
                                                                type="button" id="PopoverCustomT-1"
                                                                class="btn btn-danger btn-sm">Edit</a>

                                                            <button type="button" id="PopoverCustomT-1"
                                                                class="btn btn-primary btn-sm"
                                                                onclick="confirm('{{ __("Are you sure you want to delete this district?") }}') ? this.parentElement.submit() : ''">Delete</button>
                                                        </form>
                                                    </td> --}}
                                                </tr>
                                                @endforeach

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="tab-pane show" id="tabSchools" role="tabpanel">
                                    <div class="table-responsive">
                                        <table id="schoolsTable"
                                            class="align-middle mb-0 table table-borderless table-striped table-hover">
                                            <thead>
                                                <tr>
                                                    <th class="text-center">#</th>
                                                    <th>Name</th>
                                                    <th>District</th>
                                                    <th class="text-center"># of Teachers</th>
                                                    <th class="text-center">Location</th>
                                                    {{-- <th class="text-center">Actions</th> --}}
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($schools as $school)
                                                <tr>
                                                    <td class="text-center text-muted">{{$school->id}}</td>
                                                    <td>{{$school->name}}</td>
                                                    <td>{{$school->district->name}}</td>
                                                    <td class="text-center">{{$school->teachers()->count()}}</td>
                                                    <td class="text-center">{{$school->location}}</td>
                                                    {{-- <td class="text-center">
                                                        <form
                                                            action="{{ route('admin.district.schools.destroy', $school->id) }}"
                                                            method="post">
                                                            @csrf
                                                            @method('delete')

                                                            <a href="{{route('admin.district.schools.edit', $school->id)}}"
                                                                type="button" id="PopoverCustomT-1"
                                                                class="btn btn-success btn-sm">Manage</a>

                                                            <button type="button" id="PopoverCustomT-1"
                                                                class="btn btn-primary btn-sm"
                                                                onclick="confirm('{{ __("Are you sure you want to delete this school?") }}') ? this.parentElement.submit() : ''">Delete</button>
                                                        </form>
                                                    </td> --}}
                                                </tr>
                                                @endforeach

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="tab-pane show" id="tabTeachers" role="tabpanel">
                                    <div class="table-responsive">
                                        <div class="table-responsive">
                                            <table id="teachersTable"
                                                class="align-middle mb-0 table table-borderless table-striped table-hover">
                                                <thead>
                                                    <tr>
                                                        <th class="text-center">#</th>
                                                        <th>Staff ID</th>
                                                        <th>Name</th>
                                                        <th class="text-center">School</th>
                                                        <th class="text-center">District</th>
                                                        <th class="text-center">Subject</th>
                                                        {{-- <th class="text-center">Actions</th> --}}
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($teachers as $teacher)
                                                    <tr>
                                                        <td class="text-center text-muted">{{$teacher->id}}</td>
                                                        <td class="">{{$teacher->staff_id}}</td>
                                                        <td>{{$teacher->title.' '.$teacher->firstname.' '.$teacher->lastname}}
                                                        </td>
                                                        <td class="text-center">{{$teacher->school->name ?? ''}}</td>
                                                        <td class="text-center">{{$teacher->district->name ?? ''}}</td>
                                                        <td class="text-center"></td>
                                                        {{-- <td class="text-center">
                                                            <form
                                                                action="{{ route('admin.district.teachers.destroy', $teacher->id) }}"
                                                                method="post">
                                                                @csrf
                                                                @method('delete')

                                                                <a href="{{route('admin.posting.teachers.edit', $teacher->id)}}"
                                                                type="button"
                                                                id="PopoverCustomT-1" class="btn btn-danger
                                                                btn-sm">Edit</a>

                                                                <button type="button" id="PopoverCustomT-1"
                                                                    class="btn btn-primary btn-sm"
                                                                    onclick="confirm('{{ __("Are you sure you want to delete this teacher?") }}') ? this.parentElement.submit() : ''">Delete</button>
                                                            </form>
                                                        </td> --}}
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
@push('js')
<script>
    $(function () {
      $('#schoolsTable').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": true,
        "ordering": true,
        "info": true,
        "autoWidth": false
      });

      $('#teachersTable').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": true,
        "ordering": true,
        "info": true,
        "autoWidth": false
      });
    });
  </script>
@endpush
