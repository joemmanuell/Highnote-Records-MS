<?php 
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller{

    public function addevent(){
        return view('forms.addevent');
    }
}