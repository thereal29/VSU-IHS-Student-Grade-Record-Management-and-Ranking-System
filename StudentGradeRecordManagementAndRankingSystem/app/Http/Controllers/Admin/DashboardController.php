<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\StudentUser;
class DashboardController extends Controller
{
    public function index(){
        $totalusers = User::count();
        $faculties = User::where('role', '4')->where('role','5')->count();
        $students = User::where('role', '6')->orwhere('role','7')->orwhere('role','8')->orwhere('role','9')->count();
        return view('admin.dashboard', compact('totalusers', 'faculties', 'students'));
    }
}
