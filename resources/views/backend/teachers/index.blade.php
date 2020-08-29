@extends('layouts.app', ['pageTitle' => ' - Teachers'])

@section('content')

<div class="app-main">
    @include('layouts.includes.backend.sidebar', ['activePage' => 'teachers'])

    <div class="app-main__outer">
        <div class="app-main__inner">
            <div class="app-page-title">
                <div class="page-title-wrapper">
                    <div class="page-title-heading">
                        <div class="page-title-icon">
                            <i class="fas fa-users icon-gradient bg-mean-fruit">
                            </i>
                        </div>
                        <div>Teachers
                        </div>
                    </div>
                    {{-- <div class="page-title-actions">
                        <div class="d-inline-block dropdown">
                            <div class="font-icon-wrapper font-icon-md">
                                <a href="{{route('admin.district.teachers.create')}}">
                                    <i class="fas fa-plus-circle icon-gradient bg-warm-flame"></i>
                                </a>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-xl-6">
                    <div class="card mb-3 widget-content bg-midnight-bloom">
                        <div class="widget-content-wrapper text-white">
                            <div class="widget-content-left">
                                <div class="widget-heading">Active Teachers</div>
                                <div class="widget-subheading">All teachers with schools</div>
                            </div>
                            <div class="widget-content-right">
                                <div class="widget-numbers text-white"><span>{{$actTeachers->count()}}</span></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-6">
                    <div class="card mb-3 widget-content bg-grow-early">
                        <div class="widget-content-wrapper text-white">
                            <div class="widget-content-left">
                                <div class="widget-heading">Inactive Teachers</div>
                                <div class="widget-subheading">Teachers without schools</div>
                            </div>
                            <div class="widget-content-right">
                                <div class="widget-numbers text-white"><span>{{$inactTeachers->count()}}</span></div>
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
                        <div class="card-header mb-2">Teachers
                        </div>
                      <div class="card-body">
                        <div class="table-responsive">
                            <table id="teacherTable" class="align-middle mb-0 table table-borderless table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th class="text-center">#</th>
                                        <th>Staff ID</th>
                                        <th>Name</th>
                                        <th class="text-center">School</th>
                                        <th class="text-center">Subject</th>
                                        <th class="text-center">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($teachers as $teacher)
                                    <tr>
                                        <td class="text-center text-muted">{{$teacher->id}}</td>
                                        <td class="">{{$teacher->staff_id}}</td>
                                        <td>{{$teacher->title.' '.$teacher->firstname.' '.$teacher->lastname}}</td>
                                        <td class="text-center">{{$teacher->school->name ?? ''}}</td>
                                        <td class="text-center"></td>
                                        <td class="text-center">
                                            <form action="{{ route('admin.district.teachers.destroy', $teacher->id) }}"
                                                method="post">
                                                @csrf
                                                @method('delete')

                                            <a href="{{route('admin.district.teachers.show', $teacher->id)}}" type="button"
                                                id="PopoverCustomT-1" class="btn btn-danger btn-sm">View</a>

                                                <button type="button" id="PopoverCustomT-1"
                                                    class="btn btn-primary btn-sm"
                                                    onclick="confirm('{{ __("Are you sure you want to delete this teacher?") }}') ? this.parentElement.submit() : ''">Delete</button>
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
      $('#teacherTable').DataTable({
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
