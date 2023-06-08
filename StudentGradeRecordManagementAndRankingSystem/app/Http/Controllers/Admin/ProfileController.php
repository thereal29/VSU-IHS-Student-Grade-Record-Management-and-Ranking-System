<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        $data = User::with('getAdmin')->get();
        return view('admin.profile', ['data'=>$data]);
    }
}
