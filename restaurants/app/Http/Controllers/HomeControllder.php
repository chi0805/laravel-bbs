<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Record;

class HomeControllder extends Controller
{
    public function index()
    {
        $records = Record::all();

        return view('home', [
            'records' => $records,
        ]);
    }

}
