<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\User;


class ChangeCredentialsController extends Controller
{
    public function __invoke(Request $request)
    {
        $this->validate($request,[
            'new_password'          =>  'required',
            'repeat_password'   =>  'required|same:new_password',
        ]);

        $user = User::find(Auth::user()->id);
        $user->password = Hash::make($request->input('new_password'));
        $user->email = $request->input('email');
        $user->save();

        return redirect()->route('settings')->with('success', 'Credentials changed');;

    }
}
