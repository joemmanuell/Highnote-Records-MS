<?php 
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContractController extends Controller{

    public function addcontract(){
        return view('forms.addcontract');
    }
}