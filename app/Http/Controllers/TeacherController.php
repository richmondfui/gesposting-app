<?php

namespace App\Http\Controllers;

use App\District;
use App\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teachers = auth()->user()->district->teachers;
        $actTeachers = $teachers->where('school_id', '!=', null);
        $inactTeachers = $teachers->where('school_id', '=', null);
        // dd($teachers->where('school_id', '=', null));
        // $applicants = Applicant::all();

        return view('backend.teachers.index', compact('teachers', 'actTeachers', 'inactTeachers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $district = auth()->user()->district;

        return view('backend.teachers.create', compact('district'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return "here";
        // dd($request->all());
        auth()->user()->teachers()->create($request->all());

        return redirect()->route('admin.district.teachers.index')->withStatus('Teacher created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $teacher = Teacher::find($id);

        return view('backend.teachers.show', compact('teacher'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Teacher $teacher)
    {
        $district = auth()->user()->district;

        return view('backend.teachers.edit', compact('teacher', 'district'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Teacher $teacher)
    {
        dd('here');
        $teacher->name = $request->name;
        $teacher->user_id = auth()->id();
        $teacher->district_id = $request->district_id;
        $teacher->location = $request->location;

        if($request->has('school_id') && is_null($teacher->school_id)) {
            $teacher->school_id = $request->school_id;
        }

        $teacher->update();

        return redirect()->route('admin.district.teachers.index')->withStatus('Teacher updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Teacher $teacher)
    {
        $teacher->delete();

        return redirect()->route('admin.district.teachers.index')->withStatus('Teacher deleted successfully');
    }

}
