<?php 
namespace App\Http\Controllers;

use App\Models\artist;
use Illuminate\Http\Request;
use  App\Models\event;

class EventController extends Controller{

    public function addevent(){
        return view('forms.addevent');
    }
    public function eventstore(Request $request){
        $data = $request->validate([
            'legalName' => 'required',
            'eventName'=> 'required',
            'eventDate'=> 'required',
            'artistID'=> 'required',
            'eventOrganizer'=> 'required',
            'fixedFee'=> 'required',
            'doorFee'=> 'required',
            'merchandiseSales'=> 'required',
        ]);
        $newEvent = event::create($data);
        return redirect(route('forms.addevent'));
    }
// ...
        public function create()
        {
            $options = artist::getOptions();

            return view('forms.addevent', compact('options'));
        }

        public function showincrease()
        {
            $nextEventID = event::max('eventID') + 1;

            return view('forms.addevent', ['nextEventID' => $nextEventID]);
        }
}
