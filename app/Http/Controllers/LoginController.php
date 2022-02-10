<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class LoginController extends Controller
{
    //
    public function login()
    {
        return view('auth.login');
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
            return redirect()->route('dashboard.index')->with('user_name',$result->id);
        }
        else{
            return redirect()->back()->with('wrong','Email or Password wrong');
        }


    }
}
