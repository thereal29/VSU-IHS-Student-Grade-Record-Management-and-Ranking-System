<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MaintenanceController extends Controller
{
    public function maincontent(){
        return view('admin.maintenance', ["msg"=>"This is the system maintenance page"]);
    }
}
