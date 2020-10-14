@extends('layouts.frontend', ['pageTitle' => ' - Posting Application Form'])

@section('content')


<div class="site-wrap">


    <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close mt-3">
                <span class="icon-close2 js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div>

    @include('layouts.includes.navbar', ['active' => 'posting-reg'])

    <div class="site-section ftco-subscribe-1 site-blocks-cover pb-4 mt-5"
        style="background-image: url('/images/bg_1.jpg')">
        <div class="container">
            <div class="row text-center mt-3">
                <div class="col-md-12">
                    <h2 class="mb-0">Welcome to the GES Application For Posting Portal</h2>
                    <p>Please fill out the form below with your valid data for effective posting.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="site-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <form action="{{route('posting.register')}}" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="card register-card mb-4">
                            <div class="card-header">
                                {!! __("PERSONAL INFORMATION (<i><b>Note: </b> fields with <span
                                        class='text-danger'>*</span> are required.</i>)") !!}
                            </div>
                            <div class="card-body">
                                <div class="form-row mb-3">
                                    <div class="form-group col-md-2">
                                        <label for="applicantTitle">Title <span class="text-danger">*</span></label>
                                        <select class="form-control @error('title') is-invalid @enderror" name="title"
                                            id="applicantTitle">
                                            <option value="">Choose Title</option>
                                            <option value="Mr" @if (old('title')=='Mr' ) selected @endif>Mr</option>
                                            <option value="Miss" @if (old('title')=='Miss' ) selected @endif>Miss
                                            </option>
                                            <option value="Mrs" @if (old('title')=='Mrs' ) selected @endif>Mrs</option>
                                        </select>
                                        @error('title')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="applicantFirstname">Firstname <span
                                                class="text-danger">*</span></label>
                                        <input type="text" name="firstname" placeholder="Joshua"
                                            class="form-control @error('firstname') is-invalid @enderror"
                                            id="applicantFirstname" value="{{ old('firstname') }}">

                                        @error('firstname')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="applicantLastname">Lastname <span
                                                class="text-danger">*</span></label>
                                        <input type="text" name="lastname" placeholder="Amartey"
                                            class="form-control @error('lastname') is-invalid @enderror"
                                            id="applicantLastname" value="{{ old('lastname') }}">
                                        @error('lastname')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="applicantOthername">Othername</label>
                                        <input type="text" name="othername" value="{{ old('othername') }}"
                                            placeholder="Nii"
                                            class="form-control @error('othername') is-invalid @enderror"
                                            id="applicantOthername">
                                    </div>
                                </div>
                                <div class="form-row mb-3">
                                    <div class="form-group col-md-3">
                                        <label for="inputCity">Gender <span class="text-danger">*</span></label>
                                        <select id="" name="gender"
                                            class="form-control @error('gender') is-invalid @enderror"
                                            value="{{ old('gender') }}">
                                            <option value="">Choose Gender</option>
                                            <option value="Male" @if (old('gender')=='Male' ) selected @endif>Male
                                            </option>
                                            <option value="Female" @if (old('gender')=='Female' ) selected @endif>Female
                                            </option>
                                        </select>
                                        @error('gender')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="inputState">Date of Birth <span class="text-danger">*</span></label>
                                        <input type="date" name="dob"
                                            class="form-control @error('dob') is-invalid @enderror" id=""
                                            value="{{ old('dob') }}">

                                        @error('dob')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="">Marital Status <span class="text-danger">*</span></label>
                                        <select id="" name="marital_status"
                                            class="form-control @error('marital_status') is-invalid @enderror"
                                            value="{{ old('marital_status') }}">
                                            <option selected>Choose Marital Status</option>
                                            <option value="Single" @if (old('marital_status')=='Single' ) selected
                                                @endif>Single</option>
                                            <option value="Married" @if (old('marital_status')=='Married' ) selected
                                                @endif>Married</option>
                                            <option value="Divorced" @if (old('marital_status')=='Divorced' ) selected
                                                @endif>Divorced</option>
                                        </select>
                                        @error('marital_status')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="">Nationality <span class="text-danger">*</span></label>
                                        <select name="nationality"
                                            class="form-control @error('nationality') is-invalid @enderror" id=""
                                            value="{{ old('nationality') }}">
                                            <option value="">Choose Country</option>
                                            <option value="Ghana" @if (old('nationality')=='Ghana' ) selected @endif>
                                                Ghana</option>
                                            <option value="Nigeria" @if (old('nationality')=='Nigeria' ) selected
                                                @endif>Nigeria</option>
                                            <option value="South Africa" @if (old('nationality')=='South Africa' )
                                                selected @endif>South Africa</option>
                                            <option value="Togo" @if (old('nationality')=='Togo' ) selected @endif>Togo
                                            </option>
                                        </select>

                                        @error('nationality')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="inputCity">Residential Address <span
                                                class="text-danger">*</span></label>
                                        <textarea name="residential_address"
                                            class="form-control @error('residential_address') is-invalid @enderror"
                                            id="">{{ old('residential_address') }}</textarea>
                                        @error('residential_address')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="">Email <span class="text-danger">*</span></label>
                                        <input type="email" name="email" placeholder="amarteynii205@gmail.com"
                                            class="form-control @error('email') is-invalid @enderror" id=""
                                            value="{{ old('email') }}">
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for="">Mobile Number <span class="text-danger">*</span></label>
                                        <input type="tel" name="mobile_number" placeholder="233546266666"
                                            class="form-control @error('mobile_number') is-invalid @enderror" id=""
                                            value="{{ old('mobile_number') }}">
                                        @error('mobile_number')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="">SSNIT Number <span class="text-danger">*</span></label>
                                        <input type="text" name="ssnit_number" placeholder="C0129018372001"
                                            class="form-control @error('ssnit_number') is-invalid @enderror" id=""
                                            value="{{ old('ssnit_number') }}">
                                        @error('ssnit_number')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row my-4">
                                    <div class="col-md-12">
                                        <h6 class="card-title" style="font-variant: small-caps; font-size: 1.2rem;">
                                            <u>Ghanaian languages spoken in order of proficiency.</u>
                                        </h6>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="">Ghanaian Language 1 <span class="text-danger">*</span></label>
                                        <input type="text" name="ghanaian_lang_1" placeholder="Ga"
                                            class="form-control @error('ghanaian_lang_1') is-invalid @enderror" id=""
                                            value="{{ old('ghanaian_lang_1') }}">
                                        @error('ghanaian_lang_1')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror

                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="">Ghanaian Language 2 <span class="text-danger">*</span></label>
                                        <input type="text" name="ghanaian_lang_2" placeholder="Dagomba"
                                            class="form-control @error('ghanaian_lang_2') is-invalid @enderror" id=""
                                            value="{{ old('ghanaian_lang_2') }}">
                                        @error('ghanaian_lang_2')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="">Ghanaian Language 3</label>
                                        <input type="text" name="ghanaian_lang_3" placeholder="Twi"
                                            class="form-control @error('ghanaian_lang_3') is-invalid @enderror" id=""
                                            value="{{ old('ghanaian_lang_3') }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card register-card mb-4">
                            <div class="card-header">
                                {!! __("ACADEMIC & PROFESSIONAL INFORMATION (<i><b>Note: </b> fields with <span
                                        class='text-danger'>*</span> are required.</i>)") !!}
                            </div>
                            <div class="card-body">
                                <div class="form-row mb-3">
                                    <div class="form-group col-md-4">
                                        <label for="">College Attended <span class="text-danger">*</span></label>
                                        <input type="text" name="college_attended"
                                            placeholder="Accra College of Education"
                                            class="form-control @error('college_attended') is-invalid @enderror" id=""
                                            value="{{ old('college_attended') }}">
                                        @error('college_attended')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for="">From <span class="text-danger">*</span></label>
                                        <input type="date" name="college_from"
                                            class="form-control @error('college_from') is-invalid @enderror" id=""
                                            value="{{ old('college_from') }}">
                                        @error('college_from')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for="">To <span class="text-danger">*</span></label>
                                        <input type="date" name="college_to"
                                            class="form-control @error('college_to') is-invalid @enderror" id=""
                                            value="{{ old('college_to') }}">
                                        @error('college_to')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="">College Certificate <span class="text-danger">*</span></label>
                                        <input type="file" name="college_certificate"
                                            class="form-control @error('college_certificate') is-invalid @enderror"
                                            id="" value="{{ old('college_certificate') }}">
                                        @error('college_certificate')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-3">
                                        <label for="">Course Offered <span class="text-danger">*</span></label>
                                        <input type="text" name="course_offered" placeholder="Mathematics and Science"
                                            class="form-control @error('course_offered') is-invalid @enderror" id=""
                                            value="{{ old('course_offered') }}">
                                        @error('course_offered')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="">College Location <span class="text-danger">*</span></label>
                                        <input type="text" name="college_location" placeholder="Accra"
                                            class="form-control @error('college_location') is-invalid @enderror" id=""
                                            value="{{ old('college_location') }}">
                                        @error('college_location')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="">Staff ID <span class="text-danger">*</span></label>
                                        <input type="text" name="staff_id" placeholder="858170"
                                            class="form-control @error('staff_id') is-invalid @enderror" id=""
                                            value="{{ old('staff_id') }}">
                                        @error('staff_id')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="">Registered No: <span class="text-danger">*</span></label>
                                        <input type="text" name="registered_number" placeholder="10306/10"
                                            class="form-control @error('registered_number') is-invalid @enderror" id=""
                                            value="{{ old('registered_number') }}">
                                        @error('registered_number')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card register-card mb-4">
                            <div class="card-header">
                                {!! __("MISCELENEOUS (<i><b>Note: </b> fields with <span class='text-danger'>*</span>
                                    are required.</i>)") !!}
                            </div>
                            <div class="card-body">
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="">1st Region Choice <span class="text-danger">*</span></label>
                                        <select name="region_1"
                                            class="form-control @error('region_1') is-invalid @enderror" id="">
                                            <option value="">Choose Region</option>
                                            @foreach ($regions as $region)
                                            <option value="{{ $region->name }}" @if(old('region_1')==$region->name)
                                                selected @endif>{{ $region->name. ' Region' }}</option>
                                            @endforeach
                                        </select>
                                        @error('region_1')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for=""> 2ndRegion Choice <span class="text-danger">*</span></label>
                                        <select name="region_2"
                                            class="form-control @error('region_2') is-invalid @enderror" id="">
                                            <option value="">Choose Region</option>
                                            @foreach ($regions as $region)
                                            <option value="{{ $region->name }}" @if(old('region_2')==$region->name)
                                                selected @endif>{{ $region->name. ' Region' }}</option>
                                            @endforeach
                                        </select>
                                        @error('region_2')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                    <div class="form-group col-md-4">
                                        <label for="">3rd Region Choice</label>
                                        <select name="region_3"
                                            class="form-control @error('region_3') is-invalid @enderror" id="">
                                            <option value="">Choose Region</option>
                                            @foreach ($regions as $region)
                                            <option value="{{ old('region_3',$region->name) }}"
                                                @if(old('region_3')==$region->name) selected
                                                @endif>{{ $region->name. ' Region' }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-secondary btn-md px-3">SUBMIT</button>
                            <button class="btn btn-danger btn-md px-3">CANCEL</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>

    @endsection
