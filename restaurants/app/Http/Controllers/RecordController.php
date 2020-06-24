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
        $record->tags = $request->tags;

        $record->save();

        return redirect()->route('home');
    }

    public function getSearch()
    {
        return view('records/search');
    }

    public function getIndex(Request $request)
    {
        $keyword = $request->input('keyword');
        $query = Record::query();

        if (!empty($keyword)) {
            $query->where('tags','like','%'.$keyword.'%')
                  ->orWhere('message','like','%'.$keyword.'%')
                  ->get();
        }

        $records = $query->paginate(8);
        var_dump($records);

        return view('records.index', [
            'records' => $records,
        ]);
    }
}
