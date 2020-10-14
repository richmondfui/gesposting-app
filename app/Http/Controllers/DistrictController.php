<?php

namespace App\Http\Controllers;

use App\District;
use App\Region;
use App\School;
use App\Teacher;
use Illuminate\Http\Request;

class DistrictController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $districts = District::all();
        $schools = School::all();
        $teachers = Teacher::all();

        return view('backend.districts.index', compact('districts','schools','teachers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $regions = Region::all();

        return view('backend.districts.create', compact('regions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, District $district)
    {
        // return "here";
        $district->create($request->all());

        return redirect()->route('admin.districts.index')->withStatus('District created successfully');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(District $district)
    {
        $regions = Region::all();

        return view('backend.districts.edit', compact('district', 'regions'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, District $district)
    {
        $district->update($request->all());

        return redirect()->route('admin.districts.index')->withStatus('District updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(District $district)
    {
        $district->delete();

        return redirect()->route('admin.districts.index')->withStatus('District deleted successfully');
    }
}
