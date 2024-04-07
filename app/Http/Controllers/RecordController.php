<?php

namespace App\Http\Controllers;

use App\Models\Record;
use App\Models\Libraries;
use Illuminate\Http\Request;

class RecordController extends Controller
{
    public function index(){
        $record = Record::with('lab')->get();
        return view('record', compact('record'));
        // foreach($record as $item){
        //     echo "<div>
        //     <h3>$item->address</h3>
        //     <h3>{$item->lab->incharge}</h3>
        //     <h3>$item->city</h3>
        //     </div>";
        // }
        // return view('record', compact('record'));
        // return $record;
        // echo $record->address . "<br>";
        // echo $record->city . "<br>";
        // echo $record->$lab->title . "<br>";
    }
    public function store(){
        $labrary = new Libraries();
        $labrary->lab_id = '3';

        $labrary->incharge = 'Ijaz ahmad';
        $labrary->depp = 'Computer Sciences';

        $record = new Record();
        $record->address = 'Landi sarak';
        $record->country = 'Pakistan';
        $record->city = 'Peshawar';
        $record->zipcode = '12343';

        $record->save();
        $record->lab()->save($labrary);
    }
}
