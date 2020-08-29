@extends('layouts.app', ['pageTitle' => ' - All Applicants'])

@section('content')

<div class="app-main">
    @include('layouts.includes.backend.sidebar', ['activePage' => 'v-applicants'])

    <div class="app-main__outer">
        <div class="app-main__inner">
            <div class="app-page-title">
                <div class="page-title-wrapper">
                    <div class="page-title-heading">
                        <div class="page-title-icon">
                            <i class="fas fa-eye icon-gradient bg-mean-fruit">
                            </i>
                        </div>
                        <div>Posting Applicants
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
                                <div class="widget-numbers text-white"><span>{{$applicants->where('status','pending')->count()}}</span></div>
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
                                <div class="widget-numbers text-white"><span>{{ $applicants->where('status','posted')->count() }}</span></div>
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
                        <div class="card-header mb-2">Posting Applicants
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="applicantTable" class="align-middle mb-0 table table-borderless table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th class="text-center">#</th>
                                            <th>Staff ID</th>
                                            <th>Name</th>
                                            <th class="text-center">Gender</th>
                                            <th class="text-center">Course Offered</th>
                                            <th class="text-center">Residential Address</th>
                                            <th class="text-center">Status</th>
                                            <th class="text-center">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($applicants as $applicant)
                                        <tr>
                                            <td class="text-center text-muted">{{$applicant->id}}</td>
                                            <td class="">{{$applicant->staff_id}}</td>
                                            <td>{{$applicant->title.' '.$applicant->firstname.' '.$applicant->lastname}}</td>
                                            <td class="text-center">{{$applicant->gender}}</td>
                                            <td class="text-center">{{$applicant->course_offered}}</td>
                                            <td class="text-center">{{$applicant->residential_address}}</td>
                                            <td class="text-center">
                                                <div class="badge {{$applicant->status == 'posted' ? 'badge-success' : 'badge-warning' }}">
                                                    {{ $applicant->status}}
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <form action="{{ route('admin.posting.applicants.destroy', $applicant->id) }}"
                                                    method="post">
                                                    @csrf
                                                    @method('delete')
    
                                                {{-- <a href="{{route('admin.posting.applicants.edit', $applicant->id)}}" type="button"
                                                    id="PopoverCustomT-1" class="btn btn-danger btn-sm">Edit</a> --}}
    
                                                    <button type="button" id="del-btn-{{$applicant->id}}"
                                                        class="btn btn-primary btn-sm"
                                                        onclick="confirm('{{ __("Are you sure you want to delete this applicant?") }}') ? this.parentElement.submit() : ''">Delete</button>
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
      $('#applicantTable').DataTable();
    });
  </script>
@endpush
