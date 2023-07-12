<?php 
namespace App\Http\Controllers;

use App\Models\artist;
use Illuminate\Http\Request;
use App\Models\contract;

class ContractController extends Controller{

    public function addcontract(){
        return view('forms.addcontract');
    }
    public function showartistInfo()
    {
        $options = artist::pluck('artistName');

        return view('forms.addcontract', ['options => $options']);
    }
 
    public function showcontractincrease()
    {
        $nextContractID = contract::max('contractID') + 1;

        return view('forms.addcontract', ['nextContractID' => $nextContractID]);
    }
    public function contractstore(Request $request){
        $data = $request->validate([
            'artistID' => 'required',
            'startDate' => 'required',
            'endDate' => 'required',
            'royaltyRate' => 'required',
            'advanceFee' => 'required',
            'eventCut' => 'required',
            'merchandiseCut' => 'required',
        ]);
        $newEvent = contract::create($data);
        return redirect(route('forms.addcontract'));
    }
// ...

        

       
}