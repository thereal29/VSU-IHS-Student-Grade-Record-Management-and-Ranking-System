<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Roles;

class UserController extends Controller
{
    public function maincontent(){

        $users = User::all();
        return view('admin.users_list', compact('users'));
    }
    public function filterRoles(Request $request){
        $roles = Roles::all();
        $users = User::when($request->role != null, function ($q) use ($request){
            return $q->where('role', $request->role);
        })
        ->paginate(10);     

        // if($request->ajax()){
        //    $users = $query->where(['role'=>$request->roles])->get();
        //     return response()->json(['users'=>$users]);
        // }
        // $users = $query->get();
        return view('admin.users_list', compact('roles', 'users'));
    }
}
