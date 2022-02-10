<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Session;

class LoginController extends Controller
{
    //
    public function login()
    {
        if(session()->has('user_name'))
            {
                return redirect()->route('dashboard.index');
            }
            else{
                return view('auth.login');
            }
    }
    public function loginCheck(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'password' => 'required'
        ]);
        $name = $request->name;
        $password = $request->password;
        $result = User::where('name',$name)->where('password',$password)->first();
        if($result){
            $user_name = $result->name;
            Session::put('user_name',$user_name);
            return redirect()->route('dashboard.index');
        }
        else{
            return redirect()->back()->with('wrong','Email or Password wrong');
        }


    }

    public function logout()
    {
        Session()->flush();
        return redirect()->route('login');
    }
}