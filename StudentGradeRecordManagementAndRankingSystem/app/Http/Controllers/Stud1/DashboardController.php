<?php

namespace App\Http\Controllers\Stud1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        return view('stud1.dashboard', ["msg"=>"This is the character evaluation page"]);
    }
}
