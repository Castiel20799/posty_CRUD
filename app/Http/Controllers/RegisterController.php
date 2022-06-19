<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        $validator = validator :: make($request ->all(),[
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required'
       ]);
       if($validator ->fails())
       {
            return redirect('/register')->withErrors($validator)->withInput();
       }
        $user = new User();
        $user -> name = $request->name;
        $user -> email = $request->email;
        $user -> password = bcrypt($request->name);
        $user -> save();

        return redirect('login');
    }
    
//     public function myValidate($request)
//     {   
//     $request-> validate([
//             'name' => 'required',
//            'email' => 'required',
//            'password' => 'required'
//       ],
//       [
//             'name.required' => "add your name",
//            'email.required' => "please add required email",
//            'password.required' => "Password Required",
//            'password.min' => "put at least 8 words"
//     ]);
//  }
}
