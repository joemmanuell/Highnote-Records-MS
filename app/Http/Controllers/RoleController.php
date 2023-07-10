<?php 
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoleController extends Controller{

    public function viewmanager(){
        return view('main.manager');
    }
    public function viewartist(){
        return view('main.artist');
    }
    public function viewaccountant(){
        return view('main.accountant');
    }
}