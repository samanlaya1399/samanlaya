<?php

namespace App\Http\Controllers\Admin;

use App\Role;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LevelManageController extends Controller
{
    public function index()
    {
        $roles = Role::latest()->with('users')->paginate(20);
        $title = 'لیست مدیران  ';
        return view('panel.role.admin' , compact('roles','title'));
    }

    public function create()
    {
        $title = 'ویرایش نقش  ';
        return view('panel.role.createadmin',compact('title'));
    }

    public function store(Request $request)
    {
        $this->validate($request , [
            'user_id' => 'required',
            'role_id' => 'required'
        ]);

        User::find($request->input('user_id'))->roles()->sync($request->input('role_id'));
        return redirect(route('level.index'));

    }

    public function edit(User $user)
    {
        $title = 'ویرایش نقش  ';
        return view('panel.role.editadmin' , compact('user','title'));
    }

    public function update(Request $request , User $user)
    {
        $user->roles()->sync($request->input('role_id'));
        return redirect(route('level.index'));
    }

    public function destroy(User $user)
    {
        $user->roles()->detach();
        return redirect(route('level.index'));
    }
}
