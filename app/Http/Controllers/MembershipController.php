<?php

namespace App\Http\Controllers;

use App\Models\Member;
use App\Notifications\MemberFeedback;
use App\Notifications\MembershipNotification;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use jeremykenedy\LaravelRoles\Models\Permission;
use jeremykenedy\LaravelRoles\Models\Role;
use Config;
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
            'email' => 'required|unique:members',
            'institute' => 'required',
            'district' => 'required',
            'phone' => 'required',
            'gender' => 'required',
            'profession' => 'required',
            'about' => 'required',
            'files' => 'required',
        ]);

        // $user = User::create([
        //     'name' => $inputs['name'],
        //     'email' => $inputs['email'],
        //     'password' => Hash::make($inputs['password']),
        // ]);

        // $role = Role::where('name', '=', 'User')->first();

        // $user->attachRole($role);
        if ($request->hasFile('pic')) {
            $file = $request->file('pic');
            $path = $file->store('members', 'public');
            $member->pic = $path;
        }
        if ($request->hasFile('files')) {
            $attachements = $request->file('files');
            foreach ($attachements as $attachement) {
               $newpath = $attachement->store('attachements', 'public');
               $data[] = $newpath;
            }
        }
        $member->files = json_encode($data);
        $member->name = $inputs['name'];
        $member->email = $inputs['email'];
        $member->phone = $inputs['phone'];
        $member->district = $inputs['district'];
        $member->gender = $inputs['gender'];
        $member->institute = $inputs['institute'];
        $member->about = $inputs['about'];
        $member->profession = $inputs['profession'];
        $member->confirmed = false;

        $member->save();

        \Notification::route('mail', Config::get('settings.email_one'))->notify(new MembershipNotification());
        \Notification::route('mail', $inputs['email'])->notify(new MemberFeedback());


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
