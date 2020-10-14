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
                        <div>Appointment Letter
                        </div>
                    </div>

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
                <!-- Appointment letter view page -->
                <div class="col-xl-9 col-md-8 col-12">
                    <div class="card letter-print-area">
                        <div class="card-content">
                            <div class="card-body">
                                <!-- header section -->
                                <div class="row p-0 m-0">
                                    <div class="col-12 text-center">
                                        <h3><b>GHANA EDUCATION SERVICE</b></h3>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-4">
                                        <div>
                                            <blockquote>
                                                <i> In case of reply, the Number and date of this letter should be
                                                    quoted <br><br>
                                                    email: {{$appointmentLetter->district_email ?? ''}} <br>
                                                    phone No: {{$appointmentLetter->district_phone ?? ''}}</i>
                                            </blockquote>

                                            <p>My Ref: {{$appointmentLetter->district_ref ?? 'REF'}}................</p>
                                        </div>
                                    </div>
                                    <div class="col-4 justify-content-center text-center">
                                        <div>
                                            <img width="160px" src="{{asset('images')}}/footer_logo.png" alt="Coat-of-Arms"
                                            class="img-fluid">
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div>
                                            <blockquote>
                                                {{$appointmentLetter->district_address?? 'ADDRESS'}}
                                            </blockquote>
                                            <p>{{$appointmentLetter->date_posted ?? 'DATE'}}</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="row offset-2 mb-2">
                                    <div class="col-10 text-center">
                                        <h5> <b><u>{{$appointmentLetter->letter_head?? 'LETTER TITLE'}}</u></b>
                                        </h5>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-12 px-3">
                                       <p>
                                        {!! $appointmentLetter->letter_body ?? 'LETTER BODY' !!}
                                       </p>
                                    </div>
                                </div>

                                <div class="row mt-2">
                                    <div class="col-6">
                                        <div class="">
                                            <p>Name: {{strtoupper($teacher->lastname.' '.$teacher->firstname.' '.$teacher->othername)}}</p>
                                            <p>Please acknowledge receipt</p>

                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="d-flex justify-content-end">
                                            <p>Staff ID Number: {{$teacher->staff_id ?? ''}}</p>

                                        </div>
                                    </div>
                                </div>

                            </div>


                            <div class="card-body pt-0 mx-25">
                                <div class="row justify-content-end">
                                    <div class="col-8 col-sm-6 d-flex justify-content-end">

                                        <div class="">
                                            <hr style="border-style: dashed">
                                            <p>
                                                {{strtoupper($appointmentLetter->district_director ?? '')}} <br>
                                                DISTRICT DIRECTOR OF EDUCATION <br>
                                                {{strtoupper($teacher->district->location) ?? ''}}
                                            </p>

                                        </div>

                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-8 col-sm-6 d-flex justify-content-start mt-75">
                                        <div class="">
                                            <div class="d-flex justify-content-between">
                                                <address>
                                                    {{strtoupper($teacher->title.' '.$teacher->lastname.' '.$teacher->firstname.' '.$teacher->othername)}} <br>
                                                    {{strtoupper($teacher->college_attended?? '')}} <br>
                                                    {{strtoupper($teacher->college_location) ?? ''}} <br><br>

                                                    THRO' <br>
                                                    THE PRINCIPAL <br>
                                                    {{strtoupper($teacher->college_attended ?? '')}}
                                                </address>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="row justify-content-end">
                                    <div class="col-8 col-sm-6 d-flex justify-content-end mt-75">
                                        <div class="">
                                            <div class="d-flex justify-content-between">
                                                <span class="title pr-2">Cc: </span>
                                                <span class="value text-right">The Headmaster/Headteacher, <br>
                                                    {{$teacher->school->name ?? ''}}</span>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-md-4 col-12">
                    <div class="card letter-action-wrapper shadow-none border">
                        <div class="card-body">
                            <div class="pb-2">
                                {{-- <a href="{{route('admin.district.teachers.appointment_letter.download', $teacher->id)}}" class="btn btn-primary btn-block">
                                    <span>Download</span>
                                </a> --}}
                            </div>
                            <div class="">
                                <button class="btn btn-success btn-block" onclick="window.print()">
                                    <span>Print</span>
                                </button>
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
