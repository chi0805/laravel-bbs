<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Record;

class HomeControllder extends Controller
{
    public function index()
    {
        $records = Record::all();
        foreach ($records as $record) {
            $tags = explode(',', $record->tags);
            $record->tags = $tags;
        }

        return view('home', [
            'records' => $records,
        ]);
    }

}
