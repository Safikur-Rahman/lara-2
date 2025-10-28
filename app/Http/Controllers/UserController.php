<?php

namespace App\Http\Controllers;
//use\Illuminate\Support\Facades\DB;//for 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Role;
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
            $sl = ($users->currentPage() - 1) * $users->perPage() + 1;
        // dd($users);
        return view('pages/users.index', compact('users','sl'));
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
    public function destroy($id){
        $user = User::find($id);
        // $user = User::where('users.user_id','=',$id);
        $user->delete();
        // dd("delete");
        return redirect()->route('users-index')->with('success', 'User deleted successfully!');

    }
    public function create(){
        $roles = Role::all();
        return view('pages.users.create', compact('roles'));
    }
    public function store(Request $request){
        // dd($request->all());
    //    $user = new User();
    //    $user->first_name = $request->first_name;
    //    $user->last_name = $request->last_name;
    //    $user->email = $request->email;
    //    $user->password = $request->password;
    //    $user->role_id = $request->role_id;
    //    $user->save();
    //    dd($user);
        $request->validate([
            'first_name' => 'required|min:2|max:20',
            'last_name' => ['required','min:2','max:20'],
            'email' => ['required','email','unique:users'],
            'password' => ['required','min:6','confirmed'],
            
        ]);
       $user = User::create(
        [
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'role_id' => $request->role_id,
            'password' =>Hash::make($request->password),
        ]
        );
        // dd($user);
        return redirect()->route('users-index')->with('succes','User Created Successfully');
    }
}
