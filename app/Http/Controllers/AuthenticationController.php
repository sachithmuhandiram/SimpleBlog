<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\User;

class AuthenticationController extends Controller
{
    public function sendReminderEmail(Request $request, $id)
    {
        $user = User::findOrFail($id);

        $this->dispatch(new SendReminderEmail($user));
    }

    public function userSignUp(Request $request)
    {
        $this->validate($request,[
          'email' => 'required|email|unique:users',
          'first_name' => 'required|max:120',
          'password' => 'required|min:8'
        ]);

        $email = $request['email'];
        $first_name = $request['first_name'];
        $password = bcrypt($request['password']);

        $user = new User();
        $user->email = $email;
        $user->first_name = $first_name;
        $user->password = $password;
        $user->save();

        Auth::login($user);

        return redirect('/');
    }

    public function userLogin(Request $request)
    {

          $this->validate($request,[
            'email' => 'required|email',
            'password' => 'required'
          ]);

          	if(Auth::attempt(['email'=>$request['email'],'password'=>$request['password']])){
          			
               return redirect('home');
              
			}
    }

}
