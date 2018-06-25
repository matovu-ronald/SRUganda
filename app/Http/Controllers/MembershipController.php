<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;
use App\User;
use jeremykenedy\LaravelRoles\Models\Role;
use jeremykenedy\LaravelRoles\Models\Permission;
use Illuminate\Support\Facades\Hash;

class MembershipController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $member = new Member();
        $inputs = $request->all();
        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users',
            'institute' => 'required',
            'district' => 'required',
            'phone' => 'required',
            'gender' => 'required',
            'profession' => 'required',
            'about' => 'required',
            'password' => 'required|string|min:6|confirmed',
        ]);

        $user = User::create([
            'name' => $inputs['name'],
            'email' => $inputs['email'],
            'password' => Hash::make($inputs['password']),
        ]);

        $role = Role::where('name', '=', 'User')->first();

        $user->attachRole($role);

        $member->phone = $inputs['phone'];
        $member->district = $inputs['district'];
        $member->gender = $inputs['gender'];
        $member->institute = $inputs['institute'];
        $member->about = $inputs['about'];
        $member->confirmed = false;
        $member->user_id = $user->id;

        $member->save();

        \Auth::guard()->guard()->login($user);

        return back();
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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
