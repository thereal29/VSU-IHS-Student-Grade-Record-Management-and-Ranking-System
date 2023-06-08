<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RecordController extends Controller
{
    public function maincontent(){
        return view('admin.academic_record', ["msg"=>"This is academic record"]);
    }
}
