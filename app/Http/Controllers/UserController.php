<?php

namespace App\Http\Controllers;

use App\District;
use App\Http\Requests\UserRequest;
use App\Region;
use App\Role;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();

        return view('backend.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::all();
        $regions = Region::has('districts')->get();
        // dd($regions);

        return view('backend.users.create', compact('roles', 'regions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request, User $user)
    {
        $user = $user->create($request->merge([
            'password' => Hash::make($request->get('password'))
        ])->all());

        $user->roles()->sync($request->role_id);

        $district = District::find($request->district_id);
        $district->update(['user_id' => $user->id]);

        return redirect('admin/users')->withStatus('User created successfully.');
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
    public function edit(User $user)
    {
        $roles = Role::all();
        $districts = District::all();

        return view('backend.users.edit', compact('user', 'roles', 'districts'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserRequest $request, User $user)
    {
        // dd($request->all());

        // validated data from UserRequest
        $attributes = $request->validated();

        // if new password entered, hash and repalace old password
        // else maintain old password
        if (!is_null($attributes['password'])) {
            $attributes['password'] = Hash::make($attributes['password']);
        } else {
            $attributes['password'] = $user->password;
        }
        // update other user attributes
        $user->update($attributes);

        $user->roles()->sync($request->role_id);

        if ($user->hasAnyRoles(['District HR'])) {
     
            // $district = District::find($request->district_id);

            // if(!is_null($district)) {
            //     $district->update(['user_id' => $user->id]);
            // }
        }

        return redirect('admin/users')->withStatus('User updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();

        return redirect('admin/users')->withStatus('User deleted successfully.');
    }
}
