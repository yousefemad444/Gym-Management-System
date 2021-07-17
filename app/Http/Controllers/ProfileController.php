<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileRequest;
use App\Http\Requests\UpdatePasswordRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function edit()
    {
        return view('profile.edit');
    }

    public function update(ProfileRequest $request)
    {
        auth()->user()->update($request->validated());
        session()->flash('success',__('dashboard.updated_successfully'));
        return redirect()->back();
    }

    public function updatePassword(UpdatePasswordRequest $request)
    {
        $user=User::find(auth()->id());
        $user->password=bcrypt($request->password);
        $user->save();
        session()->flash('success_password',__('dashboard.updated_successfully'));
        return redirect()->back();
    }
}
