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
        style="background-image: url('images/bg_1.jpg')">
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

                        <div class="card mb-4">
                            <div class="card-header">
                                PERSONAL INFORMATION
                            </div>
                            <div class="card-body">
                                <div class="form-row mb-3">
                                    <div class="form-group col-md-2">
                                        <label for="applicantTitle">Title</label>
                                        <select class="form-control @error('title') is-invalid @enderror" name="title"
                                            id="applicantTitle"  value="{{ old('title') }}">
                                            <option value="">Choose Title</option>
                                            <option value="Mr">Mr</option>
                                            <option value="Miss">Miss</option>
                                            <option value="Mrs">Mrs</option>
                                        </select>
                                        @error('title')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="applicantFirstname">Firstname</label>
                                        <input type="text" name="firstname" placeholder="Joshua"
                                            class="form-control @error('firstname') is-invalid @enderror"
                                            id="applicantFirstname"  value="{{ old('firstname') }}">

                                        @error('firstname')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="applicantLastname">Lastname</label>
                                        <input type="text" name="lastname" placeholder="Amartey" class="form-control"
                                            id="applicantLastname"  value="{{ old('lastname') }}">
                                        @error('lastname')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="applicantOthername">Othername</label>
                                        <input type="text" name="othername"  value="{{ old('othername') }}" placeholder="Nii" class="form-control"
                                            id="applicantOthername">
                                    </div>
                                </div>
                                <div class="form-row mb-3">
                                    <div class="form-group col-md-3">
                                        <label for="inputCity">Gender</label>
                                        <select id="" name="gender" class="form-control"  value="{{ old('gender') }}">
                                            <option value="">Choose Gender</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="inputState">Date of Birth</label>
                                        <input type="date" name="dob" class="form-control" id=""  value="{{ old('dob') }}">

                                        @error('dob')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="">Marital Status</label>
                                        <select id="" name="marital_status" class="form-control"  value="{{ old('marital_status') }}">
                                            <option selected>Choose Marital Status</option>
                                            <option value="Single">Single</option>
                                            <option value="Married">Married</option>
                                            <option value="Divorced">Divorced</option>
                                        </select>
                                        @error('marital_status')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="">Nationality</label>
                                        <select name="nationality" class="form-control" id="" value="{{ old('nationality') }}">
                                            <option value="">Choose Country</option>
                                            <option value="Ghana">Ghana</option>
                                            <option value="Nigeria">Nigeria</option>
                                            <option value="South Africa">South Africa</option>
                                            <option value="Togo">Togo</option>
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
                                        <label for="inputCity">Residential Address</label>
                                        <textarea name="residential_address" class="form-control" id=""  value="{{ old('residential_address') }}"></textarea>
                                        @error('residential_address')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="">Email</label>
                                        <input type="email" name="email" placeholder="amarteynii205@gmail.com"
                                            class="form-control" id=""  value="{{ old('email') }}">
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for="">Mobile Number</label>
                                        <input type="tel" name="mobile_number" placeholder="233546266666"
                                            class="form-control" id=""  value="{{ old('mobile_number') }}">
                                        @error('mobile_number')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="">SSNIT Number</label>
                                        <input type="text" name="ssnit_number" placeholder="C0129018372001"
                                            class="form-control" id=""  value="{{ old('ssnit_number') }}">
                                        @error('ssnit_number')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row my-4">
                                    <div class="col-md-12">
                                        <h6 class="card-title">Ghanaian languages spoken in order of proficiency.</h6>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="">Ghanaian Language 1</label>
                                        <input type="text" name="ghanaian_lang_1" placeholder="Ga" class="form-control"
                                            id=""  value="{{ old('ghanaian_lang_1') }}">
                                        @error('ghanaian_lang_1')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror

                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="">Ghanaian Language 2</label>
                                        <input type="text" name="ghanaian_lang_2" placeholder="Dagomba"
                                            class="form-control" id=""  value="{{ old('ghanaian_lang_2') }}">
                                        @error('ghanaian_lang_2')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="">Ghanaian Language 3</label>
                                        <input type="text" name="ghanaian_lang_3" placeholder="Twi" class="form-control"
                                            id=""  value="{{ old('ghanaian_lang_3') }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                                ACADEMIC & PROFESSIONAL INFORMATION
                            </div>
                            <div class="card-body">
                                <div class="form-row mb-3">
                                    <div class="form-group col-md-4">
                                        <label for="">College Attended</label>
                                        <input type="text" name="college_attended"
                                            placeholder="Accra College of Education" class="form-control" id="" value="{{ old('college_attended') }}">
                                        @error('college_attended')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for="">From</label>
                                        <input type="date" name="college_from" class="form-control" id="" value="{{ old('college_from') }}">
                                        @error('college_from')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for="">To</label>
                                        <input type="date" name="college_to" class="form-control" id=""  value="{{ old('college_to') }}">
                                        @error('college_to')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="">College Certificate</label>
                                        <input type="file" name="college_certificate" class="form-control" id="" value="{{ old('college_certificate') }}">
                                        @error('college_certificate')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="">Course Offered</label>
                                        <input type="text" name="course_offered" placeholder="Mathematics and Science"
                                            class="form-control" id=""  value="{{ old('course_offered') }}">
                                        @error('course_offered')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="">Staff ID</label>
                                        <input type="text" name="staff_id" placeholder="858170" class="form-control"
                                            id=""  value="{{ old('staff_id') }}">
                                        @error('staff_id')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="">Registered No:</label>
                                        <input type="text" name="registered_number" placeholder="10306/10"
                                            class="form-control" id="" value="{{ old('registered_number') }}">
                                        @error('registered_number')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                                MISCELENEOUS
                            </div>
                            <div class="card-body">
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="">1st Region Choice</label>
                                        <select name="region_1" class="form-control" id="" value="{{ old('region_1') }}">
                                            <option value="">Choose Region</option>
                                            @foreach ($regions as $region)
                                            <option value="{{ old('region_1',$region->name) }}">{{ $region->name. ' Region' }}</option>
                                            @endforeach

                                        </select>
                                        @error('region_1')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="">2nd Region Choice</label>
                                        <select name="region_2" class="form-control" id="">
                                            <option value="">Choose Region</option>
                                            @foreach ($regions as $region)
                                            <option value="{{ old('region_2',$region->name) }}">{{ $region->name. ' Region' }}</option>
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
                                        <select name="region_3" class="form-control" id="">
                                            <option value="">Choose Region</option>
                                            @foreach ($regions as $region)
                                            <option value="{{ old('region_3',$region->name) }}">{{ $region->name. ' Region' }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-lg px-3">Submit</button>
                            <button class="btn btn-danger btn-lg px-3">Cancel</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>

    @endsection
