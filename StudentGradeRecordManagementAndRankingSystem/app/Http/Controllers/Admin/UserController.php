<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function maincontent(){

        $users = User::all();
        return view('admin.users_list', compact('users'));
    }
    public function index(){
       
    }
}
