<?php

namespace App\Http\Controllers;

use App\Employee;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EmployeeController extends Controller
{
    $user = User::where('name','テスト')->firstOrFail();
    dd($user->name);
}
