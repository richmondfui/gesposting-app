<?php

namespace App\Http\Controllers;

use App\Applicant;
use App\District;
use App\Http\Requests\UpdateSchoolRequest;
use App\School;
use App\Teacher;
use Illuminate\Http\Request;

class SchoolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $schools = auth()->user()->schools;
        $teachers = auth()->user()->district->teachers;
        // dd($teachers);
        // $applicants = Applicant::all();

        return view('backend.schools.index', compact('schools', 'teachers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $district = auth()->user()->district;

        return view('backend.schools.create', compact('district'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        auth()->user()->schools()->create($request->all());

        return redirect()->route('admin.district.schools.index')->withStatus('School created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(School $school)
    {
        abort_if($school->user_id != auth()->id(), 403);

        $teachers = auth()->user()->district->teachers;
        $teachers = $teachers->where('school_id', null);
        $district = auth()->user()->district;

        return view('backend.schools.edit', compact('school', 'district', 'teachers'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, School $school)
    {
        // dd($request->all());
        $school->name = $request->name;
        $school->user_id = auth()->id();
        $school->district_id = $request->district_id;
        $school->location = $request->location;
        $school->update();



        return redirect()->route('admin.district.schools.index')->withStatus('School updated successfully');
    }


    public function addTeacherToSchool(Request $request)
    {
        // dd($request->all(), $request->school_id);

        if ($request->has('selected_teacher') && $request->has('school_id')) {


            foreach ($request->selected_teacher as $id) {
                // Retrieve teacher
                $teacher = Teacher::find($id);
                // Update teacher's school id
                $teacher->update(['school_id' => $request->school_id]);
            }
        }


        return redirect()->route('admin.district.schools.index')->withStatus('Teacher added to school successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(School $school)
    {
        abort_if($school->user_id != auth()->id(), 403);

        $school->delete();

        return redirect()->route('admin.district.schools.index')->withStatus('School deleted successfully');
    }
}
