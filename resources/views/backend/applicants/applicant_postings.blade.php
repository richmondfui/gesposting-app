@extends('layouts.app', ['pageTitle' => ' - All Applicants'])

@section('content')

<div class="app-main">
    @include('layouts.includes.backend.sidebar', ['activePage' => 'applicants'])

    <div class="app-main__outer">
        <div class="app-main__inner">
            <div class="app-page-title">
                <div class="page-title-wrapper">
                    <div class="page-title-heading">
                        <div class="page-title-icon">
                            <i class="fas fa-eye icon-gradient bg-mean-fruit">
                            </i>
                        </div>
                        <div>College Applicants Posting Portal
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-xl-4">
                    <div class="card mb-3 widget-content bg-midnight-bloom">
                        <div class="widget-content-wrapper text-white">
                            <div class="widget-content-left">
                                <div class="widget-heading">Total Applicants</div>
                                <div class="widget-subheading">All applicants to the region</div>
                            </div>
                            <div class="widget-content-right">
                                <div class="widget-numbers text-white"><span>{{$applicants->count()}}</span></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-xl-4">
                    <div class="card mb-3 widget-content bg-arielle-smile">
                        <div class="widget-content-wrapper text-white">
                            <div class="widget-content-left">
                                <div class="widget-heading">Pending Applicants</div>
                                <div class="widget-subheading">All schools in the region</div>
                            </div>
                            <div class="widget-content-right">
                                <div class="widget-numbers text-white">
                                    <span>{{$applicants->where('status','pending')->count()}}</span></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-xl-4">
                    <div class="card mb-3 widget-content bg-grow-early">
                        <div class="widget-content-wrapper text-white">
                            <div class="widget-content-left">
                                <div class="widget-heading">Posted Applicants</div>
                                <div class="widget-subheading">All teachers present in the region</div>
                            </div>
                            <div class="widget-content-right">
                                <div class="widget-numbers text-white">
                                    <span>{{ $applicants->where('status','posted')->count() }}</span></div>
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
                        <button type="button" class="close" aria-label="Close"><span data-dismiss="alert"
                                aria-hidden="true">×</span></button>
                        {{ session('status') }}
                    </div>
                    @endif
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <form action="{{ route('admin.posting.complete_posting') }}" method="post">
                        @csrf
                        @method('post')

                    <div class="main-card mb-3 card">
                        <div class="card-header mb-2">All Applicants Awaiting Posting
                            <div class="btn-actions-pane-right p-2">
                                <div class="nav">
                                    <div class="pr-2">
                                        <select name="district_id" id="schoolDistID" class="form-control" required>
                                            <option value="">Select District for Posting</option>
                                            @foreach ($districts as $district)
                                            <option class="distOpt" value="{{$district->id}}">{{$district->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="">
                                        <button type="button" class="btn btn-primary" onclick="countChecked()"
                                            data-toggle="modal" data-target="#postApplicantModal">
                                            Post Applicants
                                        </button>
                                    </div>
                                </div>
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
                                            <th>Staff ID</th>
                                            <th>Name</th>
                                            <th class="text-center">Gender</th>
                                            <th class="text-center">College Attended</th>
                                            <th class="text-center">Course Offered</th>
                                            <th class="text-center">Prefered region</th>
                                            <th class="text-center">Status</th>
                                            <th class="text-center">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($applicants as $key => $applicant)
                                        <tr>
                                            <td class="text-center text-muted">{{$key + 1}}</td>
                                            <td class="text-center text-muted"><input type="checkbox"
                                                    class="check-boxes" name="selected_applicant[]"
                                                    value="{{$applicant->id}}" id="{{$applicant->id}}"></td>
                                            <td class="">{{$applicant->staff_id}}</td>
                                            <td>{{$applicant->title.' '.$applicant->firstname.' '.$applicant->lastname}}
                                            </td>
                                            <td class="text-center">{{$applicant->gender}}</td>
                                            <td class="text-center">{{$applicant->college_attended}}</td>
                                            <td class="text-center">{{$applicant->course_offered}}</td>
                                            <td class="text-center">
                                                {{$applicant->region_1.', '.$applicant->region_2.', '.$applicant->region_3}}
                                            </td>
                                            <td class="">
                                                <div
                                                    class="badge {{$applicant->status == 'posted' ? 'badge-success' : 'badge-warning' }}">
                                                    {{ $applicant->status}}
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                    <a href="{{route('admin.posting.applicants.show', $applicant->id)}}"
                                                        type="button" id="PopoverCustomT-1"
                                                        class="btn btn-primary btn-sm">
                                                        <i class="fas fa-edit"></i>
                                                    </a>
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

                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-primary">Agree</button>

            </div>
        </div>
    </div>
</div>
</form>
@endsection

@push('js')
<script>
    $(function () {
        $('#applicantTable').DataTable();
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
        var district_name = '';

        $('.check-boxes').each(function () {
            if (this.checked == true) {
                counter += 1;
            }
        });

        $('.distOpt').each(function () {

            if (this.selected == true) {
               district_name = this.text;
            }
        });

        if (counter > 0) {

            $('#countedApplicants').text('You have selected ' +counter +
                " applicants to be posted to the "+district_name+", select agree to confirm this action or cancel to decline."
            );

        } else {
            $('#countedApplicants').text(
                "You have not selected any applicants to be posted to the "+district_name+", cancel and select at least one applicant."
            );

        }
    }

</script>
@endpush
