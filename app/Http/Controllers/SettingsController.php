<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\User;
use Validator;


class SettingsController extends Controller
{
    public function index(Request $request)
    {

        if($request->method() == 'POST') {

            $user = User::find(Auth::user()->id);

            if(!empty($request->password) && !empty($request->password_confirmation)){

                if(!empty($request->email) && $user->email == $request->email){

                    $rules = ['password' => 'min:6|required|confirmed'];

                }else{

                    $rules = [
                        'email' => 'unique:users|email|required',
                        'password' => 'min:6|required|confirmed',
                    ];

                }

            }elseif(!empty($request->email) && $user->email != $request->email){

                $rules = ['email' => 'unique:users|email|required'];

            }else return redirect()->route('settings')->with('success', 'Credentials is not editing');

            $validator = Validator::make($request->all(), $rules);

            if ($validator->fails()) {
                return redirect('settings')
                    ->withErrors($validator)
                    ->withInput();
            }

            $user->email = $request->email;

            if(!empty($request->password) && !empty($request->password_confirmation))
                $user->password = Hash::make($request->password);

            $user->save();

            return redirect()->route('settings')->with('success', 'Credentials changed');

        }else{

            return view('settings');

        }

    }
}
