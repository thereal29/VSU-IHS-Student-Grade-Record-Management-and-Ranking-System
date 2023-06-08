<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function maincontent(){
        return view('admin.honor_roll_reports', ["msg"=>"This is report page"]);
    }
}
