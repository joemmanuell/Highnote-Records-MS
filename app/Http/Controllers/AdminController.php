<?php 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\User;



class AdminController extends Controller{

    public function viewadmin(){
        return view('main.admin');
    }

    public function admin(){
        $users = User::all();
        return view('main.admin', ['users' => $users]);
        
    }
    public function edituser(User $user){
        return view('main.edituser', ['user'=> $user]);
        //dd($user);
    
    }

    public function updateuser(User $user, Request $request){
        $data = $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'username' => 'required|lowercase',
            'email' => 'required|email:rfc,dns',
            'password' => 'required|confirmed|min:6',
            'role' => 'required|lowercase',
        ]);
        $user->update($data);
        return redirect(route('main.admin'))->with('success', 'User Updated Successfully');

    
    }
}