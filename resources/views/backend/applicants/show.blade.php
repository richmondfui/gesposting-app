@extends('layouts.app', ['pageTitle' => ' - Applicants'])

@section('content')

<div class="app-main">
    @include('layouts.includes.backend.sidebar', ['activePage' => 'v-applicants'])

    <div class="app-main__outer">
        <div class="app-main__inner">
            <div class="app-page-title">
                <div class="page-title-wrapper">
                    <div class="page-title-heading">
                        <div class="page-title-icon">
                            <i class="fas fa-users icon-gradient bg-mean-fruit">
                            </i>
                        </div>
                        <div>Applicant Information
                        </div>
                    </div>
                    {{-- <div class="page-title-actions">
                        <div class="d-inline-block dropdown">
                            <div class="font-icon-wrapper font-icon-md">
                                <a href="{{route('admin.applicant.applicants.create')}}">
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
            <div class="card-header mb-2">Applicant Information
            </div>
            <div class="card-body">
                <div class="row justify-content-center">
                    <div class="col-sm-6">
                        <div class="row mb-4">
                            <div class="col-4"> <b>Name:</b> </div>
                            <div class="col-7">
                                {{$applicant->title.' '.$applicant->lastname.' '.$applicant->firstname.' '.$applicant->othername}}
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col-4"> <b>Gender:</b> </div>
                            <div class="col-7">{{ $applicant->gender }}</div>
                        </div>
                        <div class="row mb-4">
                            <div class="col-4"> <b>Date of Birth:</b></div>
                            <div class="col-7">{{ $applicant->dob }}</div>
                        </div>
                        <div class="row mb-4">
                            <div class="col-4"> <b>Marital Status:</b> </div>
                            <div class="col-7">{{ $applicant->marital_status }}</div>
                        </div>
                        <div class="row mb-4">
                            <div class="col-4"> <b>Mobile/Tel:</b> </div>
                            <div class="col-7">{{ $applicant->mobile_number }}</div>
                        </div>
                        <div class="row mb-4">
                            <div class="col-4"> <b>Email:</b> </div>
                            <div class="col-7">{{ $applicant->email }}</div>
                        </div>
                        <div class="row mb-4">
                            <div class="col-4"> <b>Residential Address:</b> </div>
                            <div class="col-7">{{ $applicant->residential_address }}</div>
                        </div>

                    </div>
                    <div class="col-sm-6">
                        <div class="row mb-4">
                            <div class="col-4"> <b>College Attended:</b> </div>
                            <div class="col-7">{{$applicant->college_attended ?? ''}}</div>
                        </div>
                        <div class="row mb-4">
                            <div class="col-4"> <b>Began:</b> </div>
                            <div class="col-7">{{ $applicant->college_from }}</div>
                        </div>
                        <div class="row mb-4">
                            <div class="col-4"> <b>Completed:</b></div>
                            <div class="col-7">{{ $applicant->college_to }}</div>
                        </div>
                        <div class="row mb-4">
                            <div class="col-4"> <b>Staff ID:</b> </div>
                            <div class="col-7">{{ $applicant->staff_id }}</div>
                        </div>
                        <div class="row mb-4">
                            <div class="col-4"> <b>Registered No.:</b> </div>
                            <div class="col-7">{{ $applicant->registered_number }}</div>
                        </div>
                        <div class="row mb-4">
                            <div class="col-4"> <b>SSF:</b> </div>
                            <div class="col-7">{{ $applicant->ssnit_number }}</div>
                        </div>
                        <div class="row mb-4">
                            <div class="col-4"> <b>Languages spoken:</b> </div>
                            <div class="col-7">
                                {{ $applicant->ghanaian_lang_1.', '.
                                    $applicant->ghanaian_lang_2.', '.
                                    $applicant->ghanaian_lang_3 }}
                            </div>
                        </div>

                    </div>

                    <!-- /.col -->
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
        $('#applicantTable').DataTable({
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
