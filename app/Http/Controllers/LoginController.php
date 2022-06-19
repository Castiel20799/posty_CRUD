<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    public function create()
    {
        return view ('auth.login');
    }

    public function store(Request $request)
    {
        $user = User::where('email',$request->email)->first();        

        $validator = Validator::make($request->all(),[
            'email' => 'required',
            'password' => 'required'
        ]);


        if($validator->fails()){
            return redirect('/login')
            ->withErrors($validator)
            ->withInput();
        }        
       
    
        if(! $user)
        {
            return redirect('login');
        }
        
        $credential = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        

        if(! Auth::attempt($credential)){
            return redirect('login');
        }

        return redirect('/posts');

        //email + password -> verify
        //user ingo -> session
    }

    public function destroy()
    {
        Auth::logout();

        return redirect ('login');
    }
    public function myValidate($request)
    {   
    $request-> validate([
           'email' => 'required',
           'password' => 'required'
      ],
      [
           'email.required' => "please add required email",
           'password.required' => "Password Required"
          
    ]);
 }
}
