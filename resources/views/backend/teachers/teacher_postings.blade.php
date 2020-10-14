@extends('layouts.app', ['pageTitle' => ' - All Teachers'])

@section('content')

<div class="app-main">
    @include('layouts.includes.backend.sidebar', ['activePage' => 'p-teachers'])

    <div class="app-main__outer">
        <div class="app-main__inner">
            <div class="app-page-title">
                <div class="page-title-wrapper">
                    <div class="page-title-heading">
                        <div class="page-title-icon">
                            <i class="fas fa-eye icon-gradient bg-mean-fruit">
                            </i>
                        </div>
                        <div> Teachers Posting Portal
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-xl-4">
                    <div class="card mb-3 widget-content bg-midnight-bloom">
                        <div class="widget-content-wrapper text-white">
                            <div class="widget-content-left">
                                <div class="widget-heading">Total Schools</div>
                                <div class="widget-subheading">All schools available in the region</div>
                            </div>
                            <div class="widget-content-right">
                                <div class="widget-numbers text-white"><span>{{$schools->count()}}</span></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-xl-4">
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
                <div class="col-md-4 col-xl-4">
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
                        <button type="button" class="close" aria-label="Close"><span data-dismiss="alert"
                                aria-hidden="true">×</span></button>
                        {{ session('status') }}
                    </div>
                    @endif
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <form action="{{ route('admin.district.teachers.complete_posting') }}" method="post">
                        @csrf
                        @method('post')

                        <div class="main-card mb-3 card">
                            <div class="card-header mb-2">All Teachers Awaiting Posting
                                <div class="btn-actions-pane-right p-2">
                                    <div class="nav">
                                        <div class="pr-2">
                                            <select name="school_id" id="schoolDistID" class="form-control" required>
                                                <option value="">Select School for Posting</option>
                                                @foreach ($schools as $school)
                                                <option class="schOpt" value="{{$school->id}}">{{$school->name}}
                                                </option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="">
                                            <button type="button" class="btn btn-primary" onclick="countChecked()"
                                                data-toggle="modal" data-target="#PostTeacherModal">
                                                Post Teachers
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="teacherTable"
                                        class="align-middle mb-0 table table-borderless table-striped table-hover">
                                        <thead>
                                            <tr>
                                                <th class="text-center">#</th>
                                                <th class="text-center"><input type="checkbox" id="checkAllBoxes"></th>
                                                <th>Staff ID</th>
                                                <th>Name</th>
                                                <th class="text-center">Gender</th>
                                                <th class="text-center">School</th>
                                                <th class="text-center">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($inactTeachers as $key => $teacher)
                                            <tr>
                                                <td class="text-center text-muted">{{$key + 1}}</td>
                                                <td class="text-center text-muted"><input type="checkbox"
                                                        class="check-boxes" name="selected_teachers[]"
                                                        value="{{$teacher->id}}" id="{{$teacher->id}}"></td>
                                                <td class="">{{$teacher->staff_id}}</td>
                                                <td>{{$teacher->title.' '.$teacher->firstname.' '.$teacher->lastname}}
                                                </td>
                                                <td class="text-center">{{$teacher->gender}}</td>
                                                <td class="text-center">{{$teacher->school->name ?? 'None'}}</td>
                                                <td class="text-center">
                                                    <a href="{{route('admin.district.teachers.show', $teacher->id)}}"
                                                        type="button" id="PopoverCustomT-1"
                                                        class="btn btn-primary btn-sm">Details</a>
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
<div class="modal fade" id="PostTeacherModal" tabindex="-1" role="dialog" aria-labelledby="PostTeacherModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="PostTeacherModalLabel">Confirm Posting</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p class="mb-0"><span id="countedTeachers"></span></p>
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
        $('#teacherTable').DataTable();
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
        var school_name = '';

        $('.check-boxes').each(function () {
            if (this.checked == true) {
                counter += 1;
            }
        });

        $('.schOpt').each(function () {

            if (this.selected == true) {
                school_name = this.text;
            }
        });

        if (counter > 0) {

            $('#countedTeachers').text('You have selected ' + counter +
                " teachers to be posted to the " + school_name +
                ", select yes to confirm this action or cancel to decline."
            );

        } else {
            $('#countedTeachers').text(
                "You have not selected any teachers to be posted to the " + school_name +
                ", cancel and select at least one teacher."
            );

        }
    }

</script>
@endpush
