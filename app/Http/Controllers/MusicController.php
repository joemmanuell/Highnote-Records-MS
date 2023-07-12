<?php 
namespace App\Http\Controllers;

use App\Models\musiccatalogues;
use Illuminate\Http\Request;

class MusicController extends Controller{

    public function addmusic(){
        return view('forms.addmusic');
    }
    public function musicstore(Request $request){
        $data = $request->validate([
            'artistID' => 'required',
            'title'=> 'required',
            'platform'=> 'required',
            'ratePerStream'=> 'required',
            'streams'=> 'required',
            'productionCost'=> 'required',
            'distributionCost'=> 'required',
        ]);
        $newEvent = musiccatalogues::create($data);
        return redirect(route('forms.addmusic'));
    }

    public function showincrease()
    {
        $nextSongID = musiccatalogues::max('songID') + 1;

        return view('forms.addmusic', ['nextSongID' => $nextSongID]);
    } 
}