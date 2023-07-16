<?php

namespace App\Http\Controllers\Stud1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index(){
        return view('stud1.profile');
    }
}
