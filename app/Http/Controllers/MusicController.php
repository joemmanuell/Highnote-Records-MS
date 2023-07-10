<?php 
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MusicController extends Controller{

    public function addmusic(){
        return view('forms.addmusic');
    }
}