<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Record;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $records = Record::all();
        $records = Record::paginate(8);
        foreach ($records as $record) {
            $tags = explode(',', $record->tags);
            $record->tags = $tags;
        }

        return view('home', [
            'records' => $records,
        ]);
    }
}
