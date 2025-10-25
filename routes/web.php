<?php

use Illuminate\Support\Facades\Route;
use App\Models\Trainee;
use App\Models\Role;
use App\Http\Controllers\TraineeController;
use App\Http\Controllers\RoleController;


Route::get('/', function () {
    return view('pages.welcome',[
        'title' => 'Mina',
        'country' => 'BD'
    ]);
});
Route::view('/about', 'pages.about');

Route::get('/users/{username}/profile/{id?}', function ($username,$id=null) {
    return view('pages.users',[
        'user' => $username,
        'id' => $id
    ]);
    
});
// Route::get('/trainees', function () {
//     return view('pages.index',[
//         'traineess' => Trainee::all()
//     ]);
// });
Route::get('/trainees', [TraineeController::class,'index'])->name("trainees.index");
// Route::get('/trainees/{id}', function ($id) {
//     return view('pages.show', [
//         'id' => $id,
//         // 'trainee' => $single
//         'trainee' => Trainee::find($id)
//     ]);
// });
Route::get('/trainees/{id}',[TraineeController::class,'show'])->name("trainees-details");
Route::get('/roles',[RoleController::class,'index'])->name('roles.index');
Route::get('/roles/{id}',[RoleController::class,'show'])->name('role.dtails');
// Route::get('/roles',function () {
//     // dd(Role:: all());
//     // return view
//     });