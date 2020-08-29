@extends('layouts.app', ['pageTitle' => ' - Post Applicants'])

@section('content')

<div class="app-main">
    @include('layouts.includes.backend.sidebar', ['activePage' => 'applicants'])

    <div class="app-main__outer">
        <div class="app-main__inner">
            <div class="app-page-title">
                <div class="page-title-wrapper">
                    <div class="page-title-heading">
                        <div class="page-title-icon">
                            <i class="pe-7s-car icon-gradient bg-mean-fruit">
                            </i>
                        </div>
                        <div>{{$district->name}}
                        </div>
                    </div>
                    {{-- <div class="page-title-actions">
                        <div class="d-inline-block dropdown">
                            <div class="font-icon-wrapper font-icon-md">
                                <a href="{{route('admin.applicants.create')}}">
                    <i class="pe-7s-plus icon-gradient bg-warm-flame"></i>
                    </a>
                </div>
            </div>
        </div> --}}
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="main-card card mb-3">
            <div class="card-header mb-2">{{$district->name}} Overview
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-7">
                        <div class="row">
                            <div class="col-4"> <b>District Name:</b> </div>
                            <div class="col-7">{{$district->name}}</div>
                        </div>
                        <div class="row">
                            <div class="col-4"> <b>District ID:</b> </div>
                            <div class="col-7"></div>
                        </div>
                        <div class="row">
                            <div class="col-4"> <b>Number of Schools:</b></div>
                            <div class="col-7">{{$district->schools->count()}}</div>
                        </div>
                        <div class="row">
                            <div class="col-4"> <b>Number of Teachers:</b> </div>
                            <div class="col-7">{{$district->teachers->count()}}</div>
                        </div>

                    </div>

                    <div class="col-sm-5 text-left">
                        <h6><b>About</b></h6>
                        <p>terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.
                            Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a
                            bird on it squid single-origin coffee nulla assumenda shoreditch et.</p>

                    </div>
                    <!-- /.col -->
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <form action="{{ route('admin.posting.post_applicants.store') }}" method="post">
            @csrf
            @method('post')
            <div class="main-card mb-3 card">
                <div class="card-header mb-2">
                    {{$applicants->count()}} Pending Applicants
                    <div class="btn-actions-pane-right">
                        <button type="button" class="btn btn-primary" onclick="countChecked()" data-toggle="modal"
                            data-target="#postApplicantModal">
                            Post Applicants
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">

                        <table id="applicantTable"
                            class="align-middle mb-0 table table-borderless table-striped table-hover">
                            <thead>
                                <tr>
                                    <th class="text-center">#</th>
                                    <th class="text-center"><input type="checkbox" id="checkAllBoxes"></th>
                                    <th>Name</th>
                                    <th class="text-center">Gender</th>
                                    <th class="text-center">Course Offered</th>
                                    <th class="text-center">Languages Spoken</th>
                                    <th class="text-center">Selected Regions</th>
                                    <th class="text-center">Status</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($applicants as $key => $applicant)
                                <tr>
                                    <td class="text-center text-muted">{{$key + 1}}</td>
                                    <td class="text-center text-muted"><input type="checkbox" class="check-boxes"
                                            name="selected_applicant[]" value="{{$applicant->id}}" id=""></td>
                                    <td>{{$applicant->title.' '.$applicant->firstname.' '.$applicant->lastname}}</td>
                                    <td class="text-center">{{$applicant->gender}}</td>
                                    <td class="text-center">{{$applicant->course_offered}}</td>
                                    <td class="text-center">
                                        {{$applicant->ghanaian_lang_1.' ,'. $applicant->ghanaian_lang_2.' ,'. $applicant->ghanaian_lang_3}}
                                    </td>
                                    <td class="text-center">
                                        {{$applicant->region_1.' ,'. $applicant->region_2.' ,'. $applicant->region_3}}
                                    </td>
                                    <td class="text-center">
                                        <div
                                            class="badge {{$applicant->status == 'posted' ? 'badge-success' : 'badge-warning' }}">
                                            {{ $applicant->status}}
                                        </div>
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

<!-- Modal -->
<div class="modal fade" id="postApplicantModal" tabindex="-1" role="dialog" aria-labelledby="postApplicantModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="postApplicantModalLabel">Confirm Posting</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p class="mb-0"><span id="countedApplicants"></span></p>
            </div>
            <div class="modal-footer">

                <input type="hidden" name="district_id" value="{{$district->id}}">

                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-primary">Yes</button>

            </div>
        </div>
    </div>
</div>
</form>
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
            "autoWidth": true,
        });
    });

</script>
<script>
    $(function () {
        $('#checkAllBoxes').click(function (event) {
            if (this.checked) {

                $('.check-boxes').each(function () {

                    this.checked = true;

                });

            } else {

                $('.check-boxes').each(function () {

                    this.checked = false;

                });

            }
        });


    });

</script>
<script type="text/javascript">
    function countChecked() {
        var counter = 0;
        $('.check-boxes').each(function () {
            if (this.checked == true) {
                counter += 1;
            }
        });

        if (counter > 0) {

            $('#countedApplicants').text('You have selected ' +
                counter +
                " applicants to be posted to the {{$district->name }}, select yes to confirm this action or cancel to decline."
            );

        } else {
            $('#countedApplicants').text(
                "You have not selected any applicants to be posted to the {{$district->name }}, cancel and select at least one applicant."
            );

        }
    }

</script>
@endpush
