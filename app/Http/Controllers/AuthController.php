<?php 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\User;



class AuthController extends Controller{

    public function viewlogin(){
        return view('auth.login');
    }
    public function viewresetpassword(){
        return view('auth.passwordreset');
    }
    public function view404(){
        return view('404');
    }
    public function viewregister(){
        return view('auth.register');
    }


    public function userstore(Request $request){
        $data = $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'username' => 'required|lowercase',
            'email' => 'required|email:rfc,dns',
            'password' => 'required|confirmed|min:6',
            'role' => 'required|lowercase',


        ]);
        $newUser = User::create($data);
        return redirect(route('auth.login'));

    }
   
}