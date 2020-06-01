<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RecordController extends Controller
{
    public function getCreate()
    {
        return view('records/create');
    }
}
