<?php

namespace App\Http\Controllers;
//use\Illuminate\Support\Facades\DB;//for 
use App\Models\User;
class UserController extends Controller
{
    public function index(){
        // $users = User::all();
        // $users = User::from('users as u')
        // ->select('u.user_id','u.first_name','u.last_name','u.role_id','u.email','r.name as role')
        // ->join('roles as r','u.role_id','=','r.id')
        // ->where('u.role_id',4)
        // ->orderBy('u.user_id','desc')
        // ->get();

        // $users = User::from('users as u')
        // ->select('u.user_id','u.first_name','u.last_name','u.role_id','u.email','r.name as role')
        // ->join('roles as r','u.role_id','=','r.id')
        // ->orderBy('u.user_id','desc')
        // ->paginate(10);//when use paginate then get() do not use
        // // dd($users);
        $users = User::from('users as u')
        ->select('u.user_id','u.first_name','u.last_name','u.role_id','u.email','r.name as role')
        ->join('roles as r','u.role_id','=','r.id')
        ->orderBy('u.user_id','desc')
        // ->skip(4)//1st 4 ta bad deba (when use Skip then must be use Take)
        // ->take(4)//skip kora koita neba
        // ->take(PHP_INT_MAX)//skip kora bake sob neba
        // ->get();
            ->paginate(3);
        // dd($users);
        return view('pages/users.index', compact('users'));
    }
    public function show($id){
        $user = User::from('users as u')
        ->select('u.user_id','u.first_name','u.last_name','u.role_id','u.email','r.name as role')
        ->join('roles as r','u.role_id','=','r.id')
        ->where('u.user_id','=',$id)
        ->first();
        // dd($user);
        return view('pages/users/show', compact('user'));
    }
}
