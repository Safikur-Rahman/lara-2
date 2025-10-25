<?php

namespace App\Http\Controllers;
use App\Models\Users;
class UsersController extends Controller
{
    public function index(){
        $users = Users::all();
        return view('pages/users.index', compact('users'));
    }
    public function show($id){
        $user = Users::find($id);
        return view('pages/users/show', compact('user'));
    }
}
