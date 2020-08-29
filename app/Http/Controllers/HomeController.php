<?php

namespace App\Http\Controllers;

use App\Applicant;
use App\District;
use App\School;
use App\Teacher;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        // dd(request());
        $districts = District::all();
        $schools = School::all();
        $teachers = Teacher::all();
        $applicants = Applicant::all();

        return view('backend.dashboard', compact('districts', 'schools', 'teachers', 'applicants'));
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function districtIndex()
    {
        $schools = auth()->user()->schools;
        $teachers = auth()->user()->district->teachers;


        return view('backend.district_dashboard', compact('schools', 'teachers'));
    }

}
