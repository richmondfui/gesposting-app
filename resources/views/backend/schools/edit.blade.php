@extends('layouts.app', ['pageTitle' => ' - Schools'])

@section('content')

<div class="app-main">
    @include('layouts.includes.backend.sidebar', ['activePage' => 'schools'])

    <div class="app-main__outer">
        <div class="app-main__inner">
            <div class="app-page-title">
                <div class="page-title-wrapper">
                    <div class="page-title-heading">
                        <div class="page-title-icon">
                            <i class="pe-7s-car icon-gradient bg-mean-fruit">
                            </i>
                        </div>
                        <div>Schools
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="main-card mb-3 card">
                        <div class="card-body">
                            <h5 class="card-title">Update School</h5>
                            <form method="POST" action="{{route('admin.district.schools.update', $school)}}"
                                class="needs-validation" novalidate>
                                @csrf
                                @method('put')

                                <div class="position-relative row form-group"><label for="schoolName"
                                        class="col-sm-2 col-form-label">School Name</label>
                                    <div class="col-sm-10"><input name="name" value="{{old('name',$school->name)}}"
                                            id="schoolName" placeholder="Gomoa School" type="text" class="form-control"
                                            required></div>
                                </div>
                                <div class="position-relative row form-group"><label for="schoolDistID"
                                        class="col-sm-2 col-form-label">District</label>
                                    <div class="col-sm-10">
                                        <select name="district_id" id="schoolDistID" class="form-control">
                                            <option value="{{$district->id}}" selected>{{$district->name}}</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="position-relative row form-group"><label for="schoolLocation"
                                        class="col-sm-2 col-form-label">Location</label>
                                    <div class="col-sm-10"><input name="location"
                                            value="{{old('location',$school->location)}}" id="schoolLocation"
                                            placeholder="" type="text" class="form-control" required></div>
                                </div>
                                <div class="position-relative row form-check">
                                    <div class="col-sm-10 offset-sm-2">
                                        <button class="btn btn-primary" type="submit">Update</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-md-12">
                    <form method="POST" action="{{route('admin.district.schools.add_teacher')}}"
                        class="needs-validation" novalidate>
                        @csrf
                        @method('post')

                        <input type="hidden" name="school_id" value="{{$school->id}}">
                        <div class="main-card mb-3 card">
                            <div class="card-header mb-2">
                                {{ ($teachers->count() > 0 )? $teachers->count() : 'No '}} teacher(s) without school
                                <div class="btn-actions-pane-right">
                                    <button type="button" class="btn btn-primary" onclick="countChecked()"
                                        data-toggle="modal" data-target="#addteacherModal">
                                        Add teacher(s) to school
                                    </button>
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
                                                <th class="text-center">Course Offered</th>
                                                <th class="text-center">Residential Address</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            @foreach ($teachers as $key => $teacher)
                                            <tr>
                                                <td class="text-center text-muted">{{$key + 1}}</td>
                                                <td class="text-center text-muted"><input type="checkbox"
                                                        class="check-boxes" name="selected_teacher[]"
                                                        value="{{$teacher->id}}" id="" required></td>
                                                <td class="">{{$teacher->staff_id}}</td>
                                                <td>{{$teacher->title.' '.$teacher->firstname.' '.$teacher->lastname}}
                                                </td>
                                                <td class="text-center">{{$teacher->gender}}</td>
                                                <td class="text-center">{{$teacher->course_offered}}</td>
                                                <td class="text-center">{{$teacher->residential_address}}</td>
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
<div class="modal fade" id="addteacherModal" tabindex="-1" role="dialog" aria-labelledby="addteacherModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addteacherModalLabel">Confirm Posting</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p class="mb-0"><span id="countedTeachers"></span></p>
            </div>
            <div class="modal-footer">

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
        $('#teacherTable').DataTable({
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

            $('#countedTeachers').text('You have selected ' +
                counter +
                " teacher(s) to be added to {{$school->name }} School, select yes to confirm this action or cancel to decline."
            );

        } else {
            $('#countedTeachers').text(
                "You have not selected any teacher to be added to the {{$school->name }} School, cancel and select at least one applicant."
            );

        }
    }

</script>
@endpush
