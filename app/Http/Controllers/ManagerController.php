<?php 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\artist;
use Illuminate\Support\Facades\DB;




class ManagerController extends Controller{

    public function addartist(){
        return view('forms.addartist');
    }
    /*
    public function allartists(){
        $artists = artist::all();
        return view('forms.addartist', ['artists' => $artists]);
        
    }
    public function editartist(artist $artist){
        return view('forms.addartist', ['artist'=> $artist]);
        //dd($user);
    
    }
    */
    public function artiststore(Request $request){
        $data = $request->validate([
            'legalName' => 'required',
            'artistName'=> 'required',
            'sex'=> 'required',
            'DOB'=> 'required',
            'nationality'=> 'required',
            'contactDetails'=> 'required',
            'address'=> 'required',
            'socialMediaHandle'=> 'required',
            'biography'=> 'required',
        ]);
        $newArtist = artist::create($data);
        return redirect(route('main.manager'));
    }
// ...

        public function showincrease()
        {
            $nextArtistID = artist::max('artistID') + 1;

            return view('forms.addartist', ['nextArtistID' => $nextArtistID]);
        }
/*
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
    */
}