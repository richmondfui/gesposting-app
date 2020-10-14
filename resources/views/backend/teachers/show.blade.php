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
                        <div>Teacher Information
                        </div>
                    </div>
                    {{-- <div class="page-title-actions">
                        <div class="d-inline-block dropdown">
                            <div class="font-icon-wrapper font-icon-md">
                                <a href="{{route('admin.teacher.teachers.create')}}">
                    <i class="fas fa-plus-circle icon-gradient bg-warm-flame"></i>
                    </a>
                </div>
            </div>
        </div> --}}
    </div>
</div>

{{-- Status Message --}}
<div class="row justify-content-center">
    <div class="col-md-12 text-center">
        @if (session('status'))
        <div class="alert alert-success alert-dismissible bg-success text-white">
            <button type="button" class="close" aria-label="Close"><span data-dismiss="alert"
                    aria-hidden="true">×</span></button>
            {{ session('status') }}
        </div>
        @endif
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="main-card card mb-3">
            <div class="card-header mb-2">Teacher Information
            </div>
            <div class="card-body">
                <div class="row justify-content-center">
                    <div class="col-sm-6">
                        <div class="row mb-2">
                            <div class="col-4"> <b>Name:</b> </div>
                            <div class="col-7">
                                {{$teacher->title.' '.$teacher->lastname.' '.$teacher->firstname.' '.$teacher->othername}}
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-4"> <b>Gender:</b> </div>
                            <div class="col-7">{{ $teacher->gender }}</div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-4"> <b>Date of Birth:</b></div>
                            <div class="col-7">{{ $teacher->dob }}</div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-4"> <b>Marital Status:</b> </div>
                            <div class="col-7">{{ $teacher->marital_status }}</div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-4"> <b>Mobile/Tel:</b> </div>
                            <div class="col-7">{{ $teacher->mobile_number }}</div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-4"> <b>Email:</b> </div>
                            <div class="col-7">{{ $teacher->email }}</div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-4"> <b>Residential Address:</b> </div>
                            <div class="col-7">{{ $teacher->residential_address }}</div>
                        </div>

                    </div>
                    <div class="col-sm-6">
                        <div class="row mb-2">
                            <div class="col-4"> <b>District:</b> </div>
                            <div class="col-7">{{$teacher->district->name ?? ''}}</div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-4"> <b>School:</b> </div>
                            <div class="col-7">{{ $teacher->school->name ?? ''}}</div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-4"> <b>Subject:</b></div>
                            <div class="col-7"></div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-4"> <b>Staff ID:</b> </div>
                            <div class="col-7">{{ $teacher->staff_id }}</div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-4"> <b>Registered No.:</b> </div>
                            <div class="col-7">{{ $teacher->registered_number }}</div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-4"> <b>SSF:</b> </div>
                            <div class="col-7">{{ $teacher->ssnit_number }}</div>
                        </div>

                    </div>

                    <!-- /.col -->
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="main-card card mb-3">
            <div class="card-header mb-2">Files
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="teacherTable" class="align-middle mb-0 table table-borderless table-striped table-hover">
                        <thead>
                            <tr>
                                <th class="text-center">#</th>
                                <th>File Name</th>
                                <th class="text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if($teacher->school)
                            <tr>
                                <td class="text-center text-muted">1</td>
                                <td class="">Appointment letter</td>
                                <td class="text-center">

                                    <a href="{{route('admin.district.teachers.appointment_letter', $teacher->id)}}" id="" class="btn btn-primary btn-sm"
                                        onclick="">View</a>
                                        @if ($teacher->staff_id === auth()->user()->staff_id)
                                            <button type="button" id="" class="btn btn-primary btn-sm"onclick="">Download</button>
                                        @endif

                                </td>
                            </tr>
                            @endif

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
            <div class="app-footer-right">
                <ul class="nav">
                    <li class="nav-item">
                        <a href="javascript:void(0);" class="nav-link">
                            About
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="javascript:void(0);" class="nav-link">
                            Contact
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
