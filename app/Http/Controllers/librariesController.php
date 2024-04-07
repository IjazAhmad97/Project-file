<?php

namespace App\Http\Controllers;

use App\Models\Libraries;
use App\Models\Record;
use Illuminate\Http\Request;

class librariesController extends Controller
{
    public function show(){
        // $lab = Libraries::with('record')->get();
        $labrary = new Libraries();
        $labrary->book_id = '2';
        $labrary->incharge = 'Ijaz ahmad';
        $labrary->depp = 'Computer Sciences';
        $labrary->save();
        // $lab = Libraries::select(['incharge', 'depp'])->withCount('record')->get();
        // $lab = Libraries::with('record')->find($id);

        // return $lab;
        // return view('libraries');
    }
}
