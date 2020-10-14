<?php

namespace App\Http\Controllers;

use App\Applicant;
use App\District;
use App\School;
use App\Teacher;

class HomeController extends Controller
{
    /**
     * Show the regional HR's dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $districts = District::all();
        $schools = School::all();
        $teachers = Teacher::all();
        $applicants = Applicant::all();

        return view('backend.dashboard', compact('districts', 'schools', 'teachers', 'applicants'));
    }

    /**
     * Show the district HR's dashboard.
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
