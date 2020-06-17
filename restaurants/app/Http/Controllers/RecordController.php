<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Record;

class RecordController extends Controller
{
    public function getCreate()
    {

        return view('records/create');
    }

    public function postCreate(Request $request)
    {
        $record= new Record();

        $record->title = $request->title;
        $record->message = $request->message;
        $image_path = $request->file('image')->store('public/images');
        $record->image = basename($image_path); 

        $record->save();

        return redirect()->route('home');
    }
}
